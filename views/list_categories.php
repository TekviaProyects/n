<?php 
	error_reporting(E_ALL);
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
				categories 
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
					* Sin categorias *
				</span>
			</h3>
		</div><?php

		return;
	}
	
	foreach ($rows as $key => $value) { ?>
		<div class="col-md-4 mt-3"><?php
			if ($_REQUEST['edit'] == 1) { ?>
				<a 
					href="#contenedor"
					onclick="categories.add({
						id: <?php echo $value['id'] ?>,
						name: '<?php echo $value['name'] ?>',
						image: '<?php echo $value['image'] ?>',
						div: 'contenedor',
						edit: 1
					})"
					class="btn btn-primary btn-block">
					Editar
				</a><?php
			} ?>
			<div class="special-offer-item text-center text-color-light">
				<a  
					href="#listingLoadMoreWrapper"
					onclick="products.list_products({
						edit: '<?php echo $_REQUEST['edit'] ?>',
						cat_id: <?php echo $value['id'] ?>,
						div: 'listingLoadMoreWrapper'
					})"
					class="text-decoration-none"> 
					<span class="special-offer-wrapper"  style="height: 185px; width: 250px"> 
						<img 
							src="<?php echo $value['image'] ?>" 
							onerror="this.onerror=null;this.src='img/apple-touch-icon.png';" 
							class="img-fluid" 
							alt=""> 
						<span class="special-offer-infos text-color-light"> 
							<span class="special-offer-title font-weight-normal text-5 p-1 mb-2"> 
								<?php echo $value['name'] ?> 
							</span> 
							<span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">VER</span> 
						</span> 
					</span> 
				</a>
			</div>
		</div><?php
	}
?>