<html>
	<head>
		<title>PHP 1</title>
	</head>

	<body>
		<h1>PHP 1</h1>
		<?php
			$salario = 900;
			if ($salario<=400) 
			{
				echo "estagiario";
			}
			else
			{
				if ($salario <=1000) {
					echo "Programador Jr";
				}
				else
				{
					echo "Programador Pleno";
				}
			}

		?>

	</body>

</html>