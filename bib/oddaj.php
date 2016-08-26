<div class="szukaj">
	<span style="font-weight: 700; font-size: 15px">Zwróć książkę do biblioteki</span><br /><br />
	<form action="Oddano" method="post">
		ID książki do oddania:&nbsp;<input type="text" name="id" style="width: 150px">
		<input type="submit" name="oddaj" value="Zwróć" style="width: 150px">
	</form>
	<?php
		if(isset($_SESSION['noiddd']))	
			echo $_SESSION['noiddd'];
	?>
</div>