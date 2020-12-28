 <!DOCTYPE html>
<html lang="en">


          <?php include'includes/head.php';?>

<body>

  <!-- ======= Header ======= -->
 <?php include'includes/navbar.php';?>
  <?php include'includes/header.php';?>

 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="project.php">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
          
            <img src="assets/img/portfolio/pp.png" class="img-fluid" alt="">
            
            <img src="assets/img/portfolio/whispering.png" class="img-fluid" alt="">
            <img src="assets/img/portfolio/Doctor.png" class="img-fluid" alt="">
             <img src="assets/img/portfolio/Farm.png" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: JWDMC Company</li>
              <li><strong>Project date</strong>: 01 October, 2020</li>
              <li><strong>Project URL</strong>: <a href="http://www.journeyworlddmc.com">http://www.journeyworlddmc.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
           Travel inspire us and we always like to explore something new which can be offered vibrantly to our customers. Our goal is to make everyone travel at a affordable price anytime anywhere around the world. If you love to explore places on your own, then we are the experts to tailor make holidays as per your liking to the tee.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main>
    <?php include'includes/footer.php';?>
    <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <?php include'includes/script.php';?>

</body>

</html>