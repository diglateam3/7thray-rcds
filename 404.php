<?php get_header() ?>
<?php if (!is_home()) {if(function_exists('bcn_display')) { ?>
	<div id="breadcrumb-header">
		<div id="wrapper">
				<?php bcn_display(); ?>
		</div>
	</div>
	<?php } } ?>
<article>
<div id="wrapper">
	<div id="content" class="site-content" role="main">
		<div id="post-0" class="post error404 not-found">
			<div class="entry-title"><h2><?php _e( '404 Page not found', 'seventhray-records' ); ?></h2></div>
			<div class="entry-content">
				Page not found.
				<?php get_search_form(); ?>
			
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						<div class="widget">
							<h2 class="widgettitle"><?php _e( 'Post categories', 'kappat3ch' ); ?></h2>
							<ul>
							<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
							</ul>
						</div><!-- .widget -->
		</div>
		</div>
	</div>
</article>
<?php if (!is_home()) {if(function_exists('bcn_display')) { ?>
	<div id="breadcrumb-footer">
		<div id="wrapper">
				<?php bcn_display(); ?>
		</div>
	</div>
	<?php } } ?>
<?php get_footer() ?>
