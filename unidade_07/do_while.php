<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP Fundamental</title>
	</head>
	
	<body>
		<?php

			$contador = 1;

			do {
				$sorteio  = rand(1,10);
				echo $sorteio . " ";
				$contador ++;

			} while ( $contador <= 5 ) 
		?>
	</body>

</html>