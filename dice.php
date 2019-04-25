<?php
	$nbr = rand(1, 6);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dice</title>
</head>
<body>
	<h1>Dice</h1>
	<img width="100" src="img/<?php echo $nbr ?>.png"/>
	<br/>
	<br/>
	<button onclick="window.location.reload();">Throw Dice</button>
</body>
</html>