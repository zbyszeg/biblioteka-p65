<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: StronaGłówna');
		exit();
	}
	
?>
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
	<div id="kontener">
		<nav id="menubar">
			<br />
			<div style="text-align: center"><img src="img/logoP2.gif" style="width: 150px"/></div>
			<hr />
			<?php echo '<a href="logout.php">Wyloguj się</a>'; ?><br />
			<hr />
			<a href="Katalog">Wyszukaj książki</a><br />
			<a href="Lista">Pokaż wszystkie</a><br />
			<a href="Dodaj">Dodaj książkę</a><br />
			<a href="Edytuj">Edytuj informacje o książce</a><br />
			<a href="Usuń">Usuń książkę</a><br />
			<hr />
			<a href="Wypożycz">Wypożycz książkę</a><br />
			<a href="Oddaj">Oddaj książkę</a><br />
			<a href="Wypożyczone">Wyświetl wszystkie wypożyczone</a><br />
			<hr />
			<div id="podpis2"><p>Projekt i wykonanie: <a href="mailto:zbyszek.gora@gmail.com">Zbigniew Góra</a></p></div>
		</nav>
		<section id="mainbib">
		<?php
			$strona = isset($_GET['b']) ? basename($_GET['b']) : 'katalog_bib';
 			$plik = 'bib/'.$strona . '.php';
 			include $plik;
		?>
		</section>
		<div style="clear: both;"></div>
	</div>
</body>
</html>