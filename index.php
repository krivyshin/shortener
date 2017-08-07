<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>URL Shortener</title>
	<link rel="stylesheet" type="text/css" href="global.css">
</head>
<body>
	<div class="container">
		<h1 class="title">”коротить URL.</h1>
		
		<?php
		if (isset($_SESSION['feedback'])) {
			echo "<p>{$_SESSION['feedback']}</p>";
			unset($_SESSION['feedback']);
		}
		?>

		<form action="shorten.php" method="post">
			<input type="url" name="url" placeholder="¬ведите URL" autocomplete="off" value="http://htmlbook.ru/html/INPUT">
			<input type="submit" name="Shorten">
		</form>
	</div>


</body>
</html>