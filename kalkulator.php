<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<?php
$broj1 = $_POST['broj1'];
$broj2 = $_POST['broj2'];
$operacija = $_POST['operacija'];
$rezultat= '';
if(is_numeric($broj1) && is_numeric($broj2)){
	switch($operacija){
		case "zbrajanje" : $rezultat = $broj1 + $broj2;
		   break;
		case "oduzimanje" : $rezultat = $broj1 - $broj2;
		   break;
		case "množenje" : $rezultat = $broj1 * $broj2;
		   break;
		case "dijeljenje" : $rezultat = $broj1 / $broj2;
		   break;
	}
}	
print '
<form action=" " method="post">
<div>
<label for="broj1">Unesi prvi broj:</label>
<input type="number" name="broj1" id="broj1" required="required" value="' . $broj1 . '">
</div>
<div>
<label for="broj2">Unesi drugi broj:</label>
<input type="number" name="broj2" id="broj2" required="required" value="' . $broj2 . '">
</div>
<div>
<label for="rezultat">Rezultat</label>
<input type="number" id="rezultat" value="' . $rezultat . '" disabled>
</div>
<input type="submit" value="zbrajanje" name="operacija">
<input type="submit" value="oduzimanje" name="operacija">
<input type="submit" value="množenje" name="operacija">
<input type="submit" value="dijeljenje" name="operacija">
</form>';
?>
</body>
</html>