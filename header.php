<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">		
		<title>
			<?php 
				if (is_home()) { 
					echo 'Welcome '.get_bloginfo('name');
				} elseif (is_404()) {
					echo '404 Not Found on '.get_bloginfo('name');
				} elseif (is_category() || is_page() || is_single() ) {
					echo wp_title(' | ',true,'right').get_bloginfo('name');
				} elseif (is_search()) {
					echo 'Search for &ldquo;'.get_search_query().'&rdquo; | '.get_bloginfo('name');
				} elseif ( is_day() || is_month() || is_year() ) {
					echo get_bloginfo('name');
				} elseif ( is_page()) {
					echo wp_title(' | ',true,'right').get_bloginfo('name');
				} else {
					echo get_bloginfo('name');
				}
			?>
		</title>
	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	    <link rel="icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<!--[if IE]>		
		<link rel="STYLESHEET" type="text/css" href="http://taxaccounts.co.uk/wp-content/themes/taxaccounts/style/css/ie.css">
		<![endif]-->	
		<!--[if IE 6]>
		<link rel="STYLESHEET" type="text/css" href="http://taxaccounts.co.uk/wp-content/themes/taxaccounts/style/css/ie6.css" />
		<![endif]-->	
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php //bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="header_outer">
			<div id="header_inner">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<?php wp_nav_menu( array('menu' => 'Top Navigation','container' => false,'menu_id' => "main_navigation")); ?>
			</div>
		</div>
		<div id="content_outer">
			<div id="content_inner">
