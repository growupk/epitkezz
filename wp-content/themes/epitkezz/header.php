<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(); ?></title>

	<link rel="shortcut icon" href="<?php echo get_bloginfo('stylesheet_directory');?>/favicon.ico" type="image/x-icon" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<!-- Insert google fonts here -->
</head>

<body <?php body_class(); ?>>
	<section class="top-menu">
		<header>
			<div class="container">
				<div class="row">
					<section class="header-top">
						<div class="container-fluid">	
							<div class="row">
								<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="<?php wp_title(); ?>" class="img-responsive logo"></a>				
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="container-fluid top-menu">
				<div class="container">
					<div class="row">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="col-xs-12 header-menu-items">
						<nav class="navbar">
							<div class="navbar-header">
							</div>
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
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</section>
