<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP Fundamental</title>
	</head>

	<body>
		<?php

			for ( $contador = 1;  $contador < 7; $contador++ ) {
				/* outra forma
				for ( $contador = 1; $contador ++){
					if ($contador == 7){ 
						break;
					}
					echo rand (1,60) . " "; 
				}
				*/
				echo rand (1,60) . " "; 
			}

		?>
	</body>
</html>