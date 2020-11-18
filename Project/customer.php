<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.0/lib/darkmode-js.min.js"></script>
<script src="js/script.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Email Address" type="text" required="">						
													<input name="Password" placeholder="Password" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.php">Mobile Phones</a></li>
											<li><a href="products.php">Mp3 Players <span>New</span></a></li> 
											<li><a href="products.php">Popular Models</a></li>
											<li><a href="products.php">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.php">Laptop</a></li>
											<li><a href="products1.php">Desktop</a></li>
											<li><a href="products1.php">Wearables <span>New</span></a></li>
											<li><a href="products1.php"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.php">Tv</a></li>
											<li><a href="products2.php">Camera</a></li>
											<li><a href="products2.php">AC</a></li>
											<li><a href="products2.php">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php" >About Us</a></li> 

                        <li><a href="mail.php">Mail Us</a></li>
                        <li><a href="customer.php" class="act">Customer Services</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Customer Services</h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Customer Service</li>
			</ul>
		</div>
    </div>
    
<div class="a-section a-spacing-extra-large a-spacing-top-extra-large ss-landing-container">
    <h1>
        Hello. What can we help you with?
    </h1>
 </div>

       
        
    
    
    
    




















      
    
    <hr class="a-spacing-none a-divider-normal">
    <div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

    <div class="a-section a-spacing-base ss-landing-container-wide">
        <h2 class="a-spacing-none a-text-normal">
            
        </h2>
    </div>

    <div class="a-row">
        <div class="a-column a-span12">
            <div class="a-section a-spacing-large ss-landing-container-wide">


                        <div class="a-row a-spacing-large a-spacing-top-micro ss-rich-card-row">

                    <div class="a-column a-span4 ss-rich-card-column">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/gp/css/order-history?ie=UTF8&amp;ref_=hp_ss_v3_yo_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Your Orders" src="https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/gateway/Box-t3._CB313381664_.png" class="ss-v2-box-image">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Your Orders
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
Track packages                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Edit or cancel orders                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->


        
                    <div class="a-column a-span4 ss-rich-card-column">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/gp/css/order-history?ie=UTF8&amp;ref_=hp_ss_v3_rr_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Returns &amp; Refunds" src="https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/gateway/returns-box-blue._CB292186245_.png" class="ss-v2-box-image">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Returns &amp; Refunds
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
Return or replace items                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Print return mailing labels                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->


        
                    <div class="a-column a-span4 ss-rich-card-column a-span-last">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/gp/css/account/address/view.php?ie=UTF8&amp;ref_=hp_ss_v3_ma_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Manage Addresses" src="https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/gateway/manage-address._CB292186245_.png" class="ss-v2-box-image">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Manage Addresses
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
Update your addresses                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Add or edit address details                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->

                </div><!-- end row -->

                        <div class="a-row a-spacing-large a-spacing-top-micro ss-rich-card-row">

                    <div class="a-column a-span4 ss-rich-card-column">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/gp/primecentral?ie=UTF8&amp;ref_=hp_ss_v3_mp_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Manage Prime" src="images/t7.png">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Manage Prime
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
View your benefits                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Membership details                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->


        
                    <div class="a-column a-span4 ss-rich-card-column">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/cpe/managepaymentmethods?_encoding=UTF8&amp;ref_=hp_ss_v3_ps_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Payment Settings" src="https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/gateway/Payments_clear-bg-t3._CB522180039_.png" class="ss-v2-box-image">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Payment Settings
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
Add or edit payment methods                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Edit expired debit, credit card                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->


        
                    <div class="a-column a-span4 ss-rich-card-column a-span-last">

                         
    

    <a class="a-link-normal a-text-normal a-color-base" href="/ap/cnep?_encoding=UTF8&amp;openid.assoc_handle=inflex&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.mode=checkid_setup&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&amp;openid.pape.max_auth_age=0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.in%2Fgp%2Fcss%2Fhomepage.php%3Fie%3DUTF8%26ref_%3Dya_cnep&amp;ref_=hp_ss_v3_as_t4">
        <div class="a-box self-service-rich-card"><div class="a-box-inner">
            <div class="a-row a-grid-vertical-align a-grid-top">

                <div class="a-column a-span3">
                    <img alt="Account Settings" src="https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/gateway/IN-your-account._CB292186245_.png" class="ss-v2-box-image">
                </div><!-- end column -->
                <div class="a-column a-span9 a-span-last">

                    <h3 class="a-spacing-none a-text-normal">
                        Account Settings
                    </h3>

                    <ul class="a-unordered-list a-nostyle a-vertical">
                        <li><span class="a-list-item a-color-secondary">
Change your email, password                        </span></li>
                        <li><span class="a-list-item a-color-secondary">
Update login information                        </span></li>
                    </ul><!-- end list -->
                </div><!-- end column -->

            </div><!-- end row -->
        </div></div><!-- end box -->
    </a><!-- end link -->


                    </div><!-- end column -->

                </div><!-- end row -->
            </div><!-- end section -->

    <hr class="a-spacing-extra-large a-spacing-top-large a-divider-normal ss-landing-container-wide">
    
    




    <div class="a-section a-spacing-extra-large a-spacing-top-extra-large ss-landing-container-wide">
        <label for="helpsearch" class="a-form-label">
            <p class="a-spacing-mini a-text-left a-size-medium a-text-bold">
                Find more solutions
            </p>
        </label>

    
    




    









            <!-- Change small to large for section spacing as the former has bottom margin overlap with its bottom element in mobile browser. -->
        <div id="csg-search-cu" class="a-section a-spacing-large">
        <div class="a-row">
	    <form id="search-help" name="search-help" method="get" action="/gp/help/customer/display.php/ref=hp_search_rd_gw?ie=UTF8&amp;nodeId=">
	        <input type="hidden" name="__mk_en_IN" value="ÅMÅŽÕÑ">
	        <div class="a-column a-span10">
	            <div class="a-row">
	                <div class="a-search a-span12"><i class="a-icon a-icon-search"></i><input type="search" maxlength="100" id="helpsearch" autocomplete="off" placeholder="" name="help_keywords" class="a-input-text a-span12"></div>
	                </div>
	                <div class="a-row">
	                    <div id="help_srch_sggst" class="a-section a-text-left a-span12 a-box" style="display: none;">
	                    </div>
	                </div>
	            </div>
	            <div class="a-column a-span2 a-span-last">
	                <span id="helpSearchSubmit" class="a-button a-button-span12 a-button-base a-button-dark"><span class="a-button-inner"><input class="a-button-input" type="submit" aria-labelledby="helpSearchSubmit-announce"><span id="helpSearchSubmit-announce" class="a-button-text" aria-hidden="true">Go
	                </span></span></span>
	            </div>
	            <input type="hidden" name="search" value="true">
	            <input type="hidden" name="nodeId" value="508510">
	            <input type="hidden" name="kwHidden" value="true" id="searchPlaceholder">
                    <input type="hidden" name="sprefix" id="searchAutocomplete">
                    <input type="hidden" name="locale" value="en_IN">
	        </form>
	    </div>
	</div>




	<div class="team-bottom">
		<div class="container">
			<h3>Are You Ready For Deals? Flat <span>30% Offer </span>on Mobiles</h3>
			<p>Sale! Sale! Sale! get YOUR mobile phone for the lowest price ever.</p>
			<a href="products.php">Shop Now</a>
		</div>
	</div>
	<!-- //team-bottom -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Get Subscribed to get EXCITING OFFERS.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>St.John College Of Engineering <br>And Management,Palghar.</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="gmail.com">Electronik@store.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+919123456789</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="mail.php">Contact Us</a></li>
						<li><a href="codes.php">Short Codes</a></li>
						<li><a href="faq.php">FAQ's</a></li>
						<li><a href="products.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.php">Mobiles</a></li>
						<li><a href="products1.php">Laptops</a></li>
						<li><a href="products.php">Purifiers</a></li>
						<li><a href="products1.php">Wearables</a></li>
						<li><a href="products2.php">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2019 ElectroniK Store. All rights reserved | Design by LEON & CO.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>