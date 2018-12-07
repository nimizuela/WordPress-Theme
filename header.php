<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
	<head>
		<title>Proyecto Nimizuela</title>
<meta charset="utf-8" />
<meta name="description" content="Proyecto Nimizuela …dando a conocer Nimiq en Venezuela
" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="<?=get_template_directory_uri();?>/assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="<?=get_template_directory_uri();?>/assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="<?=get_template_directory_uri();?>/assets/css/ie8.css" /><![endif]-->
<link rel="alternate" type="application/atom+xml" href="/atom.xml" title="Sitewide ATOM Feed" />
<link rel="alternate" type="application/rss+xml" href="/rss.xml" title="Sitewide RSS Feed" />
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icons/16.png" sizes="16x16" type="image/png">
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icons/32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icons/48.png" sizes="48x48" type="image/png">
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icons/128.png" sizes="128x128" type="image/png">
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icons/windows.ico" sizes="16x16 32x32 48x48" type="image/icon">




	
<link rel="alternate" hreflang="en" href="/blog.html" />
	

	

<link rel="author" type="text/plain" href="/humans.txt" />
		
		
		<meta property="fb:app_id"       content="644672675906757" />
		
		<!-- Open Graph -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Proyecto Nimizuela" />
<meta property="og:description" content="Proyecto Nimizuela …dando a conocer Nimiq en Venezuela
" />
<meta property="og:site_name" content="Proyecto Nimizuela" />
<meta property="og:url" content="/es/blog.html" />
<meta property="og:image" content="<?=get_template_directory_uri();?>/images/logo.png" />
		
<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nimizuela" />
<meta name="twitter:title" content="Proyecto Nimizuela" />
<meta name="twitter:description" content="Proyecto Nimizuela …dando a conocer Nimiq en Venezuela
" />
<meta name="twitter:image" content="<?=get_template_directory_uri();?>/images/logo.png" />


	</head>
	<body class="is-preload">
		<script>
			if ((location.pathname + location.search).startsWith("/?address=")) {
				location.replace(location.href.replace("/?address=", "/paynt/?address="));
			}
		</script>

		<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="<?php echo home_url(); ?>" class="image logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" /></a>
			<h1><strong><?php echo bloginfo('name'); ?></strong><br /> <em><?php pll_e('Desription Line 1'); ?><br><?php pll_e('Desription Line 2'); ?></em></strong></h1>
			<?php wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			)); ?>
		</div>
	</header>


		<div id=lang-selector>
			<?php dynamic_sidebar('primary'); ?>
		</div>


		<!-- Main -->
			<div id="main">
