<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP Fundamental</title>
	</head>
	
	<body>
		<?php

			$contador = 1;

			while ( $contador <= 3 ) {
				$sorteio = rand(1,60); 
				echo $sorteio . " ";

				$contador = $contador + 1;
				// ou $contador ++;
			}
		?>
	</body>

</html>