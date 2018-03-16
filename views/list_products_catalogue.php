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
		$image = explode(', ', $value['images']); 
		
		$value['edit'] = 1;
		$value['div'] = 'div_container';
		$product = json_encode($value);
		$product = str_replace('"', "'", $product); ?>
		
		<div class="col-md-6 col-lg-4 p-3 isotope-item"><?php
			if ($_REQUEST['edit'] == 1) { ?>
				<a 
					href="#div_container"
					onclick="products.add(<?php echo $product ?>)"
					class="btn btn-primary btn-block">
					Editar
				</a><?php
			} ?>
			<div class="listing-item">
				<a 
					onclick="products.details(<?php echo $product ?>)"
					href="#div_container" 
					class="text-decoration-none">
				<div class="thumb-info thumb-info-lighten">
					<div class="thumb-info-wrapper m-0" style="height: 200px; width: 350px">
						<img 
							onerror="this.onerror=null;this.src='img/apple-touch-icon.png';" 
							src="<?php echo $image[0] ?>" 
							class="img-fluid" 
							alt="">
						<div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
							<?php echo $value['model'] ?>
						</div>
					</div>
					<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
						<?php echo $value['name'] ?>
						<i class="fa fa-caret-right text-color-secondary float-right"></i>
					</div>
					<div class="custom-thumb-info-title b-normal p-4">
						<div class="thumb-info-inner text-3">
							<?php echo $value['description'] ?>
						</div>
						<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
							<li>
								<span class="accomodation-title"><?php echo $value['c1'] ?></span>

							</li>
							<li>
								<span class="accomodation-title"><?php echo $value['c2'] ?></span>

							</li>
							<li>
								<span class="accomodation-title"><?php echo $value['c3'] ?></span>

							</li>
						</ul>
					</div>
				</div> </a>
			</div>
		</div><?php
	}
?>