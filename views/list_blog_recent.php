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
		
		<div class="col-md-12 col-sm-6 col-xs-12">
			<article class="recent-post-item" onclick="blog.details(<?php echo $data ?>)">
				<div class="recent-post-image">
					<a>
						<img src="<?php echo $value['image'] ?>" alt="">
					</a>
				</div>
				<div class="recent-post-info">
					<div class="recent-post-title-time">
						<h5><a><?php echo ucfirst($value['title']) ?></a></h5>
						<p>
							<?php echo $value['date'] ?>
						</p>
					</div>
					<p>
						<?php echo substr($value['description'], 0, 70).'...' ?>
					</p>
				</div>
			</article>
		</div><?php
	}
?>