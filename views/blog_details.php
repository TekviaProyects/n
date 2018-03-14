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
	
// Categories
	$sql_cat = "SELECT
					c.*, COUNT(b.id) AS num 
				FROM
					categories c
				LEFT JOIN
						blog b
					ON
						b.cat_id = c.id
				GROUP BY
					c.id";
	$res_cat = mysqli_query($conexion, $sql_cat);
	if (!$res_cat){
  		echo("Error description: " . mysqli_error($conexion).'----'.$sql_cat);
		return;
  	}
	$cats = array();
	while ($row_cat = mysqli_fetch_array($res_cat, MYSQLI_ASSOC)) {
		$cats[] = $row_cat;
	}
	
// Comments
	$sql_co = "SELECT
					*
				FROM
					comments
				WHERE
					blog_id = ".$_REQUEST['id'];
	$res_co = mysqli_query($conexion, $sql_co);
	if (!$res_co){
  		echo("Error description: " . mysqli_error($conexion).'----'.$sql_co);
		return;
  	}
	$comments = array();
	while ($row_co = mysqli_fetch_array($res_co, MYSQLI_ASSOC)) {
		$comments[] = $row_co;
	}
	
	$conexion->close();

?>

<section id="page-content" class="page-wrapper">
	<!-- BLOG AREA START -->
	<div class="blog-area pb-120">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="blog-details-area">
						<!-- blog-details-image -->
						<div class="blog-details-image">
							<img src="<?php echo $_REQUEST['image'] ?>" alt="">
						</div>
						<!-- blog-details-title-time -->
						<div class="blog-details-title-time">
							<h5><?php echo ucfirst($_REQUEST['title']) ?></h5>
							<p>
								<?php echo $_REQUEST['date'] ?>
							</p>
						</div>
						<!-- blog-details-desctiption -->
						<div class="blog-details-desctiption mb-60">
							<p>
								<?php echo $_REQUEST['description'] ?>
							</p>
						</div>
						<!-- pro-details-feedback -->
						<div class="pro-details-feedback mb-100">
							<h5>Comentarios</h5>
							<!-- media -->
							<div class="media">
								<div class="media-body" id="div_comments"><?php
									foreach ($comments as $key => $value) { ?>
										<h6 class="media-heading">
											<?php echo $value['name'] ?>
										</h6>
										<p>
											<span><?php echo $value['date'] ?></span>
											<?php echo $value['comment'] ?>
										</p><br /><?php
									} ?>
								</div>
							</div>
							<!-- media -->
						</div>
						<!-- blog-details-reply -->
						<div class="blog-details-reply leave-review">
							<h5>Deja tu comentario</h5>
							<form onsubmit="event.preventDefault(); validate_comment()" id="form_comment">
								<div class="row">
									<div class="col-md-6">
										<input 
											id="name"
											type="text" 
											name="name" 
											placeholder="Nombre" 
											required="1">
									</div>
									<div class="col-md-6">
										<input 
											id="mail"
											type="email" 
											name="email" 
											placeholder="Correo" 
											required="1">
									</div>
								</div>
								<textarea id="comment" placeholder="Comentarios" required="1"></textarea>
								<button type="submit" class="submit-btn-1">
									Enviar
								</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<!-- widget-categories -->
					<aside class="widget widget-categories mb-50">
						<h5>Categorias</h5>
						<ul class="widget-categories-list"><?php
							foreach ($cats as $key => $value) { ?>
								<li>
									<a 
										href="#"
										onclick="blog.list_blog({
											div: 'div_blog',
											cat_id: <?php echo $value['id'] ?> 
										})">
										<?php echo $value['name'] ?> 
										<span><?php echo $value['num'] ?></span>
									</a>
								</li><?php
							} ?>
						</ul>
					</aside>
					<!-- widget-recent-post -->
					<aside class="widget widget-recent-post mb-50">
						<h5>Entradas recientes</h5>
						<div class="row" id="div_recent">
							<!-- blog-item -->
							<div class="col-md-12 col-sm-6 col-xs-12">
								<article class="recent-post-item">
									<div class="recent-post-image">
										<a href="single-blog.html"><img src="images/recent-post/3.jpg" alt=""></a>
									</div>
									<div class="recent-post-info">
										<div class="recent-post-title-time">
											<h5><a href="single-blog.html">Maridland de Villa</a></h5>
											<p>
												July 30, 2016 / 10 am
											</p>
										</div>
										<p>
											Lorem must explain to you how all this mistaolt
										</p>
									</div>
								</article>
							</div>
							<!-- blog-item -->
							<div class="col-md-12 col-sm-6 col-xs-12">
								<article class="recent-post-item">
									<div class="recent-post-image">
										<a href="single-blog.html"><img src="images/recent-post/3.jpg" alt=""></a>
									</div>
									<div class="recent-post-info">
										<div class="recent-post-title-time">
											<h5><a href="single-blog.html">Maridland de Villa</a></h5>
											<p>
												July 30, 2016 / 10 am
											</p>
										</div>
										<p>
											Lorem must explain to you how all this mistaolt
										</p>
									</div>
								</article>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<!-- BLOG AREA END -->
</section>
<script>
	function validate_comment(){
		var data = {},
			$required = [],
			message = 'Debes llenar los siguientes campos: \n',
			error = 0, 
			count = 0,
			html = '';
		
		$("#form_comment").find(':input').each(function(key, value){
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
		data.blog_id = <?php echo $_REQUEST['id'] ?>;
		console.log('==========> DATA', data);
		
		$.ajax({
			type : "POST",
			url : "save_comment.php",
			data : data,
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
			
			html = '<h6 class="media-heading">'+
						data.name+
					'</h6>'+
					'<p>'+
						'<span>'+resp.date+'</span>'+
						data.comment+
					'</p><br />';
			$("#div_comments").append(html);
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
	
	blog.list_blog({
		div: 'div_recent',
		limit: 5,
		view: 'list_blog_recent'
	});
</script>