<?php
/**
 * The template for displaying search forms in 9PTH_BASE_THEME
 *
 * @package 9PTH_BASE_THEME
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _e( 'Search', 'seventhray-records' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo _e( 'Type keyword ...', 'seventhray-records' ); ?>" />
		<input type="submit" class="submit" id="searchsubmit" value="<?php echo _e( 'Search', 'seventhray-records' ); ?>" />
	</form>