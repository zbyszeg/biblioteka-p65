<div class="szukaj">
	<?php
		
		require_once "connect.php";

		$conn=@new mysqli($host, $db_user, $db_password, $db_name);
		mysqli_query($conn,"SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		
		$id = $_POST['id'];
		
		$find=mysqli_query($conn,"select * from ksiazki where id_ksiazki='$id'");	
				
		$wynik = mysqli_fetch_assoc($find);
		
		if ($wynik>0)
		{
			$result=mysqli_query($conn,"DELETE from ksiazki where id_ksiazki='$id'");	
			echo "Książka została usunięta z biblioteki. Możesz ją jednak dodać ponownie.";
		}
		else
			echo "<span style='color: red; font-weight: 700'>Błąd!</span><br><br><span style='font-weight: 700'>Prawdopodobnie w bibliotece nie ma książki o podanym ID lub numer nie został wprowadzony.</span>";
	?>
</div>
