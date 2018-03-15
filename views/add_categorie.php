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
		<h6>Agregar categoria</h6>
		<div>
			<form  
				id="form_data" 
				onsubmit="event.preventDefault(); validate()" 
				method="post" 
				enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Nombre</label>
						<input class="form-control" type="text" id="name" required="1" value="<?php echo $_REQUEST['name'] ?>"/>
						<br /><br />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Imagen</label><?php
						$required = ($_REQUEST['edit'] == 1) ? '' : 'required="1"'; ?>						
						
						<input 
							class="form-control" 
							type="file" 
							id="image" 
							name="image" 
							accept="image/*" 
							<?php echo $required ?>>
					</div>
				</div>
				<button 
					type="submit" 
					class="btn btn-success"
					id="btnSubir">
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
		
		var form = $('#form_data')[0];
		var formData = new FormData(form);
		formData.append("name", data.name);
		formData.append("id", '<?php echo $_REQUEST['id'] ?>');<?php 
		
		if ($_REQUEST['edit'] == 1) { ?>
			var url = "controllers/edit_categorie.php";<?php
		} else { ?>
			var url = "controllers/save_categorie.php";<?php
		} ?>
		
		console.log('==========> DATA', data);
		console.log('==========> formData', formData);
		
		$("#btnSubir").prop('disabled', true);
		$("#btnSubir").html('Cargando...');
		
		$.ajax({
			type : "POST",
			enctype : 'multipart/form-data',
			url : url,
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
			
			$("#form_data")[0].reset();<?php
			
			if ($_REQUEST['edit'] == 1) { ?>
				location.reload();<?php
			} ?>
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
</script>