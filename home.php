<?php get_header() ?>
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
</div>
</div><!-- #content -->
<?php get_footer() ?>

