<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php bloginfo('template_directory'); ?>/css/app.css" rel="stylesheet" />
        <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" />
    </head>
<body>
	<header id="site-header">
		<div class="container">
			<a href="<?php bloginfo('url'); ?>" class="logo" title="Teambit">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Teambit" />
			</a>
			<?php $shortname = "teambeat"; ?>
			<ul class="social">
				<li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
				<li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
				<li><a href="<?php echo get_option($shortname.'_rss_link',''); ?>" target="_blank"><i class="icon-rss"></i></a></li>
			</ul>
		</div>
	</header>
