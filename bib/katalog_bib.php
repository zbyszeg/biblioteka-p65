<div id="szukaj">
	Wyszukaj pozycję wg:<br />
	<form name="formularz_szukania" method="post" action="Wyniki"> 
	<select name="kryterium">
	  <option value="autor">autora</option>
	  <option value="tytul">tytułu</option>
	  <option value="wydaw">wydawnictwa</option>
	  <option value="rok_wyd">roku wydania</option>
	  <option value="nr_ewid">numeru ewidencyjnego</option>
	  <option value="czytelnik">czytelnika</option>
	</select>

	<input name="wartosc" type="text">
	<input type="submit" name="Submit" value="Szukaj" style="width: 100px;">
</div>