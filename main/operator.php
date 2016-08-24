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
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<body>
	
<?php

	echo '<p>[ <a href="Wyloguj">Wyloguj się!</a> ]</p>';
	
?>

</body>
</html>