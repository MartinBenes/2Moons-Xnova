<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="{$lang}" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="{$lang}" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{$lang}" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{$lang}" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{$lang}" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v={$REV}">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/lightbox.css?v={$REV}">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v={$REV}">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>{block name="title"} - {$gameName}{/block}</title>
	<meta name="generator" content="2Moons {$VERSION}">
	<!-- 
		This website is powered by 2Moons {$VERSION}
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v={$REV}"></script>
	<script src="scripts/base/jquery.cookie.js?v={$REV}"></script>
	<script src="scripts/base/jquery.fancybox.js?v={$REV}"></script>
	<script src="scripts/login/main.js"></script>
	<script>{if isset($code)}var loginError = {$code|json};{/if}</script>
	<script type="text/javascript" src="scripts/base/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="scripts/base/jquery-ui-1.8.18.custom.min.js"></script>
	<script type="text/javascript" src="scripts/base/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="scripts/base/tiny_slider.js"></script>
	<script type="text/javascript" src="scripts/base/lightbox.js"></script>
	{block name="script"}{/block}	
</head>
<body id="{$smarty.get.page|htmlspecialchars|default:'overview'}" class="{$bodyclass}">
	<div id="page">