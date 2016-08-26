<div class="szukaj">
	<span style="font-weight: 700; font-size: 15px">Edytuj informacje o książce:</span><br /><br />
	<form action="Zmieniono" method="post">
		<table>
		<tr><td>ID książki, której dotyczy zmiana:&nbsp;</td><td><input type="text" name="id" style="width: 180px"></td></tr>
		<tr><td>Informacja, która ma być zieniona:&nbsp;</td><td><select name="kryterium">
				<option value="nr_ewid">numer ewidencyjny</option>
				<option value="autor">autor</option>
				<option value="tytul">tytul</option>
				<option value="wydawnictwo">wydawnictwo</option>
				<option value="isbn">numer ISBN</option>
				<option value="rok_wyd">rok wydania</option>
				<option value="czytelnik">czytelnik</option>
			</select></td><tr>
		<tr><td>Nowa wartość:&nbsp;</td><td><input type="text" name="wartosc"></td><tr>
		</table>
		<input type="submit" name="dodaj" value="Wprowadź zmianę" style="width: 200px">
	</form>
	<?php
		if(isset($_SESSION['noid']))	
			echo $_SESSION['noid'];
	?>
</div>