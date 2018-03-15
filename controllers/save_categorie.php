<?php 
	error_reporting(0);
	
	$estructura = '../data_cat';
	mkdir($estructura, 0777, true);
	
	$date = $resp['date'] = date('Y-m-d H:i:s');
	$image = 'data_cat/'.date('H-i-s').basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);
	
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "n"): 
		new mysqli("localhost", "p9000570_n", "lo24woPEzi", "p9000570_n");
	
	$sql = "INSERT INTO
				categories(name, image)
			VALUES('".$_POST['name']."', '".$image."')";
	$resp = mysqli_query($conexion, $sql);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion));
	}
	
	$conexion->close();
	
	echo json_encode($resp);
?>