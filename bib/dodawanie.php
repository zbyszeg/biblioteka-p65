<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$nr_ewid = $_POST['nr_ewid'];
		$autor = $_POST['autor'];
		$tytul = $_POST['tytul'];
		$wydaw = $_POST['wydaw'];
		$rok_wyd = $_POST['rok_wyd'];
		$nr_isbn = $_POST['nr_isbn'];
		
		if ((!$_POST['nr_ewid']) || (!$_POST['autor']) || (!$_POST['tytul']))
		{
			$_SESSION['pusto'] = '<span style="color:red">Pola &bdquo;Autor&rdquo;, &bdquo;Tytuł&rdquo; oraz &bdquo;Numer ewidencyjny&rdquo; nie mogą być puste!</span>';
			header('Location: Dodaj');
			exit();
		}
		
		$result = mysqli_query($conn,"insert into ksiazki values('','$nr_ewid','$autor','$tytul','$wydaw','$nr_isbn','$rok_wyd','1','','')");
		
		if ($result)
			echo "Książka została dodana do biblioteki.";
		else
			echo "Błąd!";
	?>
</div>
