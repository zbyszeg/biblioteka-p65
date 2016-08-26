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
		<div style="color: #A5A5A5; text-align: center; font-size: 9px;">Projekt i wykonanie: <a href="mailto:zbyszek.gora@gmail.com" style="color: #4D4D4D">Zbigniew Góra</a></div>
	</div>
	<br /><br />
	<a href="Przeglądaj">Przeglądaj katalog</a><br/>
</div>