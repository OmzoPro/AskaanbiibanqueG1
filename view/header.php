<?php include('modele/userControle.php');

session_start();
if (isset($_GET['deconnexion'])) {
  session_destroy();
  $_SESSION['connexion']=0;
  header("location:index.php?p=login");
}
?>

<!doctype html>
<html lang="">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<title>AaskanBi_Bank - Un conseil a l'écoute de vos bésoins</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area 
        <div class="preloader bg-4ed198">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>-->
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <div class="top-header-area bg-ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-header-information">
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@AasKanbibank.com">contact@askanbibank.com</a>
                            </li>

                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:771441417">+ (221) 77 144 14 17</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 text-right">
                        <ul class="top-header-others">
                            <li>
                                <i class='bx bxs-map'></i>
                                <a href="#">Médina, DAKAR-SENEGAL</a>
                            </li>

                            <li class="languages-list">
                                <select>
                                    <option value="1">English</option>
                                    <option value="2">Germany</option>
                                    <option value="3">Australia</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->
      
        
        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-color-three">
          <div class="main-responsive-nav">
              <div class="container">
                  <div class="main-responsive-menu">
                      <div class="logo">
                          <a href="?p=accueuil">
                              <img src="assets/img/logo-3.png" alt="image">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <?php
          if($_SESSION['connexion']=0){
            include('nav_loggout.php');  
          }elseif($_SESSION['connexion']=1){

               include('nav_loggin.php');
               }  
          ?>

            
        </div>