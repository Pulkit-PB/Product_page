<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{?>
  <script>
    document.getElementById('in').style.visibility='hidden';
    document.getElementById('out').style.visibility='visible';
  </script>
<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rabbit Tech</title>
  <link rel="stylesheet" href="stylesdash.css">
  
</head>
<body>
  <header>
    <div class="container">
      <img src="/WEBTECH-RDBMS/rabbit-idle.gif" class="gif">
      <img src="/WEBTECH-RDBMS/rabbit-idle.gif" class="gif2">
      <h1>rabbit<sup>TM</sup> </h1>
      <p>the future of human-machine interface</p>
     
    </div>
  </header>
  
  <nav>
    <div class="container">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#spec">Spec</a></li>
        <li><a href="#dime">Dimensions</a></li>
        <li><a href="#function">Functionalities</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#buy">Pre-Order</a></li>
        <li><a href="#contact">Contact</a></li>
        
        <li id="in" class="loggin"><a href="login_page.html">Login</a>
        </li>
        <li class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>
        </li>
        <li id="out" class="logout"><a href="login_page.html">LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <main>
    <div class="container">
      <section id="home">
        <h2>Welcome to Rabbit Tech</h2>
        <p>We are a leading technology company providing innovative solutions to businesses worldwide.</p>
      </section>
      <section id="gallery">
        <div class="slideshow-container">

          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="/WEBTECH-RDBMS/ribbit-cover.png" style="width:100%">
            <div class="text">Rabbit r1</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="/WEBTECH-RDBMS/rabbit-r1.jpg" style="width:100%">
            <div class="text">Device</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="/WEBTECH-RDBMS/rabbit-info.jpg" style="width:100%">
            <div class="text">LLAM</div>
          </div>

          <!--          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div>
        <br>

        
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>      
      </section>
      <section id="spec">
        <div class="heading">
          <h2 class="head">rabbit r1 specifications</h2>
          <img class="logo" src="/WEBTECH-RDBMS/mark.jpeg" alt="rabbit">
        </div>
        <br>
          <hr class="spec">
          <div class="att">Dimensions</div>
          <div class="value">78mm*78mm*13mm / 3in*3in*0.5in</div>
          <hr class="spec">
          <div class="att">Weight</div>
          <div class="value">115g</div>
          <hr class="spec">
          <div class="att">Battery life and Charging capabilities</div>
          <div class="value">500 cycles > 80%, charging current 500mA, rate capacity 1000mAh</div>
          <hr class="spec">
          <div class="att">Connectivity details</div>
          <div class="value">Bluetooth 5.0 / Wi-Fi with 2.4GHz + 5GHz / 4G LTE</div>
          <hr class="spec">
          <div class="att" >Color</div>
          <div class="value" style="color:#f74215fb">leuchtorange</div>
          <hr class="spec">
          <div class="att">Speaker output</div>
          <div class="value">2W</div>
          <hr class="spec">
          <div class="att">Audio input</div>
          <div class="value">dual microphone array</div>
          <hr class="spec">
          <div class="att">Display</div>
          <div class="value">2.88in TFT touchscreen</div>
          <hr class="spec">
          <div class="att">Processor</div>
          <div class="value">MediaTek MT6765 Octa-core (Helio P35)</div>
          <hr class="spec">
          <div class="att">Max cpu frequency</div>
          <div class="value">2.3GHz</div>
          <hr class="spec">
          <div class="att">Memory</div>
          <div class="value">4GB</div>
          <hr class="spec">
          <div class="att" >Storage</div>
          <div class="value" >128GB</div>
          <hr class="spec">
          <div class="att">Location</div>
          <div class="value">magnetometer and GPS</div>
          <hr class="spec">
          <div class="att">Motion sensor</div>
          <div class="value">accelerometer and gyroscope</div>
          <hr class="spec">
          <div class="att">Operating temperatures</div>
          <div class="value">0°C - 45°C or 32ºF - 113ºF</div>
          <hr class="spec">
          <div class="att">Charging and expansion</div>
          <div class="value">USB-C connector</div>
          <hr class="spec">
          <div class="att" >Photo resolution</div>
          <div class="value" >8MP, 3264x2448</div>
          <hr class="spec">
          <div class="att">Video resolution</div>
          <div class="value">24fps, 1080p</div>
          <hr class="spec">
          <div class="att">Empty SIM card slot</div>
          <div class="value">(unlocked)</div>

        
      </section>
      <br><br>

      <section id="dime">
        
        <h2>Dimensions</h2>
        <img src="/rabbit-dimensions.png" width=100% height=100%>

      </section>

      <br><br>
      <section id="function">
        <div class="container-f">
          <h2 class="specf">LAM functionalities</h2>
          <ul class="colorful-list">
            <br>          
            <li class="green">
            it works great on r1
            </li>
            <li class="blue">
            may require some exploration to get the best experience
            </li>
            <li class="yellow">
            undergoing beta testing: ready to roll out soon
            </li>
            <li class="red">
            experimental features: we work with you to best incorporate them into r1
            </li>
         </ul>
        </div>
      <br><br>
        <div class="tabel">
          <table class="deets" rules="cols">
            <tr>

              <th class="green1">Optimal</th>
              <th class="blue1">Exploratory</th>
              <th class="yellow1">Planned</th>
              <th class="red1">Experimental</th>
            </tr>
            <tr>
              <td>search</td>
              <td>travel</td>
              <td>point-of-interest research</td>
              <td>web teach mode</td>
            </tr>
            <tr>
              <td>music</td>
              <td>AI-enhanced communication</td>
              <td>reservations</td>
              <td></td>
            </tr>
            <tr>
              <td>rideshare</td>
              <td>tnote-taking</td>
              <td>ticketing</td>
              <td></td>
              
            </tr>
            <tr>
              <td>food</td>
              <td></td>
              <td>navigation</td>
              <td></td>
            </tr>
            <tr>
              <td>vision</td>
              <td></td>
              <td>mobile & desktop teach mode</td>
              <td></td>
            </tr>

          </table>
        </div>
      </section>
      <br><br>
      <section id="about"><br>
        <h2 style="font-size:16px">Disclaimer:</h2>
        <p style="font-size:12px">Specs and functionalities are subject to change. Certain LAM functionalities require account connection through the rabbit hole.

For pre-sales orders of r1 to US/Canada addresses, batch 1 orders have left the factory, and local delivery is set to begin in late April. We expect to begin shipping batch 2 orders in April-May 2024, and batch 3 orders in May-June 2024. Orders after batch 3 to US/Canada addresses will begin shipping in June-July 2024 and are expected to be fulfilled by July 31, 2024.
Shipping to EU/UK addresses for batch 1-3 orders will begin by late-April, and we expect orders after batch 3 to EU/UK addresses to be shipped by July 31, 2024. Shipping to Asia/Australia is expected to begin later in 2024, but we do not have a more definite estimate at this time.
Shipping estimates are subject to change based on our manufacturing capacity and component availability. An exact shipping date is not currently available beyond the expected shipping windows listed above. Please be assured that we will fulfill orders as quickly as possible in the order they were received. We will update this FAQ page with regard to shipping timeframes for US/Canada customers and for international orders with the latest information on revised shipping window estimates.

Purchase of r1 is currently available in the United States, Canada, United Kingdom, certain countries of the European Union (Denmark, France, Germany, Ireland, Italy, Netherlands, Spain, Sweden), South Korea, Japan, and Australia.

r1 is powered by a rechargeable lithium battery which can be charged with a USB-C charge cable and power adapter (no accessories included with purchase). The battery life of r1 depends on many factors including usage and external environment.</p>
      </section>
      <br><br>
      <section id="buy">
        <a class="buy" href="customer.html">Pre-Order</a>
      </section>
      <br><br>
      <section id="contact">
        <h2>Contact Us</h2>
        <p>Ready to start your project? Reach out to us today!</p>
        <p>Email: info@rabbittech.com</p>
      </section>
    </div>
  </main>
  
  <footer>
    <div class="container">
      <p>&copy; 2024 Rabbit Tech. All rights reserved.</p>
    </div>
  </footer>
  
  <script src="dash.js"></script>
</body>
</html>
