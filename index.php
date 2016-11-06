<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8">
	
	<title>Perełkowa Biblioteka</title>
	
	<meta name="keywords" content="przedszkole, Perełka, Kraków, biblioteka, książki, Pani, Dominika">
	<meta name="description" content="Katalog książek biblioteki Przedszkola nr 65 Perełka w Krakowie">
	<meta name="author" content="Zbyszek Góra">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fontello.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Dekko|Oxygen:400,700|Rubik:400,700,900&subset=latin-ext" rel="stylesheet">
	<link rel="icon" href="fav/favicon.ico" type="image/x-icon">
	
	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/sticky.js"></script>
</head>
<body>
	<div id="menu">
			<div id="dom"><a href="StronaGłówna"><i class="icon-home"></i></a></div>
			<a href="http://perelkakrakow.pl/" target="=blank"><div id="logo"><i class="icon-home-1"></i></div></a>
			<div id="mail"><a href="mailto:przedszkole-65@wp.pl"><i class="icon-mail"></i></a></div>
			<a href="https://www.facebook.com/perelkakrakow" target="=blank"><div id="fb"><i class="icon-facebook-1"></i></div></a>
			<div style="clear: both;"></div>
	</div>
	
	<div id="pojemnik">
		<?php
			$page = isset($_GET['p']) ? basename($_GET['p']) : 'main';
 
			$file = 'main/' . $page . '.php';
 
			include $file;
		?>
	</div>
</body>
</html>