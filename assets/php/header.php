<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Avames Design">


<link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
<link rel="shortcut icon" type="image/png" href="/assets/img/favicon/favicon.ico"/>
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#56b4d2">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#56b4d2">


<title><?php echo $page; ?> | The Best Food Deals in Dublin</title>


<?php the_stylesheets(); ?>


</head>
<body>
<div class="page-loading">
	<div class="loadery"></div>
</div>
<div class="theme-layout">

	<div class="responsive-header">
		
		<div class="logo">
			<a href="/" title="Dublin Yums Home"><img src="/assets/img/logo__white_small.png" alt="" /></a></div>
		
		<span class="open-responsive-btn"><i class="la la-bars"></i><i class="la la-close"></i></span>
		<div class="resp-btn-sec">
			<div class="acount-header-btn">
				<span class="register-btn">Register</span>/
				<span class="login-btn">Login</span>
			</div>
			
			
			<a href="/add-new-offer" title="" class="add-listing-btn"><i class="la la-plus"></i>Add Your Listing</a>
			
			<div class="search-header">
				<span class="open-search"><i class="la la-search"></i><i class="la la-close"></i></span>
				<form>
					<input type="text" placeholder="Search">
				</form>
			</div>
		</div>
		<div class="responsive-menu">
			<span class="close-responsive"><i class="la la-close"></i></span>
			
			<div class="logo">
				<a href="/" title=""><img src="/assets/img/logo__white_small.png" alt="" /></a></div>
			
			<ul>
				
				<li>
					<a href="/" title="Homepage">Home</a></li>
				

				<li>
					<a href="/listings" title="Listings">Listings</a></li>
				

				<li>
					<a href="/contact" title="">Contact Us</a></li>
			</ul
			>
		</div>
	</div><!-- Responsive-header -->
	
	<?php
	$header_class = ($page == 'Dublin Yums') ? 'on-top bg_transparent' : 'on-top';
	?>
	
	<header class="<?php echo $header_class; ?>">
		
		<div class="logo">
			<a href="/" title="Dublin Yums Homepage"><img src="/assets/img/logo__white_small.png" alt="" /></a></div>
		
		<div class="menu-sec">
			<div class="acount-header-btn">
				<span class="register-btn">Register</span>/
				<span class="login-btn">LogIn</span>
			</div>
			
			
			<a href="/add-new-offer" title="" class="add-listing-btn"><i class="la la-plus"></i>Add Your Listing</a>
			
			<div class="search-header">
				<span class="open-search"><i class="la la-search"></i><i class="la la-close"></i></span>
				<form>
					<input type="text" placeholder="Search">
				</form>
			</div>
			<nav class="header-menu">
				<ul>
					
					<li>
						<a href="/" title="Homepage">Home</a></li>
					

					<li>
						<a href="/listings" title="Listings">Listings</a></li>
<!-- 				
	<li class="menu-item-has-children">
						
						
						<a href="/#" title="">My Account</a>
						
						<ul>
							
							<li>
							<a href="/#" title="">My Listings</a></li>
							

							<li>
							<a href="/#" title="">Add Listings</a></li>
							

							<li>
							<a href="/#" title="">Edit Profile</a></li>
						</ul
						>
					</li> -->
					
					<li>
						<a href="/contact" title="">Contact Us</a></li>
				</ul
				>
			</nav>
		</div>
	</header>