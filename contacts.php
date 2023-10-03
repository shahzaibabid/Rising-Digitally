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

      <?php include '/csheader.php'?>

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
      
      <section class="main-container contact-area" id="main-container">
         <div class="contact-map">
             <div class="map" id="map"></div>
         </div>
         <div class="gap-60"></div>
         <div class="ts-form form-boxed" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="contact-wrapper full-contact">
                     <div class="col-lg-6">
                         <h3 class="column-title">Contact Us</h3>
                         <p class="contact-content">Feel free to reach out to us anytime! Whether you have questions, feedback, or just want to connect, our team is here to assist you. Contact us today, and let's start a conversation. Your input matters to us, and we look forward to hearing from you.</p>
                        <div class="contact-info-box contact-box info-box ">
                           <div class="contact-info">
                              <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Find Us</h3>
                                    <p>1010 Avenue, NY 90001, USA</p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                              <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Call Us</h3>
                                    <p>009-215-5596 (toll free)</p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                              <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Mail Us</h3>
                                    <p>info@domain.com</p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Contact info end -->
                     <div class="col-lg-6">
                         <h3 class="column-title">Contact Now</h3>
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
                                       <input class="form-control form-website" id="url" name="url" placeholder="Website" type="url" required="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <textarea class="form-control form-message required-field" id="message" placeholder="Comments" rows="8"></textarea>
                                    </div>
                                 </div>
                                 <!-- Col 12 end-->
                              </div>
                              <!-- Form row end-->
                                 <button class="btn btn-primary tw-mt-30" type="submit"><i class="fa fa-paper-plane-o"></i> Send Massage</button>
                           </form>
                           <!-- Form end-->
                        </div>
                     </div>
                     <!-- Contact form end -->
                  </div>
               </div>
            </div>
         </div>
      </section>

   <!-- Footer start-->
      <footer class="footer" id="footer">
         <div class="footer-main bg-overlay">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget footer-about">
                     <div class="footer-logo">
                        <img src="images/footer-logo.png" alt="">
                     </div>
                     <p>Transline Logistics is the UK's leading freight forwarding, Midst brought winged midst beast years, be very was. Brought that called creeping</p>
                     
                     <h3 class="widget-title">Subscribe Newsletter!</h3>
                     <form class="newsletter-form" id="newsletter-form" action="#" method="post">
                        <div class="form-group">
                           <input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email "
                              autocomplete="off">
                           <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                     </form>
                  </div>
                  <!-- About us end-->
                  <div class="col-lg-4 col-md-12 footer-widget">
                     <h3 class="widget-title">Quick Links</h3>
                     <ul class="list-dash">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Our Services</a></li>
                        <li><a href="project-all.html">Projects</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="news-left-sidebar.html">Our Blog</a></li>
                        <li><a href="news-right-sidebar.html">Why Need Agent?</a></li>
                        <li><a href="pricing-table.html">Investments</a></li>
                        <li><a href="contact.html">Consultation</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-12W footer-widget">
                     <h3 class="widget-title">Company Locations</h3>
                     <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Address</h3>
                           <p>370 Grove Street East Northport, NY 11731</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     
                     <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Email Address</h3>
                           <p>support@transline.com</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     
                     <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Phone Number</h3>
                           <p>+1(0123) 4567 890, +1(0231) 3421 453</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>Copyright © 2022 a theme by <a href="https://furioustheme.com">Furioustheme</a></span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="footer-social text-right">
                        <ul>
                           <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="https://github.com"><i class="fa fa-github"></i></a></li>
                           <li><a href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

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