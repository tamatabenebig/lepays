<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="clearfix container">
			<div class="site-branding">
				<?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<?php else : ?>			
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					<<?php echo $heading_tag; ?> class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</<?php echo $heading_tag; ?>>
					<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				<?php endif; ?>
			<!-- .site-branding --></div>

			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<?php endif; ?>

			<nav id="main-navigation" class="main-navigation" role="navigation">
				<a href="#main-navigation" class="nav-open">Menu</a>
				<a href="#" class="nav-close">Close</a>
				<?php wp_nav_menu( array( 'container_class' => 'clearfix sf-menu', 'theme_location' => 'main' ) ); ?>
			<!-- #main-navigation --></nav>
		</div>
	<!-- #masthead --></header>

	<div id="main" class="site-main">
		<div class="clearfix container">
