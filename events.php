<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HelpSquad - Волонтёры</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

 
</head>

<body class="main">
  <?php
    $connection_to_database = mysqli_connect("127.0.0.1", "root", "", "HelpSquad");
        if(!$connection_to_database) {
        die("Connection failed: " . mysqli_connect_error());
      } else {
        echo "";
      }

      $results = mysqli_query($connection_to_database, "SELECT * FROM events ORDER BY id DESC");

      
  ?>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center"  style="background-color: #FFFCF3;">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 style="font-weight:700;  font-family: 'Montserrat', sans-serif; text-transform: capitalize;"><a href="index.php" style="color: #1F1F1F;">HelpSquad</a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>

          	 <li><a class="nav-link scrollto" href="events.php" style="color: red;">Мероприятия</a></li>
             <li><a class="nav-link scrollto" href="peoples.php" style="color: #1F1F1F;">Волонтёры</a></li>
             
             
             <li><a class="nav-link scrollto" href="index.php" style="color: orange;">Стать волонтёром!</a></li>
              
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 
  <section>
    <?php 
            for($i = 0; $i < mysqli_num_rows($results); $i++) {
              $events = mysqli_fetch_assoc($results);
          ?>
  	<!--1-->
  	<div class="container">
  		<div class="col-12 bg-info event" style="">
  			<div class="row">
  				<div class="col-4 ev-one" >
  					<img src="<?php echo $events['org_img']; ?>" class="ev-img border mt-4 ml-4">
  					<h4 class="mt-4 ml-4"><?php echo $events['options']; ?></h4>
  				</div>

          
  				<div class="col-8  ev-two" >
  					<!--    слайды    --><!--    слайды    -->
   
						    
						    <div class="slideshow-container">

						<div class="mySlides fade">
						  <div class="numbertext"></div>
						  <img src="<?php echo $events['img1']; ?>" style="width:100%">
						  <div class="text"></div>
						</div>

						<div class="mySlides fade">
						  <div class="numbertext"></div>
						  <img src="<?php echo $events['img2']; ?>" style="width:100%">
						  <div class="text"></div>
						</div>

						<div class="mySlides fade">
						  <div class="numbertext"></div>
						  <img src="<?php echo $events['img3']; ?>" style="width:100%">
						  <div class="text"></div>
						</div>

						<a class="prev" onclick="plusSlides(-1)">❮</a>
						<a class="next" onclick="plusSlides(1)">❯</a>

						</div>
						<br>

						<div style="text-align:center">
						  <span class="dot" onclick="currentSlide(1)"></span> 
						  <span class="dot" onclick="currentSlide(2)"></span> 
						  <span class="dot" onclick="currentSlide(3)"></span> 
						</div>
  				</div>
          <?php 
            }
          ?>
  			</div>
  		</div>
  	</div>
  	<!--2-->
  	
  </section>
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>