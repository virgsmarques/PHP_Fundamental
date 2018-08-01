<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP Fundamental</title>

		<body>
			<?php
				$salada = array("Maçã","Abacate","Laranja","Banana","Uva");

				foreach ($salada as $fruta) { 
					echo $fruta . "<br>";
				}
			?>
		</body>
	</head>
</html>