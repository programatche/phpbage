<html>
	<head>
		<title>PHP 1</title>
	</head>

	<body>
		<h1>PHP 1</h1>
		<?php
			$salario = 900;

			while ( $salario >= 100) {
				echo $salario. " ";
				$salario = $salario -100;
			}

		?>

	</body>

</html>