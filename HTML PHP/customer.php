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
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

   
    
    $servername = "127.0.0.1:3307";
    $username = "root";
	$password = "";
   	$dbname = "rabbit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //updating address
    $sql = "INSERT INTO address (address, city, state, country, postal_code) VALUES ( ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $address, $city, $state, $country, $postal_code);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Prepare SQL statement to insert customer details
        $address_id = $conn->insert_id;
        $msql = "INSERT INTO customers (login_id, name, contact_info, address_id) VALUES (?, ?, ?, ?)";
        $mstmt = $conn->prepare($msql);
        $mstmt->bind_param("issi", $_SESSION['login_id'], $name, $contact_info, $address_id);

        // Execute the statement
        if ($mstmt->execute()) {

            $qsql = "SELECT price from products where product_id= $product_id";
            $result = $conn->query($qsql);
            if ($result->num_rows > 0) {
                // If product exists, fetch the product ID
                $row = $result->fetch_assoc();
                $price = $row["price"];
                
                
            } else {
                echo "Product not found";
            }

            $customer_id = $conn->insert_id;

            // Insert data into the transactions table
            $asql = "INSERT INTO transactions (customer_id, product_id, quantity, total_amount) VALUES (?, ?, ?, ?)";
            $astmt = $conn->prepare($asql);
            $astmt->bind_param("iiid", $customer_id, $product_id, $quantity, $price*$quantity);

            if ($astmt->execute()) {
                echo "Purchase successfully recorded.";
                // Redirect to the address entry page
                echo 'Purchase Successful';
                wait(5);
                header("Location: dashboard.php");
                exit();
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
