<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: Bibliotekarz');
		exit();
	}

?>
<div id="mainp">
	<div id="forma">
		<form action="zaloguj.php" method="post">
				
			<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
				
			<input type="password" name="haslo" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
				
			<input type="submit" value="Zaloguj się">
				
		</form>
		<?php
			if(isset($_SESSION['blad']))	
				echo $_SESSION['blad'];
		?>
		<br/>
		<img src="img/logoP.gif" style="width: 150px"/>
		<div id="podpis">Projekt i wykonanie: <a href="mailto:zbyszek.gora@gmail.com">Zbigniew Góra</a></div>
	</div>
	<br /><br />
	<a href="Przeglądaj">Przeglądaj katalog</a><br/>
</div>