<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(); ?></title>

	<link rel="shortcut icon" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/favicon.ico" type="image/x-icon" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<!-- Insert google fonts here -->
</head>

<body <?php body_class(); ?>>
	<section class="top-menu">
		<header>
			<section class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-6 logo-container">
							<div class="search-btn">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<a class="desktop-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="<?php wp_title(); ?>" class="img-responsive logo"></a>				
							<a class="mobile-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/mobile-logo.png" alt="<?php wp_title(); ?>" class="img-responsive mobile-logo"></a>				
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="col-12 col-md-8 col-lg-6 header-contact">
							<span><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/call-answer.png" alt="telefon" class="img-responsive"><?= the_field('fejlec_telefonszam', 'option');?></span>
							<span><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/mail.png" alt="email	" class="img-responsive"><a href="mailto:<?= the_field('fejlec_email');?>"><?= the_field('fejlec_email', 'option');?></a></span>		
						</div>
					</div>
				</div>
			</section>
			<div class="container-fluid top-menu" id="top-menu">
				<div class="container">
					<div class="col-xs-12 header-menu-items">
						<nav class="navbar">
							<div class="collapse   navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<?php
									wp_nav_menu( 
										array( 
											'menu'   => 'fo-menu',
											'container' => '',
											'container_class' => '',
											'items_wrap' => '%3$s'
											) 
										);
										?>
								</ul>
								<div class="facebook">
									<a target="_blank" href="<?= the_field('fejlec_facebook_link', 'option');?>" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
								<div class="search-btn">
									<i class="fa fa-search" aria-hidden="true"></i>
								</div>
							</div>
						</nav>
					</div>
					<div class="desktop-search">
						<?php echo get_sidebar();?>
					</div>
				</div>
			</div>
			<div class="mobile-search">

			</div>
		</header>
	</section>
	<div class="overlay-fixed-header"></div>
