<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-1.4.4.min.js"></script> -->


<?php wp_head(); ?> 
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo"></div>
		<div id="bulb"><div id="onBulb" ></div></div>
		 <ul class="navigation">
                <li><a id="about_item" href="/" rel="1" ></a></li>
				<li><a id="projects_item" href="/projects/" rel="2"></a></li>
                <li><a id="random_item" class="" href="/random/" rel="3"></a></li>
                <li><a id="contact_item" class="" href="/#contact" rel="4"></a></li>
		</ul>
	</div>