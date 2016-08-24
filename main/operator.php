<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: StronaGłówna');
		exit();
	}
	
?>

<div id="menubar">
<?php

	echo '<a href="Wyloguj">Wyloguj się!</a>';
	
?>
</div>
<div id="mainbib">
	<?php
		$page = isset($_GET['b']) ? basename($_GET['b']) : 'szukaj_bib';
 
		$file = 'main/' . $page . '.php';
 
		include $file;
	?>
</div>