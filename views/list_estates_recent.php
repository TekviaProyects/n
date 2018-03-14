<?php 
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "inmo"): 
		new mysqli("localhost", "tc000457_inmo", "PEla06rapo", "tc000457_inmo");
		
	if (mysqli_connect_errno()) {
	    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
	$condition = '';
	$condition .= (!empty($_POST['num_bathroom'])) ? ' AND num_bathroom = '.$_POST['num_bathroom'] : '';
	$condition .= (!empty($_POST['num_room'])) ? ' AND num_room = '.$_POST['num_room'] : '';
	$condition .= (!empty($_POST['min_area'])) ? ' AND surface > '.$_POST['min_area'] : '';
	$condition .= (!empty($_POST['max_area'])) ? ' AND surface < '.$_POST['max_area'] : '';
	$condition .= (!empty($_POST['state'])) ? ' AND state = '.$_POST['state'] : '';
	$condition .= (!empty($_POST['type'])) ? ' AND type = '.$_POST['type'] : '';
	if (!empty($_POST['amount'])) {
		$amount = explode(' - $', $_POST['amount']);
		
		$min_amount = str_replace('$', '', $amount[0]);
		$max_amount = $amount[1];
		
		$condition .=  ' AND (price BETWEEN '.$min_amount.' AND '.$max_amount.')';
	}
	
	
	$condition .= (!empty($_POST['order'])) ? ' ORDER BY '.$_POST['order'] : '';
	$condition .= (!empty($_POST['limit'])) ? ' LIMIT '.$_POST['limit'] : '';
	
	$sql = "SELECT
				*
			FROM
				inmuebles 
			WHERE 
				1= 1 ".
			$condition;
	$result = mysqli_query($conexion, $sql);
	if (!$result){
  		echo("Error description: " . mysqli_error($conexion).'----'.$sql);
		return;
  	}
	
	$rows = array();
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$rows[] = $row;
	}
	
	$conexion->close();
	
	
	if (empty($rows)) {?>
		<div align="center">
			<h3>
				<span class="label label-default">
					* Sin resultados *
				</span>
			</h3>
		</div><?php

		return;
	}
	
	
	foreach ($rows as $key => $value) {
		$value['div'] = 'div_estates'; 
		$data = json_encode($value);
		$data = str_replace('"', "'", $data); ?>
		
		<li style="cursor: pointer" onclick="estates.details(<?php echo $data ?>); window.location.hash = '#div_estates'">
			<div class="latest-news-image">
				<a>
					<img 
						src="<?php echo $value['image'] ?>"
						onerror="this.onerror=null;this.src='images/error.jpg';" 
						alt="">
				</a>
			</div>
			<div class="latest-news-info">
				<h6><a><?php echo $value['title'] ?></a></h6>
				<p>
					<?php echo substr($value['description'], 0, 100) ?>
				</p>
			</div>
		</li><?php
	}
?>