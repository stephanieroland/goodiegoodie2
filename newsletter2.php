<!DOCTYPE html>
<?php
include_once('config.php');
//include_once('bdd.php');
include_once('php/MailChimp.php');

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Goodie Goodie - fun & natural candies</title>

  <!--SEO Meta Tags-->
  <meta name="description" content="Goodie Goodie is funny and delicious Lollipops made all natural. Say hello to lollipops without all the bad stuff." />
  <meta name="keywords" content="lollipop, candy, natural, goodie goodie, vegan" />
  <meta name="author" content="Prehype" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
 <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
 <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
<link rel="icon" type="image/jpg" href="img/goodie/comingsoon.png"    />

  <!-- Google Material Icons -->
  <link href="css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  <!-- Brand Icons -->
  <link href="css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  <!-- Bootstrap -->
  <link href="css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="css/theme.css" rel="stylesheet" media="screen">

  <!-- Page Preloading -->
  <script src="js/vendor/page-preloading.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading">

  <!-- Page Pre-Loader -->
  <div class="page-preloader">
    <div class="preloader">
      <img src="img/preloader.gif" alt="Preloader">
    </div>
  </div><!-- .page-preloader -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">

      <!-- Site Logo -->
      <a href="index.html" class="site-logo visible-desktop">
        <!--<span>[</span> M
        <span class="text-gray">/</span>
        STORE <span>]</span> -->
          <span> <img src="img/goodie/logo-final.png"/></span>
      </a><!-- site-logo.visible-desktop -->
      <a href="index.html" class="site-logo visible-mobile">
        <span>Goodie</span>
      </a><!-- site-logo.visible-mobile -->

      <!-- Language Switcher -->
     <!-- <div class="lang-switcher">
        <div class="lang-toggle">
          <img src="img/flags/GB.png" alt="English">
          <i class="material-icons arrow_drop_down"></i>
          <ul class="lang-dropdown">
            <li><a href="#"><img src="img/flags/FR.png" alt="French">FR</a></li>
            <li><a href="#"><img src="img/flags/DE.png" alt="German">DE</a></li>
            <li><a href="#"><img src="img/flags/IT.png" alt="Italian">IT</a></li>
          </ul>
        </div>
      </div><!-- .lang-switcher -->

      <!-- Main Navigation -->
      <!-- Control the position of navigation via modifier classes: "text-left, text-center, text-right" -->
      <nav class="main-navigation text-center">
        <ul class="menu">
          <li>
            <a href="index.html">Home</a>
           <!-- <ul class="sub-menu">
              <li class="current-menu-item"><a href="index.html">Home Version 1</a></li>
              <li><a href="home-v2.html">Home Version 2</a></li>
              <li><a href="home-v3.html">Home Version 3</a></li>
            </ul> -->
          </li>
          <li>
            <a href="#product">Our lollipops</a>
           <!-- <ul class="sub-menu">
              <li><a href="shop-fullwidth-sl.html">Full Width Sidebar Left</a></li>
              <li><a href="shop-fullwidth-sr.html">Full Width Sidebar Right</a></li>
              <li><a href="shop-fullwidth-ft.html">Full Width Filters Top</a></li>
              <li><a href="shop-boxed-sl.html">Boxed Sidebar Left</a></li>
              <li><a href="shop-boxed-sr.html">Boxed Sidebar Right</a></li>
              <li><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>
              <li><a href="shop-single.html">Single Product</a></li>
              <li><a href="shopping-cart.html">Shopping Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="login.html">Login / Register Page</a></li>
              <li><a href="account.html">User Account Page</a></li>
            </ul> -->
          </li>
        <!--  <li><a href="blog.html">Blog</a></li>
          <li class="menu-item-has-children">
            <a href="#">Gallery</a>
            <ul class="sub-menu">
              <li><a href="gallery-fullwidth-with-gap.html">Full Width With Gap</a></li>
              <li><a href="gallery-fullwidth-no-gap.html">Full Width No Gap</a></li>
              <li><a href="gallery-boxed-with-gap.html">Boxed With Gap</a></li>
              <li><a href="gallery-boxed-no-gap.html">Boxed No Gap</a></li>
            </ul>
          </li> -->
          <li><a href="#about">About</a></li> 
          <li><a href="#contact">Contact us</a></li>
         <!-- <li><a href="faq.html">FAQ</a></li>
          <li class="hidden-md"><a href="elements.html">Elements</a></li> -->
        </ul><!-- .menu -->
      </nav><!-- .main-navigation -->

      <!-- Toolbar -->
      <div class="toolbar">
        <div class="inner">
          <a href="#" class="mobile-menu-toggle"><i class="material-icons menu"></i></a>
          <a href=""><i class=""></i></a>
          <div class="cart-btn">
            
          </div><!-- .cart-btn -->
        </div><!-- .inner -->
      </div><!-- .toolbar -->
    </header><!-- .navbar.navbar-sticky -->

    <!-- Featured Image -->
    <div class="featured-image" style="background-image: url(img/featured-image/about.jpg);"></div>

    <!-- Content -->
    <section  style="text-align:center"  class="container padding-top-3x padding-bottom-3x">
        
        		<?php
					if(isset($_POST) && isset($_POST['email'])) {
                        
						$MailChimp = new \Drewm\MailChimp(MAILCHIMP_API_KEY);
						
						$result = $MailChimp->call('lists/subscribe', array(
						                'id'                => MAILCHIMP_LIST_ID,
						                'email'             => array('email'=>$_POST['email']),
						                
						                'double_optin'      => false,
						                'update_existing'   => true,
						                'send_welcome'      => false
						            ));
						
						
						if(isset($result['status']) && strcasecmp($result['status'],'error')==0) {
							echo '
								  <p class="text-danger"> There must be some problem. Please try again.</p>
								';
                            ?>
							
                          		 <form action="newsletter2.php" method="post" class="subscribe-form" novalidate>
                                  <input type="email" class="form-control" name="email" placeholder="Your e-mail">
                                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
                                  <button type="submit"><i class="material-icons send"></i></button>
                                </form>
                                                  <!--end newsletterform-->
<?php
						}
						else {
				?>
                     <h3 >Thank you for suscribing!</h3>
                     <p class="text-success"><strong>Your email was successfully added to our mailing list.</strong> <br>As soon as we launch our subscription box, you'll be the first to know.</p>
             <a style="text-align:center" href="index.html" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                      Return to home page
                 <i class="material-icons arrow_forward"></i></a>

						
                                    
                    <?php                
							
						}
					}
					else {
					?>
					
					           <h3>
                                   First natural candy Subscription box</h3>
                                  <p>We are about to launch the first natural candy subscription box. <br>Subscribe here and get a 15% discount when it's launched!</p>
                                
                                <form action="newsletter2.php" method="post" class="subscribe-form" novalidate>
                                  <input type="email" class="form-control" name="email" placeholder="Your e-mail">
                                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
                                  <button type="submit"><i class="material-icons send"></i></button>
                                </form>

            
            
					<?php
					}
					?>
        
     
        
        
        
     </section>
   <!-- Footer -->
    <footer id="contact" class="footer">
      <div class="column">
        <p class="text-sm">Need support? Call <span class="text-primary">001 (917) 555-4836</span></p>
        <div class="social-bar text-center space-bottom">
         <!-- <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="Skype">
            <i class="socicon-skype"></i>
          </a> -->
          <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
            <i class="socicon-facebook"></i>
          </a>
            <!--
          <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
            <i class="socicon-googleplus"></i>
          </a> 
          <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
            <i class="socicon-twitter"></i>
          </a> -->
          <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
            <i class="socicon-instagram"></i>
          </a>
            <a href="#" class="sb-pinterest" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
            <i class="socicon-pinterest"></i>
          </a>
        </div><!-- .social-bar -->
        <p class="copyright">&copy; 2016. Made with <i class="text-danger material-icons favorite"></i> by Prehype.</p>
      </div><!-- .column -->
     <!-- <div class="column">
        <h3 class="widget-title">
          First natural candy Subscription box
          <small>We are about to launch the first natural candy subscription box. <br>Subscribe here and get a 15% discount when it's launched!</small>
        </h3>
        <form action="newsletter2.php" method="post" class="subscribe-form" novalidate>
          <input type="email" class="form-control" name="email" placeholder="Your e-mail">
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <!--<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
          <button type="submit"><i class="material-icons send"></i></button>
        </form>
      </div><!-- .column -->
      <div class="column">
        <h3 class="widget-title">
          Payment Methods
          <small>We support one of the following payment methods.</small>
        </h3>
        <div class="cards"><img src="img/cards.png" alt="Cards"></div>
        <!-- Scroll To Top Button -->
        <div class="scroll-to-top-btn"><i class="material-icons trending_flat"></i></div>
      </div><!-- .column -->
    </footer><!-- .footer -->
  </div><!-- .page-wrapper -->

  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="js/vendor/jquery-2.1.4.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/smoothscroll.js"></script>
  <script src="js/vendor/velocity.min.js"></script>
  <script src="js/vendor/waves.min.js"></script>
  <script src="js/vendor/icheck.min.js"></script>
  <script src="js/vendor/magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101906993-1', 'auto');
  ga('send', 'pageview');

</script>   

</body><!-- <body> -->

</html>
