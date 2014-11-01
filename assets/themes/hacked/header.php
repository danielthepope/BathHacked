<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link href="/css/app.css" rel='stylesheet' type='text/css'>
	<title><?php wp_title(); ?></title>
	<?php if (environment !== 'live'): ?>
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<meta name="robots" content="noarchive" />
	<?php endif; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main">
	<div class="header">
		<div class="header__container">
			<div class="title">
				<h3 class="header__title">
					<?php bloginfo('name'); ?>
				</h3>
			</div><!--#title-->
			<div id="nav-primary" class="nav"><nav>
				<?php if ( is_user_logged_in() ) {
				     wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) ); /* if the visitor is logged in, this primary navigation will be displayed */
				} else {
				     wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /* if the visitor is NOT logged in, this primary navigation will be displayed. if a single menu should be displayed for both conditions, set the same menues to be displayed under both conditions through the Wordpress backend */
				} ?>
			</nav></div><!--#nav-primary-->
		</div><!--.container-->
	</div><!--#header-->
	<div class="container">