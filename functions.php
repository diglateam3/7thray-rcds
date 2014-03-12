<?php
/**
 * theme function
 *
 * @package Seventhray Records
 */
	load_theme_textdomain('seventhray-records');
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'status' ) );
	add_theme_support( 'custom-header', array( 'header-text' => false, 
		'default-image' => '%s/img/info_not_found.jpg', 
		'width' => '1024', 
		'height' => '250'
		));
	add_filter( 'use_default_gallery_style', '__return_false' );
	add_filter( 'the_content_more_link', 'remove_more_link_hash' );
	add_action( 'wp_head', 'loadlibrary', 1);
	if ( ! isset( $content_width ) ) $content_width = 768;
	register_nav_menus( array( 'nav' => 'Navigation' ) );
	register_sidebar();
	register_sidebar();
	register_sidebar();
	register_sidebar();
	function loadlibrary() {
		/* wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'unslider', get_template_directory_uri() . '/js/unslider.min.js' ); */
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	}
	add_action('wp_head', 'add_tw_card_support');
	add_action('wp_head', 'add_meta_tags');
	add_action('wp_head', 'add_favicon');
	
	/* Remove "Read more" hash link. */
	function remove_more_link_hash($link) {
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"', $offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	
	function add_favicon() {
		echo '<link rel="shortcut icon" type="image/x-icon" href="'. get_bloginfo('template_url'). '/favicon.ico" />'."\n";
	}
	function add_tw_card_support() {
		echo '<meta name="twitter:creator" content="@9appat3ch">'. "\n"
			. '<meta name="twitter:card" content="summary">'. "\n";
	}
	function add_meta_tags() {
		global $wp_query;
		$post = $wp_query->get_queried_object();
		echo '<meta name="keywords" content="9APPAT3CH,かっぱてっく,Seventhray Records,せぶれこ" />'."\n";
		if ( is_home() ) :
			echo '<meta name="description"  content="'. __( '9APPAT3CH\'s personal website. I\'m publishing digital works.' , 'seventhray-records') . '">'."\n";
		else:
			$metaExcerpt = $post->post_excerpt;
			if ($metaExcerpt) {
				echo '<meta name="description"  content="'. $post->post_excerpt . '">'."\n";
			} else {
				$metadescription = mb_substr( strip_tags($post->post_content), 0, 200 );
				$metadescription = str_replace(array("\r\n","\r","\n"), ' ', $metadescription);
				echo '<meta name="description" content="' . $metadescription . '">'."\n";
			}
		endif;
	}
?>
