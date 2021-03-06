<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
  <div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/homepage">Assembly</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() ==='/'? 'current_page_item':''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::path() ==='clients'? 'current_page_item':''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{ Request::is('about') ? 'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{ Request::path() ==='Article'? 'current_page_item':''}}"><a href="/Article" accesskey="4" title="">Article</a></li>
				<li class="{{ Request::path() ==='cotact'? 'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2>Consectetuer adipiscing elit</h2>
			<span class="byline">Donec pulvinar ullamcorper metus</span>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Pulvinar mollis</a></li>
		</ul>
	</div>
</div>
@yield('content')
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

<script src="/js/app.js"></script>
</body>
</html>
