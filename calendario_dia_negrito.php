<html>
<head>

<title>Calendario PHP</title>

</head>
<body>
	<?php function linha($semana)
	{
		$linha = '<tr>';
		for ($i=0; $i <= 6; $i++) { 
			if (array_key_exists($i, $semana)) {
				$linha .="<td>{$semana[$i]}</td>";
				} else {
			$linha .= "";
		}
	}
			$linha .= '<tr>';
		return $linha;
    }

    function calendario()
    {
    	$calendario ='';
    	$dia = 1;
    	$semana =[];
    	while ($dia <= 31) {
    		array_push($semana, $dia);
    		if(count($semana) ==7) {
    			$calendario .= linha($semana);
    			$semana = [];
    		}
    		$dia++;
    	}

    	$calendario .=linha($semana);
    	return $calendario;
    }

    ?>

<table border="1">
	<thead>
		<tr>
			<th>Dom</th>
			<th>Seg</th>
			<th>Ter</th>
			<th>Quar</th>
			<th>Quin</th>
			<th>Sex</th>
			<th>Sab</th>
		</tr>
 	</thead>
	<tbody>
		<?php echo calendario(); ?>
	</tbody>
</table>

</body>
</html>