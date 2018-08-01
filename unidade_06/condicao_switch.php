<!doctype html>
<html>
	<head>
		 <meta charset="UTF-8">
		 <title>CURSO PHP FUNDAMENTAL</title>
	</head>

	<body>
		<?php
			$dia = "segunda";
			switch ($dia) {
				
				case "segunda":
					echo "Hoje ainda é segunda :( <br>";
					break;

				case "quarta": 
					echo "Hoje não é sexta, mas ta chegando... <br>";
					break;
				
				case "sexta": 
					echo "Oba \o/ sextafire! :D <br>";
					break;
				
			}
		?>
	</body>

</html>