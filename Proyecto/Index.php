<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maicot Payero</title>
  <link rel="shortcut icon" href="./img/logo.png">


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>
  
  <!-- ============================== Start Header Area ============================== -->
   
  <header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Experience">Experience</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#Contact">Contact </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->

<!--  ======================= Start Main Area ================================ -->
<main class="site-main">


    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Hey</h3>
                    <h1 class="title-text text-uppercase">I am Maicot</h1>
                    <h4 class="title-text text-uppercase">Technical Support</h4>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <a href="mailto:maicotpayero24@gmail.com"> <button type="button" class="btn button primary-button mr-4 text-uppercase">hire me</button></a>
                            <a href="./cv/Currículum Maicot Payero.pdf" download><button type="button" class="btn button secondary-button text-uppercase" >Get cv</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Banner Area =======================  -->

    <!--  ========================= About Area ==========================  -->

    <section  class="about-area" id="About">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="./img/about-us.png" alt="About us" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5">
                        <span>Let me</span>
                        <span>introduce</span>
                        <span>myself</span>
                    </h2>
                    <div class="paragraph py-4 w-75">
                        <p class="para">   
                          I am 24 years old, I like to go out with my family, friends, play video games and learn new things.
                        </p>
                    </div>
                    <a href="./cv/Currículum Maicot Payero.pdf" download><button type="button" class="btn button primary-button text-uppercase">Download cv</button></a>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End About Area ==========================  -->
   
   <!-- ============================== Brand Area ============================== -->
    
   <section class="brand-area" id="Experience">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="first-row row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="./img/brands/logo1.png" alt="Brand-1 ">
                        </div>
                    </div>
                </div>
            </div>

            <?php
            function calculaanos($fechadeinicio){
                     list($ano,$mes,$dia) = explode("-",$fechadeinicio);
                     $ano_diferencia  = date("Y") - $ano;
                     $mes_diferencia = date("m") - $mes;
                     $dia_diferencia   = date("d") - $dia;
                     if ($dia_diferencia < 0 || $mes_diferencia < 0)
                       $ano_diferencia--;
                     return $ano_diferencia;
            }?>

            
        <div class="col-xl-6 col-lg-12 col-md-12">
          <div class="experience-area">
              <div class="d-flex flex-row years-area">
                  <h2 class="p-3 years"><?php echo calculaanos ('2020-09-02'); ?></h2>
                  <h2>
                      <span>Year</span>
                      <span>Experience</span>
                      <span>Working</span>
                  </h2>
              </div>
              <div class="d-flex flex-row flex-wrap call-area">
                  <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                  <div class="call-now">
                      <a href="tel:829-894-2497" class="text-uppercase h4 font-roboto">Call Now</a>
                      <span class="font-roboto py-2">(+1) 829-894-2497</span>
                  </div>
              </div>
              <div class="bg-panel"></div>
       </div>
      </div>
     </div>
    </div>
   </section>
   
   <!-- ============================== End Brand Area ============================== -->

   <!--  ======================= Project Area =============================  -->

   <section class="project-area">
    <div class="container">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Recently Done Project</h1>
           <!-- <h1 class="text-uppercase title-h1">Quality Work</h1>-->
        </div>

         <!--<div class="button-group">
            <button type="button" class="active" id="btn1" data-filter="*">All</button>
           <button type="button" data-filter=".popular">Popular</button>
            <button type="button" data-filter=".latest">Latest</button>
            <button type="button" data-filter=".following">Following</button>
            <button type="button" data-filter=".upcoming">Upcoming</button> 
        </div>-->

        <div class="row grid">
            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="our-project">
                    <div class="img">
                            <a href="https://github.com/Mai2407/Garajesistema">
                            <img src="./img/portfolio/p1.png" alt="portfolio-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Sistema Para Garaje</h4>
                      <!--  <span class="text-secondary">Latest, Portfolio</span>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="our-project">
                    <div class="img">
                            <a href="https://github.com/Mai2407/Sistema_de_control_de_formularios"> 
                            <img src="./img/portfolio/p2.png" alt="portfolio-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Formularios</h4>
                       <!-- <span class="text-secondary">Popular, Portfolio</span>-->
                    </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>

<!--  ======================= End Project Area =============================  -->

</main>
<!--  ======================= End Main Area ================================ -->

<footer class="footer-area" id="Contact">
<div class="container">
    <div class="">
        <div class="site-logo text-center py-4">
            <a href="#"><img src="./img/logo.png" alt="logo"></a>
        </div>
        <div class="social text-center">
            <h5 class="text-uppercase">Follow me</h5>
            <a href="https://github.com/Mai2407"><i class="fab fa-github"></i></a>
            <a href="https://instagram.com/payero_?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/maicot-payero-liriano-a98891145/?originalSubdomain=do"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="copyrights text-center">
            <p class="para">
                Copyright ©2021 All rights reserved | This template is made by
                <a href="https://www.linkedin.com/in/maicot-payero-liriano-a98891145/"><span style="color: var(--primary-color);">Maicot Payero</span></a>
            </p>
        </div>
    </div>
</div>
</footer>


<!--  Jquery js file  -->
<script src="./js/jquery.3.4.1.js"></script>

<!--  Bootstrap js file  -->
<script src="./js/bootstrap.min.js"></script>

<!--  isotope js library  -->
<script src="./vendor/isotope/isotope.min.js"></script>

<!--  Magnific popup script file  -->
<script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

<!--  Owl-carousel js file  -->
<script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!--  custom js file  -->
<script src="./js/main.js"></script>


</body>

</html>
