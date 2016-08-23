<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php

	//Nawiazujemy polaczenie z baza, podajac adres hosta, login oraz haslo.
	$conn=mysqli_connect("localhost", "root", "");

	//Wybieramy interesujaca nas baze.
	mysqli_select_db($conn,"biblioteka");

	/*
	Za pomoca instrukcji warunkowej 'switch' unikamy zbytniego naduzywania instrukcji 'if'.
	Jak widac ponizej, w zaleznosci, jakie kryterium wyszukiwania wybrano w formularzu, 
	nastepuje wybieranie odpowiednich rekordow wg pola imie, nazwisko albo adres. 
	MySQL rozroznia wielkie i male litery, zatem zarowno ciag wpisany w formularzu ($wartosc) jak
	i ten znajdujacy sie w odpowiednim polu danego rekordu zostaje zamieniony na duze litery za pomoca instrukcji 'upper'.
	Domyslnym kryterium szukania jest pole nazwisko (default).
	*/ 

	$kryterium = $_POST['kryterium'];
	$wartosc = $_POST['wartosc'];

	switch ($kryterium)
	{
	  case "autor":  
	  $result=mysqli_query($conn,"select * from ksiazki where upper(autor) like upper('%$wartosc%')");
	  break;
	 
	  case "tytul":
	  $result=mysqli_query($conn,"select * from ksiazki where upper(tytul) like upper('%$wartosc%')");
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
		echo "<P>";
		echo "Nr ewidencyjny: ".$myrow["nr_ewidencyjny"];
		echo "<br>Autor: ".$myrow["autor"];
		echo "<br>Tytuł: ".$myrow["tytul"];
		echo "<br>Status: ".$myrow["id_statusu"];	
		echo "</P>";
		echo "<hr />";
		}

	?>
</body>
</html>