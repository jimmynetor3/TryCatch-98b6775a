<!DOCTYPE html>
<html>
<head>
	<title>php iets</title>
</head>
<body>
	<form action="my_error.php" method="POST">
<input type="number" name="eersteinput" value="0">
<input type="number" name="tweedeinput" value="0">
<input type="submit" name="submit" ></input>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $getal1 = $_POST["eersteinput"];
 $getal2 = $_POST["tweedeinput"];
             set_error_handler(function () {
                throw new Exception('Er is een fout opgetreden!');
            });
			try {
				$som = $getal1 / $getal2;
				echo $som;
			} catch (Exception $e) {
				echo('fout');
			}

            restore_error_handler();


}
 ?>

</body>
</html> 