<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<html>
	<head>
		<title>Igra pogađanja</title>
	</head>
	<body style="margin: 20px;">

       <?php
		$odabir = rand(1,9);
		print '
		<h1 style="margin-bottom:10px;font-size:14px;">Igra pogađanja</h1>
		<form action="" method="post" id="igra">
		    <div class="form-group">
			<label for="broj">Upiši  broj od 1 do 9*</label>
			<input type="number" name="broj" id="broj" required="required" value="'. $broj . '" autofocus>
		    </div>
		    <div class="form-group">';
		    if (isset($_POST['broj'])) {
			if ($_POST['broj'] == $odabir) {
			    print '<div class="btn btn-uspjeh">Zamišljeni broj je pogođen!</div>';
			}
			else if($_POST['broj'] != $odabir) {
			    print '<div class="btn btn-greska">Zamišljeni broj nije pogođen,pokušaj ponovo!</div>';
			}
			print '<p style="margin-top:10px;">Zamišljeni broj je '.$odabir.'</p>';
		    }

		    print '
		    </div>
		</form>';
    	?>
</body>
</html>