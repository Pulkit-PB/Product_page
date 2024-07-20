<?php
session_start(); // Start the session

// Check if user is logged in
if(!isset($_SESSION['login_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: LOGIN_PAGE.html");
    exit();
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];

    // Insert data into the ADDRESS table
    
    $servername = "127.0.0.1:3307";
    $username = "root";
	$password = "";
   	$dbname = "rabbit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert address details
    $sql = "INSERT INTO address (customer_id, address, city, state, country, postal_code) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssss", $_SESSION['login_id'], $address, $city, $state, $country, $postal_code);

    // Execute the statement
    if ($stmt->execute()) {
        // Update the address_id in the CUSTOMER table
        $address_id = $conn->insert_id;
        $update_sql = "UPDATE customer SET address_id = ? WHERE login_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ii", $address_id, $_SESSION['login_id']);
        $update_stmt->execute();

        echo 'Purchase successfull';
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>