<?php
	
	if (   ! is_active_sidebar( 'sidebar-3' )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5' )
		&& ! is_active_sidebar( 'sidebar-6' )
	)
	return;
	
?>

<div id="extra" <?php athemes_footer_sidebar_class(); ?>>
	<div class="container">
	<div class="clearfix pad">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div id="widget-area-3" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		<!-- #widget-area-3 --></div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div id="widget-area-4" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		<!-- #widget-area-4 --></div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
		<div id="widget-area-5" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		<!-- #widget-area-5 --></div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
		<div id="widget-area-6" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-6' ); ?>
		<!-- #widget-area-6 --></div>
	<?php endif; ?>
	</div>
	</div>
<!-- #extra --></div>