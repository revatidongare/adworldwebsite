 <!DOCTYPE html>
<html lang="en">


          <?php include'includes/head.php';?>

<body>

  <!-- ======= Header ======= -->
 <?php include'includes/navbar.php';?>
  <?php include'includes/header.php';?>

  <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Fill in the form below to instantly schedule a call with us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
             <a href="map.php" target="_blank"><i class="ion-ios-location-outline"></a></i>
              <h3><a href="map.php" target="_blank"><strong>Address</strong></a></h3>

              <address><a href="map.php" target="_blank">A:Shop No. C , Commercial House,Jupiter CHS

                Near Ganesh Temple,Kalyani Nagar

              Pune, India 411014</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3><strong>Phone Number</strong></h3>
              <p><a href="tel:+91 9325656756">+91 9325656756</a></p>
              <p><a href="tel:+91 9922514719">+91 9922514719</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3><strong>Email</strong></h3>
              
              <p><a href="mailto:paresh@journeyworlddmc.com">paresh@journeyworlddmc.com</a></p>
               <p><a href="mailto:contact@journeyworlddmc.com">contact@journeyworlddmc.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="back.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"  />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" id="message" placeholder="message"  data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <!-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center"><button  type="submit" style= "background: #18d26e;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;" name="contact" id="contact">Send Message</button></div>
          </form>
        </div>
        <!-- <div class="modal fade  bd-example-modal-lg" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-lg">
            <p>www.journeyworldcreations.com</p>
          <span>Thank you for contacting Journey World Creations. We will contact you shortly.</span>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>

            </div>
          </div>
        </div>
      </div> -->

      </div>
    </section>
    <?php include'includes/footer.php';?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <?php include'includes/script.php';?>

</body>

</html>
<?php
  // include 'session.php'; 
    if(isset($_GET['q'])) {      
            if($_GET['q'] == 101){ ?>
            <script>swal("Thank you for contacting Journey World Creations. We will contact you shortly.", {
  buttons: false,
  timer: 30
  00,
});</script>
            <!--echo '<script> alert(" Successfully Logout..")</script>';-->
<?php }
} ?>
