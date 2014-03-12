<article>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-title">
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'seventhray-records' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_title(); ?></a></h2>
		</div>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?><a> - <?php the_category(' / '); ?>
				<?php the_tags('<i class="icon-tag"></i>' ); ?>
				<?php edit_post_link(); ?>
		</div>
		<?php endif; ?>
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'seventhray-records' ) ); ?>
		</div><!-- .entry-content -->
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'seventhray-records' ), 'after' => '</div>' ) ); ?>
		<?php endif; ?>
	</div>
</article>
