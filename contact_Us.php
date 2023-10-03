<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title>  Logicraft HTML5 Template</title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
   <!-- Bootstrap-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Animation-->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="css/morris.css">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Icon font-->
   <link rel="stylesheet" href="css/icon-font.css">
   <!-- Owl Carousel-->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- Colorbox-->
   <link rel="stylesheet" href="css/colorbox.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
</head>

<body>

   <div class="body-inner">

      <?php include 'header.php'?>

      <div class="banner-area" id="banner-area" style="background-image:url(images/banner/banner3.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="#">contact</a></li>
                     </ol>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
      
       <!-- contact trying -->
       <section class="quote-area solid-bg" id="quote-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="section-title"><span style="color: #58BDB3;"></span>Contact Us</h2> 
               </div> 
               <div class="col-lg-5">
                  <div class="quote_form"> <br> 
                     <p class="contact-content">Feel free to reach out to us anytime! Whether you have questions, feedback, or just want to connect, <br> our team is here to assist you. Contact us today, and let's start a conversation. Your input matters to us, and we look forward to hearing from you.</p>
                     <br>
                     <div class="contact-info">
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-map-marker2"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Find Us</h3>
                              <p>128 City Road, London, UK</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-phone3"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Contact Us</h3>
                              <p>+44 7456 44098</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-envelope"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Email Us</h3>
                              <p>info@risingdigitally.com</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                     </div>

                     <!-- <div class="quote-img">

                        <img class="img-fluid" src="images/alltransport.png" alt="img">
                     </div> -->
                  </div><br> <br> <br>
                  <!-- Quote form end-->
               </div> <br>
               <!-- Col end-->
               <div class="col-lg-6">
                  
                 <div class="contact-submit-box contact-box form-box">
                    <form class="contact-form" id="contact-form" action="contact-form.php" method="POST">
                       <div class="error-container"></div>
                       <div class="row">
                          <div class="col-lg-12">
                             <div class="form-group">
                                <input class="form-control form-name" id="name" name="name" placeholder="Full Name" type="text" required="">
                             </div>
                          </div>
                          <!-- Col end-->
                          <div class="col-lg-12">
                             <div class="form-group">
                                <input class="form-control form-website" id="url" name="url" placeholder="Representative" type="url" required="">
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="form-group">
                                <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="form-group">
                                <textarea class="form-control form-message required-field" id="message" placeholder="Message" rows="8"></textarea>
                             </div>
                          </div>
                          <!-- Col 12 end-->
                       </div>
                       <!-- Form row end-->
                          <button class="btn btn-primary tw-mt-30 " type="submit"><i class="fa fa-paper-plane-o"></i> Send Message</button>
                    </form>
                    <!-- Form end-->
                 </div>
              </div>
              <!-- Contact form end -->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Quote area end-->

  
        

         <?php include 'footer.php'?>
         <!-- footer -->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script type="text/javascript" src="js/jquery.js"></script>
       
       
      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <!-- Counter-->
      <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <!-- Color box-->
      <script type="text/javascript" src="js/jquery.colorbox.js"></script>
       
        
      <!-- Google Map API Key-->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
      <!-- Google Map Plugin-->
      <script type="text/javascript" src="js/gmap3.js"></script>
      <!-- Template custom-->
      <script type="text/javascript" src="js/custom.js"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>