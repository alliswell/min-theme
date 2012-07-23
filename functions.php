<?php 

function feedlove($content) {
$content = $content . '<p class="extra"><a href="http://lessmade.com/themes/min" title="min theme" >A minimal wordpress theme by Jared Erickson</a></p>';
return $content;
}
add_filter('the_excerpt_rss', 'feedlove');
add_filter('the_content_rss', 'feedlove');

/* ADD WIDGETS IN THE FOOTER */

		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket left',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket right',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
	
?>