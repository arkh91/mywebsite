<?php
/*  author: Ali Khazaeli
    date: 03/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "Welcome";
	$name = "Ali Khazaeli";
	require_once("frontedu.php");
	//getUserOS.php
    //require_once("./php/getUserOS.php");
?>


  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <!-- bg-info: https://getbootstrap.com/docs/4.4/utilities/colors/ -->
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="./img/avataaars.svg" alt="first page" style=" filter: none;">
        
      <!-- Masthead Heading -->

      <h1 class="masthead-heading text-uppercase mb-0">Welcome to Distracty</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      
      <p class="masthead-subheading font-weight-light mb-0 ">PS4 - Credit Card - Steam</p>
 
    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container" dir="rtl" lang="fa">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <a href="./giftcard.php"><img class="img-fluid" src="./img/portfolio/giftcard.jpeg" alt=""></a>
          </div>
        </div>
        col-lg-3 col-md-4 col-6
        col-6 col-md-4
        height="650" width="900"
        -->
        
        <!-- Portfolio Item 1 -->
         <div class="col-md-4 col-lg-4 col-6">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            
            <a href="./giftcard.php"><img class="img-fluid animated flipInY" data-wow-delay="1.6s" src="./img/portfolio/ps4.jpg" alt=""></a>
          </div>
        </div>
        
        <!-- Portfolio Item 2 -->
        <div class="col-md-4 col-lg-4 col-6">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            
            <a href="./cr.php"><img class="img-fluid animated flipInY" data-wow-delay="1.6s" src="./img/portfolio/master_gift2.jpeg" alt=""></a>
          </div>
        </div>
        
        <!-- Portfolio Item 3 -->
       <div class="col-md-4 col-lg-4 col-6">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            
            <a href="./giftcard.php"><img class="img-fluid animated flipInY" data-wow-delay="1.6s" src="./img/portfolio/steam_giftcard.jpg" alt="" height="600" width="454"></a>
          </div>
        </div>
        
        <!-- Portfolio Item 3 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="./img/portfolio/circus.png" alt="">
          </div>
        </div>
        -->
        
        <!-- Portfolio Item 4 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="./img/portfolio/game.png" alt="">
          </div>
        </div>-->

        <!-- Portfolio Item 5 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="./img/portfolio/safe.png" alt="">
          </div>
        </div>-->

        <!-- Portfolio Item 6 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="./img/portfolio/submarine.png" alt="">
          </div>
        </div>-->

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Distracty is providing services related to any international credit you have!</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">We can provide PS4, Steam, Gift Cards, VISA, Master Cards!</p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
      <p> Contact Us Via  <a href="tg://resolve?domain=distracty" style="color:white"<i>Telegram</i></a> or <a style="color:white;" href="contactform.php"> Email </a></p>
        
        <button class="btn btn-xl btn-primary btn-outline-light" onclick="DetectAndServe()" type="submit">Download Telegram!</button>
        <div id="dialog-confirm"></div>
        
          
		<!-- Show Telegram Download Page -->
		<script src="./js/telegram_page.js"></script> 
  
        <!--
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
        Download Telegram!
        </a>
        
       <input class="Tdownload btn btn-xl btn-outline-light" type="button" value="Download Telegram!" onclick="DetectAndServe()" />
        -->

      </div>
      



    </div>
  </section>

  <!-- Contact Section 
  <section class="page-section" id="contact">
    <div class="container">

      h Contact Section Heading 
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

       Icon Divider 
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

       Contact Section Form 
      <div class="row">
        <div class="col-lg-8 mx-auto">
           To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. 
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
-->
  
<!--footer  -->  
<?php
	require_once("backedu.php");
?>
