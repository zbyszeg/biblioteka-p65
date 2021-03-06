<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div class="wyniki" id="widok">
		<a href="Przeglądaj">Powrót do wyszukiwarki</a><br /><br />
		<hr />
		<?php

		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		
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
		  
		  case "isbn":
		  $result=mysqli_query($conn,"select * from ksiazki where isbn like '%$wartosc%'");
		  break;
		}

		/* 
		Przy uzyciu petli 'while', kolejne odpowiadajace kryterium wyszukiwania 
		rekordy sa pobierane z bazy i zapisywane jako pola tablicy asocjacyjnej $myrow.
		Jej klucze odpowiadaja nazwom kolumn tabeli w bazie. 
		*/

		if (mysqli_num_rows($result)>0)
		{
			while ($myrow = mysqli_fetch_assoc($result))
			{

			//Wyswietlamy kolejne elementy tablicy.
				
				echo "Nr ewidencyjny: ".$myrow["nr_ewidencyjny"];
				echo "<br>Autor: ".$myrow["autor"];
				echo "<br>Tytuł: ".$myrow["tytul"];
				echo "<br>Nr ISBN: ".$myrow["isbn"];
				
				switch ($myrow["status"])
				{
					case 1:
						echo '<br>Status: <span style="color: green">Dostępna</span>';
					break;
					
					case 2:
						echo '<br>Status: <span style="color: red">Wypożyczona</span>';
					break;
				}	
				echo "<hr />";
			}
		}
		else
			echo "<br />Nie ma takiej książki.";
		?>
	</div>	
</body>
</html>