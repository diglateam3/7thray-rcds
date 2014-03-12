<div id="secondary" class="widget-area" role="complementary">
	<ul>
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h1 class="widget-title"><?php _e( 'Archives', 'kappat3ch' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h1 class="widget-title"><?php _e( 'Meta', 'kappat3ch' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>
	<?php endif; ?>
	<li id="rss-links" class="widget widget-rss-links">
		<h2 class="widget-title">RSS</h2>
			<ul>
				<li>
					<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e( 'Subscribe site update information', 'seventhray-records' ); ?>">RSS</a>
				</li>
			</ul>
	</li>
	</ul>
</div>