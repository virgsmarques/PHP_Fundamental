<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Fundamental - Unidade 8</title>
	</head>

	<body>
		<?php
			function retornarDiaria($salario, $dias, $cotacao) {

				$real =  number_format($salario/$dias,2);
				$dolar = number_format(($salario/$dias)/$cotacao,2);
				
				return array($real, $dolar);
			}

			list($resultado_real, $resultado_dolar) = retornarDiaria(3000,10,2.5);
			echo "Salário em real:" . $resultado_real . "<br>";
			echo "Salário em dólar:" . $resultado_dolar . "<br>";

			/*$diaria_array = retornarDiaria(3000,10,2.5);
			echo "Salário em real:" . $diaria_array[0] . "<br>";
			echo "Salário em dólar:" . $diaria_array[1] . "<br>";
			*/

		
		?>
	</body>
</html>