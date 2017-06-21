<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title><?=$page_title?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/select2.css" rel="stylesheet" />
	<link href="assets/css/select2-bootstrap.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/itworks.css" rel="stylesheet" />
</head>
<body class="index-page">
	<!-- Navbar -->
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="http://www.iknowitworks.org">
					<div class="logo-container">
						<div class="brand">
							<img src="assets/img/logo-small.png" alt="Palawan Ads Logo" rel="tooltip" title="Palawan Ads" data-placement="bottom" data-html="true">
						</div>
					</div>
				</a>
			</div>
	
			<div class="collapse navbar-collapse" id="navigation-index">
				<ul class="nav navbar-nav navbar-right" data-tabs="tabs">
					<li>
						<a href="#login" data-toggle="modal" data-target="#loginModal">
							<i class="material-icons">lock_outline</i> Login
						</a>
					</li>
					<li>
						<a href="#signup" data-toggle="modal" data-target="#signupModal">
							<i class="material-icons">create</i> Sign Up
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	
	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/elnido.jpg');">
			<div class="section-thick" id="carousel">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
	
							<!-- Carousel Card -->
							<div class="card card-raised card-carousel">
								<div id="carousel-slider" class="carousel slide" data-ride="carousel">
									<div class="carousel slide" data-ride="carousel">
	
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-slider" data-slide-to="1"></li>
											<li data-target="#carousel-slider" data-slide-to="2"></li>
											<li data-target="#carousel-slider" data-slide-to="3"></li>
											<li data-target="#carousel-slider" data-slide-to="4"></li>
											<li data-target="#carousel-slider" data-slide-to="5"></li>
										</ol>
	
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="assets/img/underground.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Underground River, Puerto Prinseca City, Palawan</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/el-nido.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> El Nido, Palawan</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/busuanga.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Busuanga, Coron, Palawan</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/honda-bay.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Honda Bay, Puerto Princesa City, Palawan</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/crocs.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Crocodile Farm, Puerto Princesa City, Palawan</h4>
												</div>
											</div>
											<div class="item">
												<img src="assets/img/mitras-ranch.jpg" alt="Awesome Image">
												<div class="carousel-caption">
													<h4><i class="material-icons">location_on</i> Mitra's Ranch, Puerto Princesa City, Palawan</h4>
												</div>
											</div>
										</div>
	
										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-slider" data-slide="prev">
											<i class="material-icons">keyboard_arrow_left</i>
										</a>
										<a class="right carousel-control" href="#carousel-slider" data-slide="next">
											<i class="material-icons">keyboard_arrow_right</i>
										</a>
									</div>
								</div>
							</div>
							<!-- End Carousel Card -->
	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main main-raised">
			<div class="section section-basic">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-search"></i>
								</span>
								<input type="text" class="form-control" placeholder="Search for products, brands, etc.">
							</div>
						</div>
						<div class="col-sm-2">
							<select class="form-control select2">
								<option value="ALL" selected>All Categories</option>
								<option value="0">Car</option>
							</select>
						</div>
						<div class="col-sm-2">
							<select class="form-control select2">
								<option value="ALL" selected>All Posted</option>
								<option value="1">Buying</option>
								<option value="2">Selling</option>
								<option value="3">Looking for Service</option>
								<option value="4">Service Provider</option>
							</select>
						</div>
						<div class="col-sm-2">
							<button class="btn btn-primary" style="margin: 20px 0;">
								<i class="material-icons">search</i> Search
							</button>
						</div>
					</div>
			
					<div id="body">
						<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
			
						<p>If you would like to edit this page you'll find it located at:</p>
						<code>application/views/welcome_message.php</code>
			
						<p>The corresponding controller for this page is found at:</p>
						<code>application/controllers/Welcome.php</code>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			
						<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <footer class="footer">
	    <div class="container">
	        <div class="copyright pull-left">
	            &copy; <?=date("Y")?>, made with <i class="material-icons text-danger">favorite</i> by I Know IT Works.
	        </div>
			<div class="copyright pull-right">
				<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
			</div>
	    </div>
	</footer>
	
	<!-- Start Sign-up Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="material-icons">clear</i>
					</button>
					<h4 class="modal-title"><strong>Welcome to Palawan Ads Registration.</strong></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<form role="form" id="login_form" class="form-horizontal">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating is-empty">
											<label for="user_name" class="control-label">Username</label>
											<input id="user_name" name="user_name" type="text" value="" class="form-control">
										</div>
									</div>  
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating is-empty">
											<label for="email" class="control-label">Email</label>
											<input id="email" name="email" type="email" value="" class="form-control">
										</div>
									</div>  
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating is-empty">
											<label for="password" class="control-label">Password</label>
											<input id="password" name="password" type="password" value="" class="form-control">
											<span class="form-control-feedback">
												<i class="material-icons"></i>
											</span>
										</div>
									</div>  
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating is-empty">
											<label for="password_two" class="control-label">Password (Confirm)</label>
											<input id="password_two" name="password_two" type="password" value="" class="form-control">
											<span class="form-control-feedback">
												<i class="material-icons"></i>
											</span>
										</div>
									</div>  
								</div>
								<div class="row">
									<button type="button" class="btn btn-warning pull-right">Register</button>
								</div>
							</form>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="row">
								<strong>Sign in quickly:</strong>
							</div>
							<br />
							<div class="row text-center">
								<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
								</fb:login-button>
								
								<div id="status">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<!--  End Sign-up Modal -->
	
	<script>
		// This is called with the results from from FB.getLoginStatus().
		function statusChangeCallback(response) {
			console.log('statusChangeCallback');
			console.log(response);
			// The response object is returned with a status field that lets the
			// app know the current login status of the person.
			// Full docs on the response object can be found in the documentation
			// for FB.getLoginStatus().
			if (response.status === 'connected') {
				// Logged into your app and Facebook.
				testAPI();
			} else if (response.status === 'not_authorized') {
				// The person is logged into Facebook, but not your app.
				document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
			} else {
				// The person is not logged into Facebook, so we're not sure if
				// they are logged into this app or not.
				document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
			}
		}
	  
		// This function is called when someone finishes with the Login
		// Button.  See the onlogin handler attached to it in the sample
		// code below.
		function checkLoginState() {
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
		}
	  
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '250792765372624',
				cookie     : true,  // enable cookies to allow the server to access 
									// the session
				xfbml      : true,  // parse social plugins on this page
				version    : 'v2.8' // use graph api version 2.8
			});
		  
			// Now that we've initialized the JavaScript SDK, we call 
			// FB.getLoginStatus().  This function gets the state of the
			// person visiting this page and can return one of three states to
			// the callback you provide.  They can be:
			//
			// 1. Logged into your app ('connected')
			// 2. Logged into Facebook, but not your app ('not_authorized')
			// 3. Not logged into Facebook and can't tell if they are logged into
			//    your app or not.
			//
			// These three cases are handled in the callback function.
		  
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
		};
	  
		// Load the SDK asynchronously
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	  
		// Here we run a very simple test of the Graph API after login is
		// successful.  See statusChangeCallback() for when this call is made.
		function testAPI() {
			console.log('Welcome!  Fetching your information.... ');
			FB.api('/me', function(response) {
				console.log('Successful login for: ' + response.name);
				document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
			});
		}
	</script>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
	
	<script src="assets/js/select2.js" type="text/javascript"></script>

	<script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			//materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}
			
			$('.select2').select2({
				theme: 'bootstrap'
			});
		});
	</script>
</html>
