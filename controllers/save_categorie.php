<?php 
	$date = $resp['date'] = date('Y-m-d H:i:s');
	$dir_subida = 'blog_data/';
	$image = $dir_subida . date('Y-m-d--H-i-s').basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);
	
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "inmo"): 
		new mysqli("localhost", "tc000457_inmo", "PEla06rapo", "tc000457_inmo");
	
	$sql = "INSERT INTO
				blog(title, cat_id, description, image, date)
			VALUES('".$_POST['title']."', '".$_POST['cat_id']."', '".$_POST['description']."', '".$image."', 
					'".$date."')";
	$resp = mysqli_query($conexion, $sql);
	
	if (!$resp) {
		printf("Errormessage: %s\n", mysqli_error($conexion));
	}
	
	$conexion->close();
	
	echo json_encode($resp);
?>