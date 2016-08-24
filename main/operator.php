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

	echo '<p>[ <a href="Wyloguj">Wyloguj się!</a> ]</p>';
	
?>
</div>
