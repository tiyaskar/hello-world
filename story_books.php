<?php

	session_start();

	if (!$_SESSION['email']) {
		header("loacation: login.php");
	}

?>
#



<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Story Books</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="index.html">Infinity</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<a href="logout.php" style="text-decoration: none;"><h3><?php echo $_SESSION['username'];?></h3></a> 

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
				
				<li><a class="smoothscroll" href="#portfolio" title="">Downloads</a></li>
				<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>						
			</ul>	

					

			<ul class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>
             <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>	         
	      </ul>		

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h3 class="animate-intro">Welcome to Infinity Servers.</h3>
				  			<h1 class="animate-intro">
							<?php echo $_SESSION['username'];?> <br>
						
				  			</h1>	

				  			<div class="more animate-intro">
				  				<a href="welcome.php" style="color: white; text-decoration: none;">
				  					<button type="button" style="color: white;">BACK</button>
				  				</a>
				  			</div>							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<!--<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-instagram"></i></a>
	      </li>
         <li class="animate-intro">
           	<a href="#"><i class="fa fa-behance"></i></a>
         </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-dribbble"></i></a>
	      </li>	      
	   </ul>--> <!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->




   <!-- portfolio
   ================================================== -->
   <section id="portfolio">
   	
   	<div class="intro-wrap">

   		<div class="row narrow section-intro with-bottom-sep animate-this">
	   		<div class="col-twelve">
	   			<h3>DOWNLOADS</h3>
		   		<h1>Download Story Books.</h1>  			
		   		
		 		<br><br><br>	   			
	   		</div>   		
	   	</div> <!-- end row section-intro -->   		

   	</div> <!-- end intro-wrap -->   	

   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <!--<div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/shutterbug.jpg">	                     
	                     <div class="item-text">
	                     	
		     					   <h3 class="folio-title"><center>Story Books</center></h3>    					   
		     					</div>  
		     		  </a>                                  
	                  
	                 
	               <!--</div>--> <!-- end item-wrap -->
						
						
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	              <!-- <div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/yellowwall.jpg" >	                     
	                     <div class="item-text">
	        				
		     					   <h3 class="folio-title"><center>TMV PDFs</center></h3>  	     					   
		     					</div>                                        
	                 	</a>
	                 
	               <!--</div>--> <!-- end item-wrap -->

	             
	        		</div> <!-- end folio-item -->


	        		<div class="brick folio-item">
	               <!--<div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/shutterbug.jpg">	                     
	                     <div class="item-text">
	                     	
		     					   <h3 class="folio-title"><center>Story Books</center></h3>    					   
		     					</div>  
		     		  </a>                                  
	                  
	                 
	               <!--</div>--> <!-- end item-wrap -->
						
						
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	              <!-- <div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/yellowwall.jpg" >	                     
	                     <div class="item-text">
	        				
		     					   <h3 class="folio-title"><center>TMV PDFs</center></h3>  	     					   
		     					</div>                                        
	                 	</a>
	                 
	               <!--</div>--> <!-- end item-wrap -->

	             
	        		</div> <!-- end folio-item -->


					<div class="brick folio-item">
	               <!--<div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/shutterbug.jpg">	                     
	                     <div class="item-text">
	                     	
		     					   <h3 class="folio-title"><center>Story Books</center></h3>    					   
		     					</div>  
		     		  </a>                                  
	                  
	                 
	               <!--</div>--> <!-- end item-wrap -->
						
						
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	              <!-- <div class="item-wrap animate-this"> -->	
	                  <a href="#">
	                  	<img src="images/portfolio/yellowwall.jpg" >	                     
	                     <div class="item-text">
	        				
		     					   <h3 class="folio-title"><center>TMV PDFs</center></h3>  	     					   
		     					</div>                                        
	                 	</a>
	                 
	               <!--</div>--> <!-- end item-wrap -->

	             
	        		</div> <!-- end folio-item -->
  				

   			</div> <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->   	

   </section>  <!-- end portfolio -->


   

	<!-- contact
   ================================================== -->
  <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>CONTACT</h3>
   			<br><br><br>

   			<!--<p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
   		</div> -->
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">

   			<h5>Send Us A Message</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="welcome.php">     			

               <div class="form-field">
 					   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>

               <div class="row">
                 	<div class="col-six tab-full">
                 		<div class="form-field">
                 			<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                 		</div>		      			   
		            </div>
	            	<div class="col-six tab-full">	            
	            		<div class="form-field">
	            			<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	                  </div>		     				   
		            </div>
               </div>
                                         
               <div class="form-field">
	              	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	            </div> 

               <div class="form-field">
                  <button class="submitform" name="submit">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
       			      <div class="s-loader">
							  	<div class="bounce1"></div>
							  	<div class="bounce2"></div>
							  	<div class="bounce3"></div>
							</div>
						</div>
               </div>

      		</form> <!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"><?php echo $error; ?></div> 

            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- end col-seven --> 

         <div class="col-four tab-full contact-info end animate-this">

         	<h5>Contact Information</h5>

         	<div class="cinfo">
	   			<h6>Project Made By</h6>
	   			<p>
	            	ARVIND THEVAR<br>
	            	TIYAS KAR
	            </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Email</h6>
	   			<p>
	   				arvind9981@gmail.com<br>
				   	tiyaskar@gmail.com			     
				   </p>
	   		</div> <!-- end cinfo -->

	   		<!--<div class="cinfo">
	   			<h6>Call Us At</h6>
	   			<p>
	   				Phone: (+63) 555 1212<br>
				   	Mobile: (+63) 555 0100<br>
				     	Fax: (+63) 555 0101
				   </p>
	   		</div> -->

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->



	<!-- footer
   ================================================== -->
	<footer>
     	<div class="footer-main">

   		<!--<div class="row">  

	      	<div class="col-five tab-full footer-about">       

	            <h4 class="h05">Infinity.</h4>

	            <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.</p>	            

		      </div>--> <!-- end footer-about -->

	      	<!--<div class="col-three tab-full footer-social">

	      		<h4 class="h05">Follow Us.</h4>

	      		<ul class="list-links">
	      			<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Behance</a></li>
						<li><a href="#">Dribble</a></li>						
					</ul>

	      	</div>--> <!-- end footer-social -->  

	      	<!--<div class="col-four tab-full footer-subscribe end">

	      		<h4 class="h05">Get Notified.</h4>

	      		<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required=""> -->
	   		
			   			<!-- <input type="submit" name="subscribe" > -->
			   			<!--<button><i class="icon-mail"></i></button>
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>-->
	      	           	
	      	<!--</div>--> <!-- end footer-subscribe -->      	    

	      <!--</div> --><!-- end row -->

   <!--	</div> --><!-- end footer-main -->

   	<div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Infinity Servers 2018.</span> 
		         			         	
		         </div>		               
	      	</div>

      	</div>   	

      </div> <!-- end footer-bottom -->

      <div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#top">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
		</div>		
   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>