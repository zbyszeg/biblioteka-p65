<div class="wyniki">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$find=mysqli_query($conn,"select * from ksiazki");	
				
		while ($myrow = mysqli_fetch_assoc($find))
			{			
				echo "ID książki: ".$myrow["id_ksiazki"];
				echo "<br>Nr ewidencyjny: ".$myrow["nr_ewidencyjny"];
				echo "<br>Autor: ".$myrow["autor"];
				echo "<br>Tytuł: ".$myrow["tytul"];
				echo "<br>Wydawnictwo: ".$myrow["wydawnictwo"];
				echo "<br>Nr ISBN: ".$myrow["isbn"];
				echo "<br>Rok wydania: ".$myrow["rok_wydania"];
				
				switch ($myrow["status"])
				{
					case 1:
						echo '<br>Status: <span style="color: green">Dostępna</span>';
					break;
					
					case 2:
						echo '<br>Status: <span style="color: red">Wypożyczona</span>';
					break;
				}
				
				if($myrow["status"]==2)
				{
					echo "<br>Czytelnik: ".$myrow["czytelnik"];
					echo "<br>Data wypożyczenia: ".$myrow["data"];
				}
				echo "<hr />";
			}
	?>
</div>
