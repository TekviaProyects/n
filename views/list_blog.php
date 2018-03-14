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
	$condition .= (!empty($_POST['cat_id'])) ? ' AND cat_id = '.$_POST['cat_id'] : '';
	
	$condition .= (!empty($_POST['order'])) ? ' ORDER BY '.$_POST['order'] : ' ORDER BY id DESC';
	$condition .= (!empty($_POST['limit'])) ? ' LIMIT '.$_POST['limit'] : '';
	
	$sql = "SELECT
				*
			FROM
				blog 
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
		$value['div'] = 'div_blog'; 
		$data = json_encode($value);
		$data = str_replace('"', "'", $data); ?>
		
		<div class="col-md-4 col-sm-6 col-xs-12">
			<article class="blog-item bg-gray" onclick="blog.details(<?php echo $data ?>)">
				<div class="blog-image">
					<a href="#">
						<img 
							height="300px"
							src="<?php echo $value['image'] ?>" 
							onerror="this.onerror=null;this.src='images/error.jpg';"
							alt="">
					</a>
				</div>
				<div class="blog-info" style="height: 250px">
					<div class="post-title-time">
						<h5>
							<a href="#">
								<?php echo ucfirst($value['title']) ?>
							</a>
						</h5>
						<p>
							<?php echo $value['date'] ?>
						</p>
					</div>
					<p>
						<?php echo substr($value['description'], 0, 140).'...' ?>
					</p>
				</div>
			</article>
		</div><?php
	}
?>