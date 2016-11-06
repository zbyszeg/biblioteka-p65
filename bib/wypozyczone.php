<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$result=mysqli_query($conn,"select * from ksiazki where status=2");
		
		while ($myrow = mysqli_fetch_assoc($result))
			{

			//Wyswietlamy kolejne elementy tablicy.
				echo "<p>";
				echo "ID książki: ".$myrow["id_ksiazki"];
				echo "<br>Nr ewidencyjny: ".$myrow["nr_ewidencyjny"];
				echo "<br>Autor: ".$myrow["autor"];
				echo "<br>Tytuł: ".$myrow["tytul"];
				echo "<br>Wydawnictwo: ".$myrow["wydawnictwo"];
				echo "<br>Nr ISBN: ".$myrow["isbn"];
				echo "<br>Rok wydania: ".$myrow["rok_wydania"];
				echo '<br>Status: <span style="color: red">Wypożyczona</span>';
				echo "<br>Czytelnik: "."<b>".$myrow["czytelnik"]."</b>";
				echo "<br>Data wypożyczenia: "."<b>".$myrow["data"]."</b>";
				echo "</p>";
				echo "<hr />";
			}
		
	?>
</div>
