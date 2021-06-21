<?php
if ( post_password_required() )
	return;
?>

	<div id="comments" class="comments-area">



	<?php if ( have_comments() ) : ?>
		<h3 class="widget-title">
			<span>
			<?php
				printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'lepays' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
			</span>
		</h3>

		<ol class="comment-list">
			<?php
				wp_list_comments( array( 'callback' => 'athemes_comment', 'avatar_size' => 50 ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'lepays' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'lepays' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'lepays' ); ?></p>
	<?php endif; ?>

	<?php comment_form( array( 'comment_notes_after' => '' ) ); ?>

</div><!-- #comments -->
