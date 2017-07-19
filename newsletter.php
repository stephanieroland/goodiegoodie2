<!DOCTYPE HTML>
<?php
include_once('config.php');
//include_once('bdd.php');
include_once('php/MailChimp.php');

?>
<html>
<?php 
    include('head.html');
    ?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        
        <?php 
    include('nav.php');
    ?>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/girl-lollipop.png);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<!--<span class="price">$800</span> -->
		   						<h2>All natural. All fun. All on a stick. </h2>
		   						<p style="font-size:18px">Goodie Goodie is funny, delicious, and all natural lollipops. </p>
			   						<p><a href="#fh5co-product" class="btn btn-primary btn-outline btn-lg">CHECK OUT OUR LOLLIES</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/candies3.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   					<!--	<span class="price">$530</span> -->
		   						<h2>If life gives you lollipops lick'em</h2>
		   						<p style="font-size:18px">Say hello to lollipops without all the bad stuff. <br>We ship boxes of 12 lollipops and more. (You can also subscribe to our monthly box.).</p>
			   					<p><a href="#fh5co-product" class="btn btn-primary btn-outline btn-lg">SHOP NOW</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
                <!--
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$750</span>
		   						<h2>Alato Cabinet</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$540</span>
		   						<h2>The WW Chair</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li> -->
		  	</ul>
	  	</div>
	</aside>
<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Cool Stuff</span>
					<h2>Natural. Colorful. Funny.</h2>
					<p>We don't use any industrial additive. All natural.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/moustache1.jpg);">
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
								<!--	<a href="single.html" class="icon"><i class="icon-eye"></i></a> -->
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Moustache Magic</a></h3>
							<span class="price">Vegan Gummy. No gelatin. </span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/aaa.JPEG);">
							
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<!-- <a href="single.html" class="icon"><i class="icon-eye"></i></a> -->
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Sweet Poop</a></h3>
							<span class="price">A natural toffee.</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/hardcandy1.jpg);">
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<!-- <a href="single.html" class="icon"><i class="icon-eye"></i></a> -->a
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">I love Classic</a></h3>
							<span class="price">Just fruit, water and sugar.</span>
						</div>
					</div>
				</div>
             <div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/kiss2.JPEG);">
					
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<!-- <a href="single.html" class="icon"><i class="icon-eye"></i></a> -->
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">The XOXO</a></h3>
							<span class="price">A strawberry natural kiss</span>
						</div>
					</div>
				</div>
               <div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/ghost.jpg);">
							
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<!-- <a href="single.html" class="icon"><i class="icon-eye"></i></a> -->
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Snaplicious</a></h3>
							<span class="price">A mango ghost.</span>
						</div>
					</div>
				</div>
                <div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/lolly-red.png);">
					
							<div class="inner">
								<p>
								<!--	<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<!-- <a href="single.html" class="icon"><i class="icon-eye"></i></a> -->
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">More to come!</a></h3>
							<span class="price">Still cooking to offer more in the box!</span>
						</div>
					</div>
				</div>
             
            </div>
            
            <div class="row ">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					
					<h2>Get your first box</h2>
					<p>Receive a mix of 12 of these amazing natural candies right to your door.</p>
                     <button
                                    class="checkout-button btn btn-primary btn-outline btn-lg"
                                    data-name="Candy A"
                                    data-description="Yummy A"
                                    data-image=""
                                    data-price="24">BUY NOW</button>
				</div>
			</div>
            
	   </div>
    </div>
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</span>
						<h3>ALL NATURAL</h3>
						 <p style="text-align:justify">When we say Goodie Goodie, we mean it. No to additives, allergeens, gelatin. We only use natural flavors, and make our lollipops both organic and veggies.</p>
				
                

					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</span>
						<h3>Homemade Style</h3>
						<p style="text-align:justify">We are a New York based candy maker established in our little magical factory in Brooklyn. We are proud to introduce a new kind of all natural candy to the world. Everything at Goodie Goodie is crafted by hand with strict and simple rules for never comprising our natural principles.</p>
						<!--<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
                        		 <button
                                    class="checkout-button btn btn-primary btn-outline"
                                    data-name="Candy A"
                                    data-description="Yummy A"
                                    data-image=""
                                    data-price="24">Buy now</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>Free Delivery</h3>
						<p style="text-align:justify">We offer free shipping to all 48 lower states and charge a small shipping fee for those living in either Hawaii or Alaska. We are working on bringing the Goodie Goodie experience to even more countries for our international customers soon.</p>
						<!--<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
 
        
      
        
       <!--    
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Testimony</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->

	<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-color:white;">
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-4 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Creativity Fuel</span>

							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shopping-cart"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Happy Clients</span>
							</div>
						</div>
                        <!--
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shop"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">All Products</span>
							</div>
						</div> -->
						<div class="col-md-4 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="1100" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Cooking</span>

							</div>
						</div>
					</div>
                    
         
				</div>
                
                    
			</div>
       
		</div>
	</div>

           
        <div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Stay tuned!</h2>
					<p>We are about to launch the first natural candy subscription box. <br>Subscribe here and get a 15% discount when it's launched!</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
                    
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
								<div class="box-error">There must have been some error. Please try again !</div>
								';
                            ?>
							
                          		<form class="form-inline" action="newsletter.php" method="post" name="nform" id="nform">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                                    </div>
                                </form>
                          <!--end newsletterform-->
<?php
						}
						else {
				?>
            <div class="box-success" style="text-align:center">Thanks! You'll been informed soon about our amazing monthly boxes.</div><br/>
						
                                    
                    <?php                
							
						}
					}
					else {
					?>
					
					       <h2> Stay in touch for the new releases!</h2>
					      
					<form class="form-inline" action="newsletter.php" method="post" name="nform" id="nform">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
                          
            
            
					<?php
					}
					?>
                    
              
				</div>
			</div>
            <br>
            <div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Prehype. All Rights Reserved.</small> 
				
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<!--<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

//        <?php 
  //      include("footer.html");
    //    ?>



	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
     <!-- script for Stripe buttons --> 
    
        <!-- suivi GA -->
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101906993-1', 'auto');
  ga('send', 'pageview');

</script>
        
  <!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
    var handler = StripeCheckout.configure({
        key: 'pk_test_oJXYwOOfu9xS3XDZVys7Kysz',
        name: "Default Name",
        description: "Default Description",
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        email: "true",
        billingAddress: true,
        shippingAddress: true,
        panelLabel: "Button Label",
        zipCode: true,
        token: function(token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.
        }
    });
    window.addEventListener('popstate', function() {
        handler.close();
    });
    var stripeCheckout = function(name, description, image, price) {
        handler.open({
            name: name,
            description: description,
            amount: price,
            image: image,
        });
    };
    $(function() {
        $(".checkout-button").on('click', function(ev) {
            console.log(ev);
            stripeCheckout(
                $(ev.target).data("name"),
                $(ev.target).data("description"),
                $(ev.target).data("image"),
                $(ev.target).data("price")
            );
            ev.preventDefault();
        });
    });
</script>
        
            
	</body>
</html>

