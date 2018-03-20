<script src="js/theme.js"></script>
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
		<li data-transition="fade">
			<img 
				src="img/demos/real-estate/slides/1.png"
				alt=""
				data-bgfit="cover"
				class="rev-slidebg"
				data-bgrepeat="no-repeat"
				data-bgposition="center center">
			<div 
				class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
				id="slide-529-layer-2"
				data-x="left" data-hoffset="15"
				data-y="center" data-voffset="0"
				data-width="360"
				data-height="360"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"
				data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
				data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
				data-start="500"
				data-responsive_offset="on"
				style="background-color: black; padding: 30px; overflow: hidden;">
				<div style="margin-top: -70px; margin-left: -170px; width: 360px; height: 360px">
					<img 
						width="100%"
						class="img-fluid" 
						onerror="this.onerror=null;this.src='img/apple-touch-icon.png';" 
						src="<?php echo $image[0] ?>" />
				</div>
				<span 
					class="featured-border" 
					style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;">
				</span>
				<span 
					class="feature-tag" 
					data-width="50" 
					data-height="50" 
					style="background: #1A1C43; 
							color: white !important; 
							text-transform: uppercase; 
							padding: 15px 102px; 
							position: absolute; right: -24%; top: 6%; 
							-webkit-transform: rotate(45deg); 
							-moz-transform: rotate(45deg); 
							-ms-transform: rotate(45deg); 
							-o-transform: rotate(45deg); 
							transform: rotate(45deg);">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $value['model'] ?>
				</span>
			</div>
			<div class="tp-caption main-label"
				data-x="left" data-hoffset="35"
				data-y="center" data-voffset="-50"
				data-start="1500"
				data-whitespace="nowrap"
				data-transform_in="y:[-100%];s:500;"
				data-transform_out="opacity:0;s:500;"
				data-textAlign="center"
				style="color: white !important;z-index: 5; font-size: 0.9em; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
				data-mask_in="x:0px;y:0px;">
				<?php echo $value['name'] ?>
			</div>
			<div class="tp-caption"
				data-x="left" data-hoffset="35"
				data-y="center" data-voffset="0"
				data-start="1500"
				data-height="44"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"
				data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
				data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
				data-textAlign="center"
				style="color: white !important; z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #1A1C43; line-height: 0.8em; width: 27vw; max-width: 320px;"
				data-mask_in="x:0px;y:0px;">
				<?php echo $value['c1'] ?>
			</div>
		</li><?php
	}
?>