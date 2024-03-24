<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "petmart";
$con = mysqli_connect($host, $user, $password, $db);
if (isset($_POST['submit'])) {
  $emailid = $_POST['emailid'];
  $reviews = $_POST['reviews'];
  $radio = $_POST['radio'];
  $query = "INSERT INTO review(emailid,reviews,radio) VALUES('$emailid', '$reviews','$radio')";
  $data = mysqli_query($con, $query);
  if ($data) {
    echo "<script> alert('REVIEWS SUCCESSFULLY SUBMITTED'); window.location.assign('main.php'); </script>";
    exit();
  } else {
    echo ("Error description: " . mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="pic/favicon.ico" type="image/ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PETMART</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Custom styles -->
  <style>
    /* Add your custom styles here */
    .logo {
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      color: #FFFFE0;
      /* Additional styling here */
    }

    .background-container {
      background-image: url('pic/d_c.jpeg');
      /* Replace 'path/to/your/image.jpg' with the actual path to your image */
      /* background-size: cover; */
      /* This property ensures that the background image covers the entire container */
      background-repeat: no-repeat;
      background-position: 20%;
      /* This property centers the background image */
      /* Add more styling properties as needed */
    }

    /* .text_start {
      margin-left: 40hh;
    } */
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#"><img src="logonew.jpg" height="60em" width="120em"></a> -->
    <div class="logo">Petmart</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="orderpets.php"><i class="fas fa-paw"></i> Adopt Pets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php"><i class="fas fa-shopping-bag"></i> Order Pet Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorders.php"><i class="fas fa-shopping-cart"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="account.php"><i class="fas fa-user"></i> Account</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="background-container">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-right ">
      <!-- Your existing content here -->
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-right">
        <div class=" p-lg-5 text_start my-5">
          <h3 class="display-5 font-weight-bold">WELCOME TO PETMART</h3>
          <p class="lead font-weight-normal">A One stop place for pet related Accessories.</p>
          <!-- <p class="lead font-weight-normal">Thank you for choosing Petmart Where Every Tail Wags and Every Purr is
            Treasured!</p> -->


          <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
        </div>
        <!-- <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->
      </div>
    </div>
  </div>





  <!-- Footer -->
  <!-- <footer class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <h5>About Us</h5>
        <p>PETMART</p>
        <p>DESIGNED BY RSS</p>
      </div>
      <div class="col-lg-6">
        <h5>Connect</h5>
        <ul>
          <li><a href="#" class="text-dark">Facebook</a></li>
          <li><a href="#" class="text-dark">Twitter</a></li>
          <li><a href="#" class="text-dark">LinkedIn</a></li>
          <li><a href="#" class="text-dark">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center">&copy; 2023 PETMART</div>
  </footer> -->

  <!-- Footer -->
  <!-- <footer class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <h5>About Us</h5>
        <p>Welcome to Petmart – Where Every Pet's Happiness Matters!...</p>
        <p>Dedicated to promoting the well-being of pets through premium products, expert advice, and a community that
          celebrates the love for animals.</p>
      </div>
      <div class="col-lg-6">
        <h5>Connect</h5>
        <ul>
          <li><a href="#" class="text-dark">Facebook</a></li>
          <li><a href="#" class="text-dark">Twitter</a></li>
          <li><a href="#" class="text-dark">LinkedIn</a></li>
          <li><a href="#" class="text-dark">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center">&copy; 2023 PETMART</div>
  </footer> -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="pic/k.jpg" alt="First slide" style="height: 300px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="pic/acc.jpg" alt="Second slide" style="height: 300px; object-fit: center;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="pic/dog.jpg" alt="Third slide" style="height: 300px; object-fit: cover;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  <!-- Footer -->
  <footer class="container-fluid py-5 bg-dark text-light text-center">
    <div class="row">
      <!-- <div class="col-lg-6" style="margin-left:25%">
        <h5>About Us</h5>
        <div class="bg-dark p-3 text-light">
        
      <p>Dedicated to promoting the well-being of pets through premium products, expert advice, and a community that
        celebrates the love for animals.</p>
    </div>
    </div> -->

      <!-- About Us Section -->
      <div class="container about-us">
        <div class="row">
          <div class="col-md-8 offset-md-2 text-center">
            <h2 class="font-weight-bold mb-4">Our Mission</h2>
            <p class="lead">At Petmart, we are passionately dedicated to enhancing the well-being of pets through a
              curated selection of premium products and by fostering a vibrant community that celebrates
              the profound love for animals.</p>
            <p class="lead">We believe in providing not just products but a holistic experience, ensuring that every pet
              and their human companions lead joyful, healthy lives together.</p>
          </div>
        </div>
      </div>


    </div>


  </footer>
  <div class="col-lg-6 mt-4 mt-lg-0 " style="margin-left:45%">
    <h5 style="margin-left:2%">Connect with us</h5>
    <ul>
      <li><a href="https://www.facebook.com/shivam.nath.399/" class="text-dark">Facebook</a></li>
      <li><a href="https://twitter.com/shivamnath027" class="text-dark">Twitter</a></li>
      <li><a href="https://www.linkedin.com/in/shivam-nath-998846200/" class="text-dark">LinkedIn</a></li>
      <li><a href="https://www.instagram.com/_sab_mayahai/" class="text-dark">Instagram</a></li>
    </ul>
  </div>
  <div class="text-center ">&copy; 2023 PETMART</div>


  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-eMNCOdMQKVI8U8kGOiOV4zoZkPMcZ9TtfD+WEAq81aBZI5S4orxCYzvFAu8TL2Vq"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--FOR COROUSEL-->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-eMNCOdMQKVI8U8kGOiOV4zoZkPMcZ9TtfD+WEAq81aBZI5S4orxCYzvFAu8TL2Vq"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>