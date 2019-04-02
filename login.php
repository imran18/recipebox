<?php

session_start();
if(!empty($_SESSION['email']))
{
	
	  
	  echo '<script> window.location.href = "index.php";</script>';
}
		?>


<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Login Page</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-1.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="assets/app/media/img/logos/logo-1.png">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Recipe-Box-master</h3>
							</div>
							<form id="login" action="getlogin.php" method="post" class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="username" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
								
								</div>
								<div class="m-login__form-action">
									<button id="login" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Sign In</button>
								</div>
								<br>

								<?php
								if(isset($_GET['status']))
								{
										if($_GET['status']==0)
										{
										
											echo '<div id="loginfail" class="alert alert-danger" role="alert">
												Login Failed! Wrong Username or password
												</div>';
										}
								}

								?>

									<?php
								if(isset($_GET['status']))
								{
										if($_GET['status']==1)
										{
										
											echo '<div class="alert alert-success" role="alert">
												You are registered please login
												</div>';
										}
								}

								?>



								
								</div>

							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign Up</h3>
								<div class="m-login__desc">Enter your details to create your account:</div>
							</div>
							<form method="post" action="register.php"  id="register" class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="rname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="remail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="rpassword" name="rpassword">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="rpassword" placeholder="Confirm Password" name="rpassword">
								</div>
								
								<div class="m-login__form-action">
									<button id="register" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign Up</button>&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
						
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin::Global Theme Bundle -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>


<script type="text/javascript">
	
$( "#login" ).submit(function( event ) {
  	
  }

$( "#register" ).submit(function( event ) {
  	
  }

</script>

<!-- 
<script type="text/javascript">
	
  $('#loginsucess').hide();
    $('#loginfail').hide();


			 $('#login').click(function(e){
			 	 $('#loginsucess').hide();
			 	  $('#loginfail').hide();
			        e.preventDefault();       
			        var username = $('#username').val();
			        var password = $('#password').val();
			        var repassword = $('#rpassword').val();
			        //var captcha = grecaptcha.getResponse();
			      
			        //$('#errorMessage').show();
			        
			  $.ajax({

			          method: "POST",
			          url: "login.php", 
			          data: {username:username,password:password},
			          success: function(data){
			           
			      

			                    $('#loginfail').show();
			                    $('#loginfail').html('Falied');
			                 
			                 
			                 
			                
			          }
			      });
			        
			    });


				
			 $('#register').click(function(e){
			        e.preventDefault();       
			        var username = $('#username').val();
			        var password = $('#password').val();
			        var confirmPassword = $('#confirmPassword').val();
			        var domain = $(".domain").html();
			        //var captcha = grecaptcha.getResponse();
			      
			        //$('#errorMessage').show();
			        
			  $.ajax({

			          method: "POST",
			          url: "addEmail.php", 
			          data: {username:username,password:password,domain:domain},
			          success: function(data){
			           
			      
			                    $('#errorMessage').show();
			                    $('#errorMessage').html(data);
			                 
			            
			                      $('#succcessMessage').show();
			                         $('#succcessMessage').html("Account Created Successfully!");
			                    $('#errorMessage').hide();
			                    window.location = "https://haitimail.com/";
			                 
			                 
			                 
			                
			          }
			      });
			        
			    });

</script>
 -->