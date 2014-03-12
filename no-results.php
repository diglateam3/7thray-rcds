<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 9PTH_BASE_THEME
 */
?>

<div id="post-0" class="post no-results not-found">
	<div class="entry-title"><h2><?php _e( 'Nothing Found', 'seventhray-records' ); ?></h2></div>

	<div class="entry-content">
		<?php if ( is_search() ) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'seventhray-records' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'seventhray-records' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</div><!-- #post-0 .post .no-results .not-found -->
