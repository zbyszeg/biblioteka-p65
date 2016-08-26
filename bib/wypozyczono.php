<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$czytelnik = $_POST['czytelnik'];
		$id = $_POST['id'];
		
		$find=mysqli_query($conn,"select * from ksiazki where id_ksiazki='$id'");	
				
		$wynik = mysqli_fetch_assoc($find);
		
		if ((!$_POST['id']) || ($wynik<=0) || (!$_POST['czytelnik']))
		{
			$_SESSION['noidd'] = '<span style="color:red">Wprowadź poprawne dane...</span>';
			header('Location: Wypożycz');
			exit();
		}
		
		$now = date('y-m-d');
		$date = "20".$now;
		$result=mysqli_query($conn,"UPDATE ksiazki set status='2', czytelnik='$czytelnik', data='$date' where id_ksiazki='$id'");
		
		
		if ($result)
			echo "Książka została wypożyczona czytelnikowi <b>$czytelnik</b>.";
		else
			echo "Błąd!";
	?>
</div>
