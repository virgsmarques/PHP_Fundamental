<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Fundamental - Unidade 9</title>
	</head>

	<body>
		<?php
			//HORARIO DE BSB
			//date_default_timezone_set('Etc/GMT+3');
			
			//Horário Local
			date_default_timezone_set('America/Rio_Branco');
			$agora = getdate();
			print_r($agora);
		?>
	</body>
</html>