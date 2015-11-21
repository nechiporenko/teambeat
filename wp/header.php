<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
            for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
            mixpanel.init("0ac00d0b60b301d9e1f50b66f384ec50");</script><!-- end Mixpanel -->
        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-65230543-1', 'auto');
            ga('send', 'pageview');
mixpanel.track("Blog visitor");
          </script>
    </head>
<body>
	<header class="blog-header">
		<div class="container">
			<a href="<?php bloginfo('url'); ?>/blog" class="logo logo-blog" title="Teambit">
				Teambit
			</a>
			<a href="<?php bloginfo('url'); ?>" class="header-button">Check out Teambit</a>
			<?php $shortname = "teambeat"; ?>
			<ul class="social">
				<li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
				<li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
				<li><a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
				<li><a href="<?php echo get_option($shortname.'_rss_link',''); ?>" target="_blank"><i class="icon-rss"></i></a></li>
			</ul>
		</div>
	</header>
