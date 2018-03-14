<?php 
	error_reporting(E_ALL);
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	$conexion = ($_SERVER['SERVER_NAME'] == 'localhost') ? 
		new mysqli("localhost", "root", "", "n"): 
		new mysqli("localhost", "tc000457_inmo", "PEla06rapo", "tc000457_inmo");
		
	if (mysqli_connect_errno()) {
	    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
// Categories
	$sql = "SELECT
				*
			FROM
				categories";
	$result = mysqli_query($conexion, $sql);
	if (!$result){
  		echo("Error description: " . mysqli_error($conexion).'----'.$sql);
		return;
  	}
	
	$rows = array();
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$cats[] = $row;
	}
	
	$conexion->close();

?>

<div class="col-xs-12">
	<div class="footer-widget">
		<h6>Agregar prodcuto</h6>
		<div>
			<form  id="form_data" onsubmit="event.preventDefault(); validate()" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Nombre</label>
						<input class="form-control" type="text" id="name" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Modelo</label>
						<input class="form-control" type="text" id="model" required="1" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Campo 1</label>
						<input class="form-control" type="text" id="c1" required="1" />
						<label>Campo 2</label>
						<input class="form-control" type="text" id="c2" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Descripción</label>
						<textarea class="form-control" rows="4" id="descripction" required="1"></textarea>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Campo 3</label>
						<input class="form-control" type="text" id="c3" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Imagen</label>
						<input 
							class="form-control" 
							type="file" 
							id="image" 
							name="image[]" 
							multiple="multiple" 
							required="1" 
							accept="image/*" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Categoria</label><br />
						<select class="custom-select"><?php
							foreach ($cats as $key => $value) { ?>
								<option value="<?php echo $value['id'] ?>">
									<?php echo $value['name'] ?>
								</option><?php
							} ?>
						</select>
					</div>
				</div>
				<br />
				<button type="submit" class="btn btn-success" id="btnSubir">
					Guardar
				</button>
			</form>
			<p class="form-messege"></p>
		</div>
	</div>
</div>
<script>
	function validate(){
		var data = {},
			$required = [],
			message = 'Debes llenar los siguientes campos: \n',
			error = 0, 
			count = 0;
		
		$("#form_data").find(':input').each(function(key, value){
			var required = $(this).attr('required'),
				valor = $(this).val(),
				id = this.id;
			
		// Validate that the required input not are empty
			if (required === '1' && valor.length <= 0) {
				error = 1;

				$required.push(id);
			}
			
			if(id){
				data[id] = $(this).val();
			}
		});
		
	// Build the error message
		if ($required.length > 0) {
			$.each($required, function(index, value) {
				message += '-->' + this + ' \n';
			});
		}
		
	// Error
		if (error === 1) {
			swal({
				title : 'Campos no validos',
				text : message,
				timer : 5000,
				showConfirmButton : true,
				type : 'warning'
			});
			
			return;
		}
		
		var $fileUpload = $("#image");
        if (parseInt($fileUpload.get(0).files.length) > 5){
	    	swal({
				title : 'Maximo alcanzado',
				text : 'Solamente puedes subir maximo 5 imagenes',
				timer : 5000,
				showConfirmButton : true,
				type : 'warning'
			});
			
			return;
        }
		
		var form = $('#form_data')[0];
		var formData = new FormData(form);
		formData.append("c1", data.c1);
		formData.append("c2", data.c2);
		formData.append("c3", data.c3);
		formData.append("name", data.name);
		formData.append("model", data.model);
		formData.append("cat_id", data.cat_id);
		formData.append("description", data.description);
		
		console.log('==========> DATA', data);
		console.log('==========> formData', formData);
		
		$("#btnSubir").prop('disabled', true);
		$("#btnSubir").html('Cargando...');
		
		$.ajax({
			type : "POST",
			enctype : 'multipart/form-data',
			url : "save_product.php",
			data : formData,
			processData : false,
			contentType : false,
			cache : false,
			timeout : 600000,
			dataType : 'json'
		}).done(function(resp) {
			console.log('==========> done add_estate', resp);
			
			swal({
				title : 'Datos guardados',
				text : 'Los datos se han guardado con exito',
				timer : 5000,
				showConfirmButton : true,
				type : 'success'
			});
			
			$("#btnSubir").prop('disabled', false);
			$("#btnSubir").html('Guardar');
		}).fail(function(resp) {
			console.log('==========> fail !!! save', resp);
			
			$("#btnSubir").prop('disabled', false);
			$("#btnSubir").html('Guardar');
			swal({
				title : 'Error',
				text : 'A ocurrido un problema al guardar los datos',
				timer : 5000,
				showConfirmButton : true,
				type : 'error'
			});
		});
	}
	
	init();
</script>