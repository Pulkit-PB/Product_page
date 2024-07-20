<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Product Dashboard</h1>
      <p>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
            <li><a href="LOGIN_PAGE.html">Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </header>
  
  <main>
    <div class="container">
      <!-- Product Information -->
      <section id="product">
        <h2>Product Details</h2>
        <!-- Display product information here -->
      </section>
      
      <!-- Buy Button -->
      <a href="buy.php" class="buy-btn">Buy Now</a>
    </div>
  </main>
  
  <footer>
    <div class="container">
      <p>&copy; 2024 Product Dashboard. All rights reserved.</p>
    </div>
  </footer>
  
  <script src="script.js"></script>
</body>
</html>
