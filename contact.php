<?php 
//Header
$page_title = 'Raul Caro: Contact';
include 'includes/header.php';
?>

<!--Main-->
<div class="container">
        <div class="row">
          <div class="col-md-12">
                  <h1 class="head-works-stl" style="text-align: center;">Contact Raul!</h1>
                  <a class="back-btn-stl" href="index.php"><i class="fas fa-arrow-left"></i> Back to Works</a>
          </div>
         </div>

        <!--Contact Form-->
        <div class="row">
          <!-- <div class="col-md-6">
            <img src="img/contact.jpg" style="width: 99%;" alt="">
            </h2>
          </div> -->

          <div class="col-md-12">
            <p style="text-align: center;" class="contact-font-styl">Email me at info@raulcaro.net, or fill out the form below to get in contact with me! <br> It might take a day or two to answer, but I always do.</p>
            <form action="includes/mail.php" method="POST">      
              <input name="name" type="text" class="feedback-input" placeholder="Name" />   
              <input name="email" type="text" class="feedback-input" placeholder="Email" />
              <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
              <input type="submit" value="Send"/>
            </form>
          </div>

      <br /><br /><br />
    </div>
<?php
//Footer 
include 'includes/footer.php';
?>