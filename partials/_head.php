<?php

	if (!defined('CMS')) exit;
	echo $this->doctypeDeclaration(); ?>
<!--
	Arcana 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html<?php echo $this->htmlAttributes(); ?>>
<head>
		<?php $site->addCss('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700');
		$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
		$site->addCss(BASE_URL.THEME_DIR.THEME.'/css/skel-noscript.css');
		$site->addCss(BASE_URL.THEME_DIR.THEME.'/theme.css');
		$site->addCss(BASE_URL.LIBRARY_DIR.'js/colorbox/themes/'.intval($this->getThemeOption('lightboxStyle')).'/colorbox.css');
		echo $site->generateHead(); ?>
	</head>
	<body class="body">