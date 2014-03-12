<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<meta name="twitter:widgets:csp" content="on">
</head>
<body <?php body_class(); ?>>
	<header>
	<div id="header">
	<div id="wrapper">
			<h1><a href="<?php echo home_url(); ?>" class="site-logo" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'nav', 'container_class' => 'menu' ) ); ?>
			</nav>
		</div>
		</div>
	</header>