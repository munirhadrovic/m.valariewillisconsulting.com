<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <title>Contact Us</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function() { 
		    	var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("boo-boo-records-inc-san-luis-obispo","300","RED","y","y","2");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})
		    ();
    	</script>
    	<div id="fb-root"></div>
		    <script>
		   $(function(d, s, id) {
      			var js, fjs = d.getElementsByTagName(s)[0];
      			if (d.getElementById(id)) return;
      			js = d.createElement(s); js.id = id;
      			js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      			fjs.parentNode.insertBefore(js, fjs);
    		}(document, 'script', 'facebook-jssdk'));</script>

	</head>
	<body>
		
		<?php 
			include 'settings.php';
		?>

		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
			<h1>Powered by <a href="http://mobilegrows.com/" rel="external">MobileGrows</a> | <a href="http://www.valariewillisconsulting.com/Pages/contactus.aspx" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider4.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider5.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider6.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"></a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<!--<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>
					-->
					<div class="ui-block-b"><a class="ui-btn velikodugme buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>"><img src='img/mail.png' style='width: 37px; padding-top: 10px;'></a></div>
				</fieldset>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Articles</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Clients</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Freebies</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Government</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">How The Fierce Handle Fea</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Keynotes:Branding</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Keynotes Leadership</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Keynotes:Women Audiences</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">The Leadership Challenge</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Leadership Pipeline Model</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Meeting Planners</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Partnerships</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Privacy Statement</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Product Page</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Speech slide show</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Testimonials</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Workshops</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Video clips</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Site Map</a>
                  </div>
              </div>

		  </div>

			

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Clients</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Freebies</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Government</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">How The Fierce Handle Fea</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes:Branding</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes Leadership</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes:Women Audiences</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">The Leadership Challenge</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Leadership Pipeline Model</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Meeting Planners</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Partnerships</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Privacy Statement</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Product Page</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Speech slide show</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Workshops</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Video clips</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Site Map</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                    <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Clients</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Freebies</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Government</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">How The Fierce Handle Fea</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes:Branding</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes Leadership</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Keynotes:Women Audiences</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">The Leadership Challenge</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Leadership Pipeline Model</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Meeting Planners</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Partnerships</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Privacy Statement</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Product Page</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Speech slide show</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Workshops</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Video clips</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Site Map</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	</body>
</html>
