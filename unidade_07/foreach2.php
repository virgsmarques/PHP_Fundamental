<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP Fundamental</title>

		<body>
			<?php
				$agenda = array (
					"nome" => "Nome",
					"sobrenome" => "Sobrenome", 
					"salario" => 1000,
					"aniversario" => "31/03/1996"
				);

				foreach ($agenda as $atributo => $valor){
					echo $atributo . ": " . $valor ."<br>";
				}
			?>
		</body>
	</head>
</html>