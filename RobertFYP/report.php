<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PETROL STATION LINK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/my.png" rel="icon">
  <link href="assets/img/my.png" rel="con">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

    <div class="logo">
      <img src="assets/img/my.png" alt="">&nbsp;&nbsp;<a href="index.php">PETROL STATION LINK</a>
    </div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="stationworker.php">Dashboard</a></li>
          <li><a href="#">Record a fill</a></li>
          <li><a href="#about">Report</a></li>
          <li><a href="#contact">Profile</a></li>
          <li><a href="logout.php" style="background-color:orange; border-radius:20px; margin-left:20px; text-align: center; align-items: center;padding:10px;color:white;">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
<br><br><br>

  <main id="main">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">

        <div class="card-body">
                      <?php
                        
                        // Database connection details
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "petrol station link";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . conn->connect_error);
                        }
                        
                        // SQL query to select all records from the fill_records table
                        $sql = "SELECT * FROM fill_records";
                        $result = $conn->query($sql);
                        
                        // Check if there are any records
                        if ($result->num_rows > 0) {
                            // Output data in an HTML table
                            
                            echo "<table style='border-collapse: collapse;'>";
                            echo "<tr><th style='border: 1px solid black; padding: 5px;'>First Name</th><th style='border: 1px solid black; padding: 5px;'>Last Name</th><th style='border: 1px solid black; padding: 5px;'>Phone Number</th><th style='border: 1px solid black; padding: 5px;'>Company</th><th style='border: 1px solid black; padding: 5px;'>Liters</th><th style='border: 1px solid black; padding: 5px;'>Price</th></tr>";

                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["first name"] . "</td>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["last name"] . "</td>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["phone number"] . "</td>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["company"] . "</td>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["liters"] . "</td>";
                                echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["price"] . "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                          
                            
                        } else {
                            echo "No records found.";
                        }
                        
                        // Close the database connection
                        $conn->close();                       
                        
                      ?>
                    </div>

        </div>
      </div>
    </div>
  </div>
  </main>

 <br><br>

  <!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <img src="assets/img/my.png" alt="" height="100px">
          <h3>PETROL STATION LINK</h3>
          <p>
            Kigali, Rwanda <br><br>
            <strong>Phone:</strong> +250 789 438 711 / +250 788 213 553<br>
            <strong>Email:</strong> info@petrolstationlink.com<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">About Us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Talk to us</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Services at the station</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Fuel Supply</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Car Wash</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Vehicle Maintenance</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Battery Charging</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Oil Change</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Stay updated with our latest services and offers. Sign up for our newsletter.</p>
          <form action="" method="post">
            <input type="email" name="email" placeholder="Your Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>PETROL STATION LINK</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">Robert & Jospin</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

<?php

try{   
    $connect=new PDO("mysql:host=localhost;dbname=petrol station link","root","");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['signup'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $company=$_POST['company'];
        $liters=$_POST['liters'];
        $price=$_POST['price'];

                $insert=$connect->prepare("INSERT INTO `fill_records`(`first name`, `last name`, `phone number`, `company`, `liters`, `price`) VALUES (:fname, :lname, :phone, :company, :liters, :price)");
                $insert->execute([
                    ':fname' => $fname,
                    ':lname' => $lname,
                    ':phone' => $phone,
                    ':company' => $company,
                    ':liters' => $liters,
                    ':price' => $price
                ]);

                if ($insert) {
                    echo "<script>alert('record for $fname are successfully saved')</script>";
                } else {
                    echo "<script>alert('Unexpected error occurred. Try again')</script>";
                }
            
        
    } 
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
