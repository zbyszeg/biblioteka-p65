<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: StronaGłówna');
		exit();
	}
	
?>
<div id="kontener">
		<nav id="menubar">
			
			<?php echo '<a href="Wyloguj">Wyloguj się!</a>'; ?><br />
			<hr />
			<a href="#">Wyszukaj pozycje</a><br />
			<a href="#">Dodaj pozycję</a><br />
			<a href="#">Edytuj pozycję</a><br />
			<a href="#">Usuń pozycję</a><br />
			<hr />
			<a href="#">Wypożycz książkę</a><br />
			<a href="#">Oddaj książkę</a><br />
		</nav>
		<section id="mainbib">
			<?php
				$page = isset($_GET['b']) ? basename($_GET['b']) : 'katalog_bib';
 				$file = 'main/' . $page . '.php';
 				include $file;
			?>
		</section>
		<div style="clear: both;"></div>
	</div>





<div id="menubar">

</div>