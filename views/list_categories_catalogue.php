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
	$condition .= (!empty($_POST['id'])) ? ' AND id = '.$_POST['cat_id'] : '';
	
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
		<div class="col-md-6 col-lg-4 p-3 isotope-item"><?php
			if ($_REQUEST['edit'] == 1) { ?>
				<a 
					href="#contenedor"
					onclick="categories.add({
						id: <?php echo $value['id'] ?>,
						name: '<?php echo $value['name'] ?>',
						image: '<?php echo $value['image'] ?>',
						div: 'div_cats',
						edit: 1
					})"
					class="btn btn-primary btn-block">
					Editar
				</a><?php
			} ?>
			<div class="listing-item">
				<a 
					href="#listingLoadMoreWrapper"
					onclick="products.list_products({
						edit: '<?php echo $_REQUEST['edit'] ?>',
						cat_id: <?php echo $value['id'] ?>,
						view: 'list_products_catalogue',
						div: 'div_cats'
					})" 
					class="text-decoration-none">
					<div class="thumb-info thumb-info-lighten">
						<div class="thumb-info-wrapper m-0" style="height: 200px; width: 350px">
							<img 
								src="<?php echo $value['image'] ?>" 
								onerror="this.onerror=null;this.src='img/apple-touch-icon.png';" 
								class="img-fluid" alt="">
							<div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
								+
							</div>
						</div>
						<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
							<?php echo $value['name'] ?> 
							<i class="fa fa-caret-right text-color-secondary float-right"></i>
						</div>
						<div class="custom-thumb-info-title b-normal p-4">
						</div>
					</div> 
				</a>
			</div>
		</div><?php
	}
?>