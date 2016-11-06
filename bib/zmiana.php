<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$kryterium = $_POST['kryterium'];
		$wartosc = $_POST['wartosc'];
		$id = $_POST['id'];
		
		if ((!$_POST['id']) || (!$_POST['wartosc']))
		{
			$_SESSION['noid'] = '<span style="color:red">Uzupełnij pola...</span>';
			header('Location: Edytuj');
			exit();
		}
		
		switch ($kryterium)
		{
		  case "nr_ewid":  
		  $result=mysqli_query($conn,"UPDATE ksiazki set nr_ewidencyjny='$wartosc' where id_ksiazki='$id'");
		  break;
		 
		  case "autor":
		  $result=mysqli_query($conn,"UPDATE ksiazki set autor='$wartosc' where id_ksiazki='$id'");
		  break;

		  case "tytul":
		  $result=mysqli_query($conn,"UPDATE ksiazki set tytul='$wartosc' where id_ksiazki='$id'");
		  break;

		  case "wydawnictwo":
		  $result=mysqli_query($conn,"UPDATE ksiazki set wydawnictwo='$wartosc' where id_ksiazki='$id'");
		  break;

		  case "isbn":
		  $result=mysqli_query($conn,"UPDATE ksiazki set isbn='$wartosc' where id_ksiazki='$id'");
		  break;

		  case "rok_wyd":
		  $result=mysqli_query($conn,"UPDATE ksiazki set rok_wydania='$wartosc' where id_ksiazki='$id'");
		  break;

		  case "czytelnik":
		  $now = date('y-m-d');
		  $date = "20".$now;
		  $result=mysqli_query($conn,"UPDATE ksiazki set status='2', czytelnik='$wartosc', data='$date' where id_ksiazki='$id'");
		  break;
		}
		
		if ($result)
			echo "Informacja została zmieniona.";
		else
			echo "Błąd!";
	?>
</div>
