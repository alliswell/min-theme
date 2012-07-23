<?php load_theme_textdomain('min'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<title><?php if (is_home()) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } elseif (is_single() || is_page() || is_archive()) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } elseif  (is_404()) { ?><?php _e('The page you are looking for doesn\'t exist. Sorry.','min'); ?> - <?php bloginfo('name'); ?><?php } elseif (is_search()) { ?><?php _e('You searched for the following','min'); ?>: "<?php echo wp_specialchars($s); ?>" - <?php bloginfo('name'); ?><?php } ?></title>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?> <?php _e('RSS Feed','min'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name'); ?> <?php _e('Comments RSS Feed','min'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/custom.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
	</div><!-- close:header -->