<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$id = $_POST['id'];
		
		$find=mysqli_query($conn,"select * from ksiazki where id_ksiazki='$id'");	
				
		$wynik = mysqli_fetch_assoc($find);
		
		$czytelnik = $wynik["czytelnik"];
		
		if ((!$_POST['id']) || ($czytelnik==''))
		{
			$_SESSION['noiddd'] = '<span style="color:red">Wprowadź poprawny nr ID książki...</span>';
			header('Location: Oddaj');
			exit();
		}
		
		$result=mysqli_query($conn,"UPDATE ksiazki set status='1', czytelnik='', data='' where id_ksiazki='$id'");
		
		
		if ($result)
			echo "Czytelnik <b>$czytelnik</b> oddał książkę do biblioteki.";
		else
			echo "Błąd!";
	?>
</div>
