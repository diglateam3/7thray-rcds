<?php get_header() ?>
<?php if (!is_home()) {if(function_exists('bcn_display')) { ?>
	<div id="breadcrumb-header">
		<div id="wrapper">
				<?php bcn_display(); ?>
		</div>
	</div>
	<?php } } ?>
<div id="wrapper">
	<div id="content" class="site-content" role="main">
<div id="primary" class="content-area">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				get_template_part( 'content', get_post_format() );
			?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>
	<?php endif; ?>
	<?php get_template_part('navigation'); ?>
</div><!-- #primary -->
<?php get_sidebar() ?>
</div><!-- #content -->
</div>
<?php if (!is_home()) {if(function_exists('bcn_display')) { ?>
		<div id="breadcrumb-footer">
			<div id="wrapper">
				<?php bcn_display(); ?>
			</div>
		</div>
	<?php } } ?>
<?php get_footer() ?>
