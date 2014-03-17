<html>
	<head>
		<title>PHP 1</title>
	</head>

	<body>
		<h1>PHP 1</h1>
		<?php
			$uf="RS";
			
			switch ($uf) {
				case 'RS':
					echo "Porto Alegre";
					break;
				case 'SP':
					echo "São Paulo";
					break;
				case 'TO':
					echo "Palmas";
					break;
				default:
					echo "Não encontrado";
					break;
			}

		?>

	</body>

</html>