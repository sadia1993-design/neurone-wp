<!DOCTYPE html>
<html <?php  language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Neuron Finance is a finance, corporate and business HTML template">
	<meta name="keywords" content="advisor, corporate accountant, finance, financial, insurance, investment, consultation">
	<meta name="author" content="trendytheme.net">


	<!--  favicon -->
	<link rel="shortcut icon" href="assets/img/ico/favicon.png">
	<!--  apple-touch-icon -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">


	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
<header>
	<!-- start top bar -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 hidden-xs">
					<div class="contact">
						<p>
							<i class="fa fa-phone"></i>
							+880 123 456 789
						</p>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="#">24hrsuport@domain.com</a>
						</p>
					</div><!-- /.contact -->
				</div><!-- /.col-sm-8 -->

				<div class="col-sm-4">
					<div class="social-icon">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						</ul>
					</div><!-- /.social-icon -->
				</div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- end top bar -->

	<!-- Start Navigation -->
	<nav class="navbar navbar-default navbar-sticky bootsnav">
		<!-- Start Top Search -->
		<div class="top-search">
			<div class="container">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				</div>
			</div>
		</div>
		<!-- End Top Search -->

		<div class="container">
			<!-- Start Atribute Navigation -->
			<div class="attr-nav">
				<ul>
					<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							<i class="fa fa-shopping-bag"></i>
							<span class="badge">2</span>
						</a>
						<ul class="dropdown-menu cart-list">
							<li>
								<a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
								<h2><a href="#">Denim SlimFit Shirt </a></h2>
								<p>2x - <span class="price">$19.99</span></p>
							</li>
							<li>
								<a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
								<h2><a href="#">Denim Polo Shirt</a></h2>
								<p>2x - <span class="price">$12.99</span></p>
							</li>
							<li class="total">
								<span class="pull-right"><strong>Total</strong>: $320.00</span>
								<a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- End Atribute Navigation -->

			<!-- Start Header Navigation -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
			</div>
			<!-- End Header Navigation -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-menu">

				<?php
                    wp_nav_menu(
                        array(
                            'theme_location'    => 'Header-Menu',
                            'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
                            'menu_class'        => 'nav navbar-nav navbar-right dropdown-toggle',
                            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                            'walker'			=> new WP_Bootstrap_Navwalker()
                        )
                    );
				?>

			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- End Navigation -->
	<div class="clearfix"></div>
</header> <!-- end header -->
