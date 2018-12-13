<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?= substr(get_bloginfo('language'), 0, 2); ?>">
	<head>
		<title><?= get_bloginfo('name'); ?></title>
<meta charset="utf-8" />
<meta name="description" content="<?= get_bloginfo('name'); ?> <?= get_bloginfo('description'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="<?= get_template_directory_uri(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/ie8.css" /><![endif]-->
<link rel="alternate" type="application/atom+xml" href="/atom.xml" title="Sitewide ATOM Feed" />
<link rel="alternate" type="application/rss+xml" href="/rss.xml" title="Sitewide RSS Feed" />
<link rel="icon" href="<?= get_template_directory_uri(); ?>/images/icons/16.png" sizes="16x16" type="image/png">
<link rel="icon" href="<?= get_template_directory_uri(); ?>/images/icons/32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?= get_template_directory_uri(); ?>/images/icons/48.png" sizes="48x48" type="image/png">
<link rel="icon" href="<?= get_template_directory_uri(); ?>/images/icons/128.png" sizes="128x128" type="image/png">
<link rel="icon" href="<?= get_template_directory_uri(); ?>/images/icons/windows.ico" sizes="16x16 32x32 48x48" type="image/icon">
<link rel="alternate" hreflang="<?= substr(get_bloginfo('language'), 0, 2) == 'es' ? 'en' : 'es'; ?>" href="/blog.html" />
<link rel="author" type="text/plain" href="/humans.txt" />
<meta property="fb:app_id"       content="644672675906757" />

<!-- Open Graph -->
<meta property="og:type" content="article" />
<meta property="og:title" content="<?= get_bloginfo('name'); ?>" />
<meta property="og:description" content="<?= get_bloginfo('name'); ?> <?= get_bloginfo('description'); ?>" />
<meta property="og:site_name" content="<?= get_bloginfo('name'); ?>" />
<meta property="og:url" content="/es/blog.html" />
<meta property="og:image" content="<?= get_template_directory_uri(); ?>/images/logo.png" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nimizuela" />
<meta name="twitter:title" content="<?= get_bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?= get_bloginfo('name'); ?> <?= get_bloginfo('description'); ?>" />
<meta name="twitter:image" content="<?= get_template_directory_uri(); ?>/images/logo.png" />

	</head>
	<body class="is-preload">

<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '644672675906757',
			xfbml      : true,
			version    : 'v3.1'
		});
	FB.AppEvents.logPageView();
	};

	(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/<?= substr(get_bloginfo('language'), 0, 2) == 'es' ? 'es_LA' : 'en_US'; ?>/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

		<script>
			if ((location.pathname + location.search).startsWith("/?address=")) {
				location.replace(location.href.replace("/?address=", "/paynt/?address="));
			}
		</script>

		<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="<?= home_url(); ?>" class="image logo"><img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
			<h1><strong><?= get_bloginfo('name'); ?></strong><br /> <em><?= pll__('Desription Line 1'); ?><br><?= pll__('Desription Line 2'); ?></em></strong></h1>
			<?php wp_nav_menu( array('theme_location'  => 'primary')); ?>
		</div>
	</header>

		<!--
		<div id=lang-selector>
			<?php dynamic_sidebar('primary'); ?>
		</div>
		-->

		<!-- Main -->
			<div id="main">
