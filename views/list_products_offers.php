<?php 
	// error_reporting(E_ALL);
	error_reporting(0);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "n"): 
		new mysqli("localhost", "p9000570_n", "lo24woPEzi", "p9000570_n");
		
	if (mysqli_connect_errno()) {
	    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
	$condition = '';
	$condition .= (!empty($_POST['cat_id'])) ? ' AND cat_id = '.$_POST['cat_id'] : '';
	
	$condition .= (!empty($_POST['order'])) ? ' ORDER BY '.$_POST['order'] : ' ORDER BY id DESC';
	$condition .= (!empty($_POST['limit'])) ? ' LIMIT '.$_POST['limit'] : '';
	
	$sql = "SELECT
				*
			FROM
				products 
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
					* Sin productos *
				</span>
			</h3>
		</div><?php

		return;
	}
	
	// echo "<pre>", print_r($rows), "</pre>";
	
	foreach ($rows as $key => $value) { 
		$image = explode(', ', $value['images']); ?>
		
		<div class="col-md-6 col-lg-12"><?php
		
			if ($_REQUEST['edit'] == 1) {
				$value['edit'] = 1;
				$value['div'] = 'contenedor';
				$product = json_encode($value);
				$product = str_replace('"', "'", $product); ?>
				
				<a 
					href="#contenedor"
					onclick="products.add(<?php echo $product ?>)"
					class="btn btn-primary btn-block">
					Editar
				</a><?php
			} ?>
			
			<div class="special-offer-item text-center text-color-light">
				<a href="catalogue.php" class="text-decoration-none">
					<span class="special-offer-wrapper" style="height: 185px; width: 250px">
						<img 
							onerror="this.onerror=null;this.src='img/apple-touch-icon.png';" 
							src="<?php echo $image[0] ?>" 
							class="img-fluid" 
							alt=""> 
						<span class="special-offer-infos text-color-light"> </span> 
					</span> 
				</a>
			</div>
		</div><?php
	}
?>