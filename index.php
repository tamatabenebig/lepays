<?php
get_header(); ?>

			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php athemes_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				<!-- #content --></div>
			<!-- #primary --></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>