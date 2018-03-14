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
		
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="flat-item">
				<div class="flat-item-image">
					<a href="properties-details.html">
						<img 
							style="min-height: 250px; max-height: 250px"
							src="<?php echo $value['image'] ?>" 
							onerror="this.onerror=null;this.src='images/error.jpg';">
					</a>
					<div class="flat-link">
						<a onclick="estates.details(<?php echo $data ?>)" href="#div_estates">Mas detalles</a>
					</div>
					<ul class="flat-desc">
						<li>
							<img src="images/icons/4.png" alt="">
							<span><?php echo $value['construction'] ?> m<sub>2</sub></span>
						</li>
						<li>
							<img src="images/icons/5.png" alt="">
							<span><?php echo $value['num_room'] ?></span>
						</li>
						<li>
							<img src="images/icons/6.png" alt="">
							<span><?php echo $value['num_bathroom'] ?></span>
						</li>
					</ul>
				</div>
				<div class="flat-item-info">
					<div class="flat-title-price">
						<h5><a href="properties-details.html"><?php echo $value['title'] ?></a></h5>
						<span class="price">$<?php echo number_format($value['price']) ?></span>
					</div>
					<p>
						<img src="images/icons/location.png" alt=""><?php echo $value['address'] ?>
					</p>
				</div>
			</div>
		</div><?php
	}
?>