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


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php get_template_part('navigation'); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>
		
		</div><!-- #content -->
		<?php get_sidebar() ?>
	</div><!-- #primary -->
</div>

<?php get_footer() ?>
