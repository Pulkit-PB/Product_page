<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database (you'll need to replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "your_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the purchase form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    // Prepare SQL statement to insert purchase details into the database
    $sql = "INSERT INTO purchases (name, phone, address, product, quantity) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $phone, $address, $product, $quantity);

    if ($stmt->execute()) {
        echo "Purchase successfully recorded.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
