<?php 
	error_reporting(0);
	$image = '';
	
	if($_FILES['image']){
		$estructura = '../data_cat';
		mkdir($estructura, 0777, true);
		
		$date = $resp['date'] = date('Y-m-d H:i:s');
		$image = 'data_cat/'.date('H-i-s').basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], '../'.$image);
	}
	
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion));
	}
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "n"): 
		new mysqli("localhost", "p9000570_n", "lo24woPEzi", "p9000570_n");
	
	$sql = 'UPDATE
				categories 
			SET
				name = \''.$_POST['name'].'\'';
	$sql .= (!empty($image)) ? ', image = \''.$image.'\'' : '' ;
	$sql .= 'WHERE 
				id = '.$_POST['id'];
	$resp['result'] = mysqli_query($conexion, $sql);
	$resp['sql'] = $sql;
	$conexion->close();
	
	echo json_encode($resp);
?>