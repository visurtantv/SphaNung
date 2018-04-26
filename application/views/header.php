<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <!-- Basic need -->
  <title>Spha Nung</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="profile" href="#">

  <!--Google Font-->
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
  <!-- Mobile specific meta -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone-no">

  <!-- CSS files -->
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!-- preloading -->
<div id="preloader">
	<img class="logo" src="../assets/images/logo1.png" alt="" width="119" height="58">
	<div id="status">
		<span></span>
		<span></span>
	</div>
</div><!--end of preloading-->

<!--login form popup-->
<div class="login-wrapper" id="login-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>Login</h3>
		<form method="post" action="LoginController">
			<div class="row">
				<label for=""> Username:
					<input type="text" name="username-l" id="username-l" required="required" />
				</label>
			</div>
			<div class="row">
				<label for=""> Password:
					<input type="password" name="password-l" id="password-l" required="required" />
				</label>
			</div>
			<div class="row">
				<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me">
						<span>Remember me</span>
					</div>
					<a href="#">Forget password ?</a>
				</div>
			</div>
			<div class="row">
				<button type="submit">Login</button>
			</div>
		</form>
		<div class="row">
			<p>Or via social</p>
			<div class="social-btn-2">
				<a class="fb" href="#">
					<i class="ion-social-facebook"></i>Facebook</a>
				<a class="tw" href="#">
					<i class="ion-social-twitter"></i>twitter</a>
			</div>
		</div>
	</div>
</div> <!--end of login form popup-->

<!--signup form popup-->
<div class="login-wrapper" id="signup-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>sign up</h3>
		<form method="post" action="SignUpController" enctype="multipart/form-data">
			<div class="row">
				<label for=""> Username:
					<input type="text" name="username" id="username"/>
				</label>
			</div>
			<div class="row">
				<label for=""> Password:
					<input type="password" name="password" id="password" placeholder=""/>
				</label>
			</div>
			<div class="row">
				<label for=""> Display Name:
					<input type="text" name="name" id="name" placeholder=""/>
				</label>
			</div>
			<div class="row">
				<label for="">
					Picture:
					<input type="file" name="picture" id="picture" accept="image/*" required="required"/>
				</label>
			</div>
			<div class="row">
				<button type="submit">sign up</button>
			</div>
		</form>
	</div>
</div> <!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header full-width-hd">
	<div class="row">
		<nav id="mainNav" class="navbar navbar-default navbar-custom">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header logo">
				<div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<div id="nav-icon1">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<a href="<?php echo site_url('HomeController') ?>">
					<img class="logo" src="../assets/images/logo1.png" alt="" width="119" height="58">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav flex-child-menu menu-left">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li class="dropdown first">
						<a href="<?php echo site_url('HomeController') ?>" class="btn btn-default lv1">
							Home
						</a>
					</li>
					<li class="dropdown first">
						<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Movies
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</a>
						<ul class="dropdown-menu level1">
							<li>
								<a href="<?php echo site_url('MovieListController') ?>">all movies</a>
							</li>
						</ul>
					</li>
				</ul> 	

				<!-- top search form -->
				<div class="top-search">
					<form action="SearchController" method="get">
						<input type="text" name="search" placeholder="Search Me"/>
					</form> 
				</div>

				<?php if (!isset($_SESSION['userinfo'])) : ?>
				<ul class="nav navbar-nav flex-child-menu menu-right">
					<li class="loginLink">
						<a href="#">LOG In</a>
					</li>
					<li class="btn signupLink">
						<a href="#">sign up</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<?php else : ?>
			<ul class="nav navbar-nav flex-child-menu menu-right">
				<li class="">
					<?php echo '<a href="#">' . $_SESSION['userinfo']['name'] . ' </a>' ?>
				</li>
				<li class="btn">
					<a href="LogOutController" class="redbtn">Log out</a>
				</li>
			</ul>
			<?php endif; ?>
		</nav>
	</div>
</header>
<!-- END | Header -->