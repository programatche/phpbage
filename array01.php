<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$libertadores[0] = "Grêmio";
		$libertadores[1] = "Nacional-URU";
		$libertadores[2] = "Nacional-COL";
		$libertadores[3] = "NewsOldBoys";

		echo $libertadores[2];
		//sizeof - retorna o tamanho do array
		for ($i=0; $i < sizeof($libertadores) ; $i++)
		 { 
			echo $libertadores[$i]."<br/>";
		}


	?>

</body>
</html>