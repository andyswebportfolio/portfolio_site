<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT']; 
?>
<!doctype html>
	<html>
		<head>
			<title>K &#38; A Hair And Beauty</title>

			<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0"/>
            
           
           <!-- Favicon setup -->
           
           	 <link rel="shortcut icon" href="/portfolio_sites/kAndA/favicon.ico">
             <link rel="icon" sizes="16x16 32x32 64x64" href="/portfolio_sites/kAndA/favicon.ico">
             <link rel="icon" type="image/png" sizes="196x196" href="/portfolio_sites/kAndA/favicon-192.png">
             <link rel="icon" type="image/png" sizes="160x160" href="/portfolio_sites/kAndA/favicon-160.png">
             <link rel="icon" type="image/png" sizes="96x96" href="/portfolio_sites/kAndA/favicon-96.png">
             <link rel="icon" type="image/png" sizes="64x64" href="/portfolio_sites/kAndA/favicon-64.png">
             <link rel="icon" type="image/png" sizes="32x32" href="/portfolio_sites/kAndA/favicon-32.png">
             <link rel="icon" type="image/png" sizes="16x16" href="/portfolio_sites/kAndA/favicon-16.png">
             <link rel="apple-touch-icon" href="/portfolio_sites/kAndA/favicon-57.png">
             <link rel="apple-touch-icon" sizes="114x114" href="/portfolio_sites/kAndA/favicon-114.png">
             <link rel="apple-touch-icon" sizes="72x72" href="/portfolio_sites/kAndA/favicon-72.png">
             <link rel="apple-touch-icon" sizes="144x144" href="/portfolio_sites/kAndA/favicon-144.png">
             <link rel="apple-touch-icon" sizes="60x60" href="/portfolio_sites/kAndA/favicon-60.png">
             <link rel="apple-touch-icon" sizes="120x120" href="/portfolio_sites/kAndA/favicon-120.png">
             <link rel="apple-touch-icon" sizes="76x76" href="/portfolio_sites/kAndA/favicon-76.png">
             <link rel="apple-touch-icon" sizes="152x152" href="/portfolio_sites/kAndA/favicon-152.png">
             <link rel="apple-touch-icon" sizes="180x180" href="/portfolio_sites/kAndA/favicon-180.png">
             <meta name="msapplication-TileColor" content="#FFFFFF">
             <meta name="msapplication-TileImage" content="/portfolio_sites/kAndA/favicon-144.png">
             <meta name="msapplication-config" content="/portfolio_sites/kAndA/browserconfig.xml">

			<!--Load CSS - LOAD MAIN LAST nothing else matters-->

				<link rel="stylesheet" href="css/normalize.css" type="text/css"></link>
				<link rel="stylesheet" href="css/navigation.css" type="text/css"></link>
			<!--Box Factories-->
				
				<!-- stored in script at bottom of page -->
				
				
				<link rel="stylesheet" href="css/embedSocialSize.css" type="text/css"></link>

				<link rel="stylesheet" href="css/main.css" type="text/css"></link>
				
				<link id="boxFactory" rel="stylesheet" href="css/boxFactory.css" type="text/css"></link>

				
				<link rel="stylesheet" href="css/dropdown.css" type="text/css"></link>
				<link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
                


			<!-- CSS Loaded -->
		</head>
		<body>
			<div id="navPlaceholder">
			</div>

			<div class="nav">
				<div id="logoLeft">
					<img src="img/logoNavBar.jpg" alt="navigation bar logo"></img>
				</div>
				<div class="mainBar">
					<p id="firstItem"><a href="#welcomeNavPosition">Welcome</a></p>
					<p><a href="#stylistsNavPosition">Our Team</a></p>
					<p><a href="#hairNavPosition">Hair</a></p>
					<p><a href="#nailsNavPosition">Nails</a></p>
					<p><a href="#acupunctureNavPosition">Acupuncture</a></p>
					<p><a href="#pricesNavPosition">Prices</a></p>
					<p><a href="#contactNavPosition">Contact</a></p>
				</div>

				


					<div id="contactDetails">
						<p>
						Tel: Demo Mode<br>
						Email: Demo Mode
						</p>

					</div>

					

				</div>

				<div class="dropdownBar">
					<div id="dropdownSection">
						<div class="dropdown">
						
			 				<button onclick="myFunction2()" class="dropbtn"></button>

			  				<div id="myDropdown" class="dropdown-content">
			  					<div id="navTopSpacer"></div>
								<p id="firstItem"><a href="#welcomeNavPosition">Welcome</a></p>
								<p><a href="#stylistsNavPosition">Our Team</a></p>
								<p><a href="#hairNavPosition">Hair</a></p>
								<p><a href="#nailsNavPosition">Nails</a></p>
								<p><a href="#acupunctureNavPosition">Acupuncture</a></p>
								<p><a href="#pricesNavPosition">Prices</a></p>
								<p><a href="#contactNavPosition">Contact</a></p>
								<!--<p><a href="http://www.kashop.co.uk">Shop</a></p>-->
	 						</div>
						</div>	
					</div>
				</div>
			</div>


			<div class="fullWidth" id="header">
				
				<div class="equalDistanceX">
					
					<div class="headerFiller">
					</div>
					
					<div class="headerBanner">
						<div class="boxContentImage">
							<img id="headerMain" src="img/header3.png" alt="k and a logo"/>
							
							<img id="headerMobile" src="img/headerMobile.png" alt="k and a logo"/>
                            
						</div>
					</div>
					
					<div class="headerFiller">
					</div>
				
				
				</div>
			</div>
			</div>

            <div id="video_header">
                <video autoplay muted loop controls id="myVideo">
                  <source src="video/promo.mp4" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video>
                <div id="video_link_message">
                    <div id="video_container">
                        <p>View our new promotional video <a href="promo_video.php">here!</a></p>
                    </div>
                </div>
            </div>

            <div id="welcomeNavPosition" class="mobileNavFix">
			</div>
            <br>
    
			<div class="fullWidth" id="welcome">
                <h1 id="largeHeader"> Welcome to K and A</h1>
				<h1 id="smallHeader"> Welcome to<br> K and A</h1>
                <div class="row">
                    <div class="column">
                        <p><?php include 'header_text.html'; ?></p>
                    </div>
                    
                    <div class="column">
                        <img src="img/faded3.jpg" alt="Adam and Klaudia on the beach"/>
                    </div>
                    
                </div>

				</div>

			</div>

			<div id="stylistsNavPosition" class="mobileNavFix"><!--delete the class mobileNavFix when porting, it's only on k and a site-->
			</div>
			<br>
			<div id="stylists" class="fullWidth">
				<h1>Our Team</h1>

				<div class="equalDistanceX">

					<div class="equalDistanceBox4">
						<div class="boxContentImage">
							<img src="plugins/ourTeam/img/klaudia.png" alt="klaudia"></img>
						</div>
						<div class="boxContentText">
							<h2>Klaudia</h2>
							<h5>Owner and Hair Stylist</h5>

							
						</div>
					</div>
                
					<div class="dividingBlockY">
					</div>

					<div class="equalDistanceBox4">
						<div class="boxContentImage">
							<img src="plugins/ourTeam/img/adam.png" alt="adam"></img>
						</div>
						<div class="boxContentText">
							<h2>Adam</h2>
							<h5> Owner and Cosmetic<br> Acupuncture Therapist</h5>
						</div>
					</div>

					<div class="dividingBlockY">
					</div>

					<div class="equalDistanceBox4">
						<div class="boxContentImage">
							<img src="plugins/ourTeam/img/kamila.png" alt="kamila"></img>
						</div>
						<div class="boxContentText">
							<h2>Kamila</h2>
							<h5>Assistant Stylist</h5>
						</div>
					</div>

					<div class="dividingBlockY">
					</div>
					
					<div class="equalDistanceBox4">
						<div class="boxContentImage">
							<img src="plugins/ourTeam/img/adrianna.png" alt="adrianna"></img>
						</div>
						<div class="boxContentText">
							<h2>Adrianna</h2>
							<h5>Nail Technician and Beauty Therapist</h5>

						</div>
					</div>

					
				

					
				</div>
			</div>
			
			<div id="hairNavPosition" class="mobileNavFix">
			</div>
			<br>

			<div class="fullWidth" id="hair">
					<h1>Hair</h1>

				<div class="equalDistanceX">
					<div class="unevenBoxSmallR">
						<div class="boxContentImage">
							<img class="hairImages" src="img/goldwell.jpg" alt="goldwell"></img>
						</div>
					</div>

					

					<div class="unevenBoxLargeL">
						<div class="boxContentText">
							<p>Hair care:<br><br>
							Our extremely talented hair stylists have years of experience in providing high quality services. We offer cutting, styling, colouring, treating and changing your hair, to make you feel and look like a celebrity.
											
							They offer the highest standard of creativity, lots of passion and love to the hair which make K&#38;A one of the most sought after salons in East Sussex.
							</p>
						</div>	
						
					</div>
				</div>

				<div class="centerMobileImageHorizontal">
					<img class="hairImagesMobile" id="goldwellIMG" src="img/goldwell.jpg" alt="goldwell"></img>
				</div>


				<div class="dividingBlockX">
					</div>
				
		

				<div class="equalDistanceX">
					<div class="unevenBoxSmallR">
						<div class="boxContentImage">
							<img class="hairImages" src="img/olaplex.jpg" alt="olaplex"></img>
						</div>
					</div>
						
					<div class="unevenBoxLargeL">
						<div class="boxContentText">
							<p>
							Hair colour:<br><br>
							We are using market leading professional hair colour Goldwell with the top product in the beauty world Olaplex, for longer lasting fresh and healthy hair look.
							OLAPLEX&#8482; is a single active ingredient, designed to reconnect the disulfide sulfur bonds broken by the process of permanent hair coloring and lightening. OLAPLEX&#8482; is free of silicones, oils, aldehydes and parabens.
							</p>
						</div>
					</div>
				</div>

				<div class="centerMobileImageHorizontal">
					<img class="hairImagesMobile" src="img/olaplex.jpg" alt="olaplex"></img>
				</div>

				<div class="dividingBlockX">
					</div>

				<div class="equalDistanceX">
					<div class="unevenBoxSmallR">
						<div class="boxContentImage">
							<img class="hairImages" src="img/extensions.jpg" alt="extensions selection"></img>
						</div>
					</div>
						
					<div class="unevenBoxLargeL">
						<div class="boxContentText">
							<p>
							Hair Extensions:<br><br>
							In our salon we work with the best suppliers of high quality human hair and offer you a range of hair extensions fitting methods - Our specialists know how to achieve the results you want at a price you can afford. Hair extensions are a great way to enhance your hair, giving you a fresh new look. We have many colors available from striking reds to gorgeous shades of brown and blonde.
							</p>
						</div>		
					</div>
				</div>

				<div class="centerMobileImageHorizontal">
					<img class="hairImagesMobile" src="img/extensions.jpg" alt="extensions selection"></img>
				</div>

				<div class="dividingBlockX">
					</div>
				

				<div class="equalDistanceX">
					<div class="unevenBoxSmallR">
						<div class="boxContentImage">
							<img class="hairImages" src="img/keratinModel.jpg" alt="beautiful model"></img>
						</div>
					</div>
						
					<div class="unevenBoxLargeL">
						<div class="boxContentText">
							<p>
							Brazilian Keratin Treatment:<br><br>

							This is a 1 to 3 hour treatment to bring your hair back to life, creating a gorgeous, shiny, revitalised effect. No matter if you bleached, dyed, permed or highlighted it before, it will be surprisingly helpful.


							Brazilian Keratin is a natural form - one of the main ingredients of human nails, hair and skin structure. Provide yourself with a young, healthy, breath-taking appearance as soon as possible!
							</p>
						</div>	
						
					</div>
				</div>
				<!--<div class="centerMobileImageHorizontal">
					<img class="hairImagesMobile" src="img/keratinModel.jpg" alt="beautiful model"></img>
				</div>-->
			</div>

		


			<div id="nailsNavPosition" class="mobileNavFix">
			</div>
			<br>
			<div class="fullWidth" id="nails">
				
					<h1>Nails</h1>

					

					<div class="equalDistanceX">
						<div class="unevenBoxLargeL">
							<div class="boxContentText">
								<p>
								The mission of our nail technicians is to provide you with a relaxing environment and a great variety of treatments.

								This is the perfect place to stop, take your time and enjoy having your nails transformed using the top ranges of nail products and equipment. Our quality and service is second to none and our prices are very competitive too.

								At K&A, Beauticians are fully qualified, experienced Nail Technicians who know how to make you feel at ease and relaxed. They take pride in their work and adhere to strict hygiene and safety standards.
								We definitely provide you with a luxury manicure and pedicure that looks beautiful and lasts for weeks.
								</p>
							</div>
						</div>
						<div class="unevenBoxSmallR">
							<div class="boxContentImage">
								<img id="heartNails" src="img/nailsmainpic.png" alt="nailsmainpic">
								</img>

							</div>
						</div>
					</div>
					<div class="centerImage">
						<img id="mobileNails" src="img/nailsmainpicmobile.jpg" alt="nailsmobile">
								</img>
					</div>
				</div>

				<br>
			<div id="acupunctureNavPosition" class="mobileNavFix"></div><br>
				<div class="fullWidth" id="acupuncture">
					<h1>Acupuncture &amp; Microneedling</h1>

					<div class="equalDistanceX">
						<div class="unevenBoxSmallR">
							<div class="boxContentImage">
								<img class="acuImg" src="img/rocks.jpg" alt="rocks"></img>
							</div>
						</div>

						

						<div class="unevenBoxLargeL">
							<div class="boxContentText">
								<h2>What is Cosmetic Acupuncture?</h2>
								<p>
								Cosmetic Acupuncture is the application of fine filament needles
								inserted into the skin of the face and neck for a natural anti-ageing
								treatment that aims to rejuvenate overall elasticity and complexion.
								This action induces the body's natural healing mechanism which
								encourages the production of collagen and elastin.
								</p>
							</div>	
							
						</div>
					</div>

					<div class="centerMobileImageHorizontal">
						<img class="hairImagesMobile" src="img/rocks.jpg" alt="rocks"></img>
					</div>


					<div class="dividingBlockX">
						</div>
					
			

					<div class="equalDistanceX">
						<div class="unevenBoxSmallR">
							<div class="boxContentImage">
								<img class="acuImg" src="img/flowers.jpg" alt="flowers"></img>
							</div>
						</div>
							
						<div class="unevenBoxLargeL">
							<div class="boxContentText">
							 	<h2>Microneedling - How it works</h2>
								<p>Medical micro needling works by producing up to 1 million microscopic
								needle columns (short circuits between cells) in the dermis of the skin.
								These stimulate the skin to regenerate and repair itself naturally and
								safely, creating smoother, brighter, younger looking skin.
								</p>
							</div>
						</div>
					</div>

					<div class="centerMobileImageHorizontal">
						<img class="hairImagesMobile" src="img/flowers.jpg" alt="flowers"></img>
					</div>




							

							
						</div>
					</div>
					<!--<div class="centerMobileImageHorizontal">
						<img class="hairImagesMobile" src="img/keratinModel.jpg" alt="beautiful model"></img>
					</div>-->
				</div>
			</div>




					
			</div>

			</div>
	
			<div id="galleryNavPosition" class="mobileNavFix">
			</div>
			<br>

			<!--<div id="galleryNavPosition">
			</div>
			<br> PUT THIS FIRST IN EVERY SECTION SO THE NAVBAR LINKS TO THE RIGHT PLACE AND
			DOESN'T GET CUT OFF BY THE TOP BAR-->

			<div id="pricesNavPosition" class="mobileNavFix">
			</div>
			<br>
			<div class="fullWidth" id="prices">
				<h1>Prices</h1>
				<div class="columns">
					<p>
						HAIR
						<br><br>
						CUTTING:
						<br>
						Cut and Blow Dry | &pound;30
						<br>

						Wet Cut | &pound;20
						<br>
						Cut &amp; Set | &pound;25
						<br>
						Male Cut &amp; Finish | &pound;10
						<br><br>
						STYLING:
						<br>
						Blow Dry | &pound;15
						<br>
						Curly Blow Dry | &pound;25
						<br>
						Hair Up | from &pound;30				<br>
					Shampoo &amp; Set | &pound;12
					<br><br>
					COLOURING:						<br>
					Highlights Full Head | from &pound;65
					<br>
					Highlights Half Head | from &pound;55
					<br>						
                    Highlights T-section | from &pound;50
					<br>
					Tint Full Head | from &pound;55
					<br>
					Semi-Permanent | from &pound;45
						<br>
					Tint Regrowth | &pound;50						<br>
					Tint &amp; Highlights Full Head | from &pound;85
					<br>
					Tint &amp; Highlights Half Head | from &pound;75
					<br>
 					Creative Colouring | from &pound;70
					<br>
					Toner | &pound;15
					<br>
					Colour Correction | Price on consultation
					<br><br>
			
					BRAZILIAN KERATIN TREATMENT:
					<br>
					Short Hair | &pound;75
					<br>
					Medium Hair | &pound;85
					<br>
					Long Hair | &pound;95
					<br>
					Additional charge for thick hair | from &pound;10
					<br><br>

					HAIR EXTENSIONS

					<br>
					In our salon we work with only the best suppliers of high quality human hair, offering you a range of fitting methods. <br>
					Please call us for more information, or to book a consultation.

					<br><br>
					<br>

					BEAUTY
					<br><br>

					COSMETIC ACUPUNCTURE &amp; MICRONEEDLING:
					<br>
					Cosmetic Acupuncture | &pound;80
					<br>
					Microneedling | &pound;50
					<br>
					Cosmetic Acupuncture and Microneedling &pound;110
					<br>
					<br>

					EYEBROWS CARE:
					<br>
					Henna Tinting 6
					<br>
					Waxing | &pound;7
					<br>
					Shaping with tinting  | &pound;10
					<br><br>

					EYELASH EXTENSIONS:
					<br>
					Full Set 1:1 SILK Lashes | &pound;40
					<br>
					Infill  | &pound;30
					<br>
					Full Set 1:1 CASHMERE Lashes  | &pound;45
					<br>
					Infill | &pound;35
					<br>
					Full Set 3D Lashes  | &pound;60
					<br>
					Infill | &pound;45
					<br>
					Full Set VOLUME Lashes  from | &pound;70
					<br>
					Infill from | &pound;55
					<br><br>

					SUNBED MegaSun6000:
					<br>
					1 Min | &pound;0.90
					<br>
					30 Mins | &pound;20
					<br>
					60 Mins | &pound;30
					<br><br>
					
					SPRAY TANNING:
					<br>
					Sienna-X Full Body | &pound;20
					<br>
					Sienna-X Half Body<br> (Waist up/Waist down) | &pound;15
					<br><br>
					MAKE-UP:
					<br>
					Artistic &amp; Special Occasion Make-up services available.<br>
					Please call us for more information or to book a consultation.

					<br><br>

					GEL NAILS:
					<br>
					Full Set Nails | &pound;30
					<br>
					Infill  | &pound;25
					<br>
					Gel on Natural Nails | &pound;25
					<br>
					Take Off and Manicure  | &pound;15
					<br>
					Take Off and New Set | &pound;35
					<br>
					Extras/Design/Swarovski | &pound;5
					<br><br>

					SHELLAC:
					<br>
					Shellac Colour  | &pound;20
					<br>
					Take Off  | &pound;10
					<br><br>


					HANDS AND FEET TREATMENT:
					<br>
					Manicure  | &pound;15
					<br>
					Pedicure  | &pound;30
					<br>
					Pedicure with Shellac Colour  | &pound;45
					<br><br>
                        
                    LASER TEETH WHITENING:
					<br>
					Hollywood Whitening&trade; 1 Hour Treatment  | &pound;70
					<br><br>
                        
					</p>
				</div>
			</div>

			<div id="contactNavPosition" class="mobileNavFix"><br>
			</div>
			

			<div class="fullWidth" id="contact">

					<h1>Contact</h1>
				<div class="equalDistanceX">
				
					

					<div class="unevenBoxSmallR">
				
						<div class="boxContentText">
								
							<p>
							Address<br><br>
							K &amp; A Hair and Beauty<br>
							<br>Please note: Map location is an example location.<br>
							<br><br>
							</p>
							<p>Tel: -<br>
                                Mobile: -<br>
							Email: -
                                
							</p>

							<p>
							<br><br>
							Opening Hours<br><br>
							Closed due to Covid-19
							</p>
						</div>
						
					</div>
					
					
						
						
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d317958.99671409396!2d-0.1145929537042045!3d51.49386438904496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1615892407069!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					
					
					
				</div>
			</div>

			<!--<div class="divide">
			</div>-->

					<div class="fullWidth" id="footer">

					<div class="unevenBoxSmallR">
						<div class="boxContentImage">

							<a href="#"><img class="social" src="icon/facebookI
								con.png" alt="facebook logo"></a>
						</div>
						<div class="boxContentImage">
							<a href="#"><img class="social" src="icon/twitterIcon.png" alt="twitter logo"></a>
						</div>
						<div class="boxContentImage">
							<a href="#"><img class="social" src="icon/instagramIcon.png" alt="instagram logo"></a>
						</div>
					</div>
						<div class="boxContentText">

							<p>This Site &copy; K and A Hair and Beauty 2017<br><br>
							Web Design and Development by<br> <a href="#">AWK Web Design</a>
							</p>
						</div>
						
					</div>

					<!--Load Javascript LAST-->
						<!--Load Resources-->
						<script src="javascript/jQuery3.2.1.js" type="text/javascript">
						</script>
						<!--Load Custom Scripts-->
						<script src="javascript/dropDown.js" type="text/javascript">
						</script>
						<script src="javascript/video_script.js" type="text/javascript">
						</script>
						<!--<script src="javascript/windowResizeCheck.js" type="text/javascript">
						</script>-->
						<!--<script src="javascript/dev.js" type="text/javascript">
						</script>-->

						

						<!--<script src="javascript/layoutSwitch.js" type="text/javascript">
						</script>

						
						
			<!--Scripts Loaded-->
		</body>
		<!-- This website coded and compiled by Andrew Wells-Knight using html, css, jQuery and mediaCheck (Javascript) <http://sparkbox.github.io/mediaCheck/>
	</html>
