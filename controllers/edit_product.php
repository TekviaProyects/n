<?php 
	error_reporting(0);
	$img = '';
	
	if($_FILES['image']){
		$estructura = 'data_products';
		mkdir('../'.$estructura, 0777, true);
		
		$file_ary = array();
	    $file_count = count($_FILES['image']['name']);
	    $file_keys = array_keys($_FILES['image']);
	
	    for ($i=0; $i<$file_count; $i++) {
	        foreach ($file_keys as $key) {
	            $file_ary[$i][$key] = $_FILES['image'][$key][$i];
	        }
	    }
		
		foreach ($file_ary as $key => $value) {
			$image = $estructura.'/'.date('H-i-s').$value['name'];
			move_uploaded_file($file_ary[$key]['tmp_name'], '../'.$image);
			
			$img .= $image.', ';
		}
		$img = substr($img, 0, -2);	
	}
	
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "n"): 
		new mysqli("localhost", "p9000570_n", "lo24woPEzi", "p9000570_n");
	
	$sql = 'UPDATE
				products 
			SET
				name = \''.$_POST['name'].'\',
				model = \''.$_POST['model'].'\',
				cat_id = \''.$_POST['cat_id'].'\',
				description = \''.$_POST['description'].'\',
				c1 = \''.$_POST['c1'].'\',
				c2 = \''.$_POST['c2'].'\',
				c3 = \''.$_POST['c3'].'\'';
	$sql .= (!empty($img)) ? ', images = \''.$img.'\'' : '' ;
	$sql .= 'WHERE 
				id = '.$_POST['id'];
	$resp = mysqli_query($conexion, $sql);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion).'--------'.$sql);
	}
	
	$conexion->close();
	
	echo json_encode($resp);
?>