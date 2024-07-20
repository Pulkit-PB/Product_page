<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    $username1 = $_POST['username'];
    if (strlen($username) > 30) {
        die("Username must be at most 30 characters.");
    }

    // Validate password
    $password = $_POST['password'];
    if (strlen($password) < 8 || strlen($password) > 15) {
        die("Password must be between 8 and 15 characters.");
    }

    // Validate email
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database (you'll need to replace these values with your actual database credentials)
    $servername = "127.0.0.1:3307";
    $username = "root";
	$password = "";
   	$dbname = "rabbit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement to insert data into the logins table
    $stmt = $conn->prepare("INSERT INTO logins (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username1, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo '<script type="text/javascript">alert("Sign Up successful!!");</script>' ;
        header("Location: LOGIN_PAGE.html");
        exit();
    } 
    else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
