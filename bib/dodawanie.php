<?php
	$conn=mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn,"biblioteka");
	mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
	
	$nr_ewid = $_POST['nr_ewid'];
	$autor = $_POST['autor'];
	$tytul = $_POST['tytul'];
	$wydaw = $_POST['wydaw'];
	$rok_wyd = $_POST['rok_wyd'];
	$nr_isbn = $_POST['nr_isbn'];
	
	$result = mysqli_query($conn,"insert into ksiazki values('','$nr_ewid','$autor','$tytul','$wydaw','$nr_isbn','$rok_wyd','1','','')");
	
	if ($result)
		echo "Książka została dodana do biblioteki";
	else
		echo "Błąd!";
?>
