<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    
    $email = $_POST['email'] ?? '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
}


    // Connect to the database 
    $servername = "127.0.0.1:3307";
    $username = "root";
	$password = "";
   	$dbname = "rabbit";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the login form
    $password = $_POST['password'];

    // Prepare SQL statement to retrieve user information based on the provided email
    $sql = "SELECT * FROM logins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists in the database, now we check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password matches, so we set session variables and redirect to dashboard
            $_SESSION['login_id'] = $row['login_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION["loggedin"] == true;
            if ($row['user_type']=="admin"){
                header("Location: Dashboard.php");
            }
            else{
                header("Location: Dashboard.php");
            }
            
            exit();
        } else {
            // Password does not match, then we display error message
            echo "Invalid email or password.";
        }
    } else {
        // Email does not exist in the database, display error message
        echo "Invalid email or password.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
