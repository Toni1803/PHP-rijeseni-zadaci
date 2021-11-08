<html>
<head>
<title>Prosjek ocjena</title>
<style>
h1{
	color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }
body{
	font-family: Verdana, sans-serif;
	font-size: 120%;
	color: black;
	width: 50%;
}
input[type="number"]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid aquamarine;
}
input[type="submit"]{
	background-color: #20B2AA;
	border: 2px solid #00FFFF;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	font-size: 20px;
	border-radius: 20px;
}

</style>
</head>
<body>
<h1>Ocjene iz kolokvija</h1>
<?php

if(!isset($_POST['_operation_']))  {$_POST['_operation_'] = FALSE;}
if($_POST['_operation_'] == FALSE){
print '
           <form operation="" method="post" >
		   <input type="hidden" id="_operation_" name="_operation_" value="TRUE"><br>
		   <div>
		   <label for="ocj1">Ocjena prvog kolokvija:</label>
		   <input type="number" id="ocj1" name="ocj1" min="1" max="5" required><br>
		   </div>
		   <div>
		   <label for="ocj2">Ocjena drugog kolokvija:</label>
		   <input type="number" id="ocj2" name="ocj2" min="1" max="5" required><br>
		   </div>
		   <div>
		   <input type="submit" value="Pošalji"><br>
		   </div>
		   </form>';
}
else if ($_POST['_operation_'] == TRUE){
	$ocjene = array($_POST['ocj1'], $_POST['ocj2']);
	
	if(($ocjene[0]<1 || $ocjene[1]<1 || $ocjene[0]>5 || $ocjene[1]>5)){
		echo "Pogrešan unos!"; echo "<br>";
		echo "Raspon je od 1 do 5. Unos korisnika je: Prvi kolokvij: $ocjene[0], Drugi kolokvij: $ocjene[1]";
	}
	elseif($ocjene[0]==1 || $ocjene[1]==1){
		if($ocjene[0]==1 && $ocjene[1]>1){
			echo "Ocjena prvog kolokvija je $ocjene[0]. Student ponavlja prvi kolokvij";
		}
		elseif($ocjene[1]==1 && $ocjene[0]>1){
			echo "Ocjena drugog kolokvija je $ocjene[1]. Student ponavlja drugi kolokvij";
		}
		else{
			echo "Student ponavlja oba kolokvija."; echo "<br>";
			echo "Ocjena prvog kolokvija je $ocjene[0]."; echo "<br>";
			echo "Ocjena drugog kolokvija je $ocjene[1].";
		}
	}
	else{
		$zavrsna_ocjena=($ocjene[0] + $ocjene[1]) /2;
		echo "Ocjena prvog kolokvija je $ocjene[0]."; echo "<br>";
		echo "Ocjena drugog kolokvija je $ocjene[1]."; echo "<br>";
		echo "Srednja ocjena iz kolegija: $zavrsna_ocjena"; echo "<br>";
		echo "Završna ocjena iz predmeta: " .round($zavrsna_ocjena);
	}
	print '<p><a href="prosjek.php?_operation_=FALSE">Povratak na početnu stranicu</a></p>';
}
?>
</body>
</html>
