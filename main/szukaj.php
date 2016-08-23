<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div id="wyniki">
		<a href="Przeglądaj">Powrót do wyszukiwarki</a><br /><br />
		<hr />
		<?php

		//Nawiazujemy polaczenie z baza, podajac adres hosta, login oraz haslo.
		$conn=mysqli_connect("localhost", "root", "");

		//Wybieramy interesujaca nas baze.
		mysqli_select_db($conn,"biblioteka");
		
		//ustawiamy poprawne wyświetlanie
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

		$kryterium = $_POST['kryterium'];
		$wartosc = $_POST['wartosc'];

		switch ($kryterium)
		{
		  case "autor":  
		  $result=mysqli_query($conn,"select * from ksiazki where autor like '%$wartosc%'");
		  break;
		 
		  case "tytul":
		  $result=mysqli_query($conn,"select * from ksiazki where tytul like '%$wartosc%'");
		  break;
		}

		/* 
		Przy uzyciu petli 'while', kolejne odpowiadajace kryterium wyszukiwania 
		rekordy sa pobierane z bazy i zapisywane jako pola tablicy asocjacyjnej $myrow.
		Jej klucze odpowiadaja nazwom kolumn tabeli w bazie. 
		*/

		while ($myrow = mysqli_fetch_assoc($result))
			{

		//Wyswietlamy kolejne elementy tablicy.
			echo "<p>";
			echo "Nr ewidencyjny: ".$myrow["nr_ewidencyjny"];
			echo "<br>Autor: ".$myrow["autor"];
			echo "<br>Tytuł: ".$myrow["tytul"];
			echo "<br>Status: ".$myrow["id_statusu"];	
			echo "</p>";
			echo "<hr />";
			}
		?>
	</div>	
</body>
</html>