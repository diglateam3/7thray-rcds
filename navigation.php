<?php if (!is_page()): if(!is_single()) :?>
<div id="navigation">
<?php previous_posts_link('<') ?>
<?php $max = $wp_query->max_num_pages;
$current = $paged; if(!$current) {$current = 1;} ?>
<?php $side = 3; $show = $side * 2 + 1;
if ($current > $side && $current < $max - $side+1) {
$start = $current - $side;
$end = $current + $side;
} elseif($current <= $side) {
$start = 1;
$end = min($show,$max);
} else {
$start = max($max - $show + 1, 1);
$end = $max;
} ?>
<?php for($i=$start; $i <= $end; $i++) : ?>
<?php if ($i == $current ) :?>
<span><?php echo $i ?></span>
<?php else: ?>
<a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i ?></a>
<?php endif; ?>
<?php endfor; ?>
<?php next_posts_link('>') ?>
</div>
<?php else: ?>
<div id="navigation">
<?php previous_post_link( '%link','< %title' ); ?>
<?php next_post_link( '%link','%title >' ); ?>
</div>
<?php endif; ?>
<?php endif; ?>
