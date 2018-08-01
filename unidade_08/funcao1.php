<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Fundamental - Unidade 8</title>
	</head>

	<body>
		<?php
			function retornarDiaria() {
				$salario = 1108;
				return number_format($salario/30,2);
			}

			echo retornarDiaria();
		?>
	</body>
</html>