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
		<form action="Logowanie" method="post">
				
			<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
				
			<input type="password" name="haslo" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
				
			<input type="submit" value="Zaloguj się">
				
		</form>
		<?php
			if(isset($_SESSION['blad']))
			{
				echo $_SESSION['blad'];
				unset($_SESSION['blad']);
			}
		?>
		<br/>
		<img src="img/logoP.gif" style="width: 150px"/>
	</div>
	<br /><br />
	<a href="Przeglądaj">Przeglądaj katalog</a><br/>
</div>