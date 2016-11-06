<div class="szukaj">
	<span style="font-weight: 700; font-size: 15px">Wypożycz książkę czytelnikowi</span><br /><br />
	<form action="Pożyczono" method="post">
		<table>
		<tr><td>ID książki do wypożyczenia:&nbsp;</td><td><input type="text" name="id" ></td></tr>
		<tr><td><br /></td></tr>
		<tr><td>Imię i nazwisko czytelnika:&nbsp;</td><td><input type="text" name="czytelnik"></td><tr>
		</table>
		<input type="submit" name="dodaj" value="Wypożycz książkę" style="width: 200px">
	</form>
	<?php
		if(isset($_SESSION['noidd']))	
			echo $_SESSION['noidd'];
	?>
</div>