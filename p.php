<!DOCTYPE html>
<html lang="en">

<?php include'includes/head.php';?>

<body>
    <?php include'includes/navbar.php';?>
  <?php include'includes/header.php';?>
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <!-- <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professional</h2>
                <p class="animate__animated animate__fadeInUp">“Believe passionately in what you do, and never knowingly compromise your standards and values. Act like a true professional, aiming for true excellence, and the money will follow.”</p>
                <a href="p.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get A QUOTE</a>
              </div> -->
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/2.jpg)">
            <div class="carousel-container">
             <!--  <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Enjoy the business world with us</h2>
                <p class="animate__animated animate__fadeInUp">“Business opportunities are like buses, there’s always another one coming.” </p>
                <a href="p.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get A QUOTE</a>
              </div> -->
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/3.jpg)">
            <div class="carousel-container">
             <!--  <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We make your dreams happen</h2>
                <p class="animate__animated animate__fadeInUp"> “The surest way to make your dreams come true is to live them.” “Dreams don't work unless you take action. The surest way to make your dreams come true is to live them.” </p>
                <a href="p.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get A QUOTE</a>
              </div> -->
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/4.jpg)">
            <div class="carousel-container">
              <!-- <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Help us to help you</h2>
                <p class="animate__animated animate__fadeInUp">“When we give cheerfully and accept gratefully, everyone is blessed.”</p>
                <a href="p.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get A QUOTE</a>
              </div> -->
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/5.jpg)">
            <div class="carousel-container">
             <!--  <div class="container">
                <h2 class="animate__animated animate__fadeInDown">All you need is a digital push</h2>
                <p class="animate__animated animate__fadeInUp">To continue winning the internet marketing game, your content has to be more than just brilliant — it has to give the people consuming that content the ability to become a better version of themselves.”</p>
                <a href="p.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get A QUOTE</a>
              </div> -->
            </div>

          </div>
             <div class="carousel-container">
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" style="z-index: 800">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 style="color: #333" class="title">Get a Quote</h2>
                    <form  action="back.php" method="POST">
                        <li class="form-line" data-type="control_checkbox" id="id_9">
                        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">Please select the services you are looking for </label>
                        <div id="cid_9" class="form-input">
                          <div class="form-single-column" role="group" aria-labelledby="label_9" data-component="checkbox">
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_0" name="q9_servicesYou[]" value="1">
                              <label id="label_input_9_0" for="input_9_0">Get an Awesome Website Designed and Developed</label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_1" name="q9_servicesYou[]" value="2">
                              <label id="label_input_9_1" for="input_9_1">Digital Marketing - Generate Leads Online, Build a Brand Online</label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_2" name="q9_servicesYou[]" value="3">
                              <label id="label_input_9_2" for="input_9_2">Get a Web Product / Web Application / Web Portal</label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_3" name="q9_servicesYou[]" value="4">
                              <label id="label_input_9_3" for="input_9_3"> Print and Advertising</label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_3" name="q9_servicesYou[]" value="5">
                              <label id="label_input_9_3" for="input_9_3">Search Engine Marketing</label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                              <span class="dragger-ite
                              m">
                              </span>
                              <input type="checkbox" class="form-checkbox" id="input_9_4" name="q9_servicesYou[]" value="6">
                              <label id="label_input_9_4" for="input_9_4">Social Media Marketing</label>
                            </span>
                          </div>
                        </div>
                      </li>
                      <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Resort Name" name="namee">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Your Name" name="yname">
                        </div>
                        
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address">
                        </div>
                         <div class="row row-space">
                                <div class="input-group col-2">

                                 <input class="input--style-1" type="text" placeholder="City" name="city">
                                </div>
                                <div class="input-group col-2">
                                     <input class="input--style-1" type="text" placeholder="State" name="state">   
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="input-group col-2">

                                 <input class="input--style-1" type="text" placeholder="Country" name="country">
                                </div>
                                <div class="input-group col-2">
                                     <input class="input--style-1" type="text" placeholder="Pincode" name="code">   
                                </div>
                            </div>
                             <div class="row row-space">
                                <div class="input-group col-2">

                                 <input class="input--style-1" type="text" placeholder="Mobile No" name="mobno">
                                </div>
                                <div class="input-group col-2">
                                     <input class="input--style-1" type="text" placeholder="Whatsapp No" name="wno">   
                                </div>
                            </div>
                            <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="E-mail" name="mail">
                        </div>
                      
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="get_a_quote" id="get_a_quote" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        </div>
      </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
   

 <?php include'includes/footer.php';?>

    <!-- Jquery JS-->
     <?php include'includes/script.php';?>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
