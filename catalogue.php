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
	$condition .= (!empty($_POST['id'])) ? ' AND id = '.$_POST['cat_id'] : '';
	
	$condition .= (!empty($_POST['order'])) ? ' ORDER BY '.$_POST['order'] : ' ORDER BY id DESC';
	$condition .= (!empty($_POST['limit'])) ? ' LIMIT '.$_POST['limit'] : '';
	
	$sql = "SELECT
				*
			FROM
				categories 
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
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Zeivynox - Catalogos</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-real-estate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-real-estate.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
				<div class="header-body background-color-primary pt-0 pb-0">
					<div class="header-top header-top-style-3 header-top-custom background-color-primary">
						<div class="container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="d-none d-md-block">
													<span class="ws-nowrap"><i class="icon-location-pin icons"></i> Av. Washington No. 2046, Guadalajara Jal.</span>
												</li>
												<li>
													<span class="ws-nowrap"><i class="icon-call-out icons"></i> (01) 33 2466-1908</span>
												</li>
												<li class="d-none d-md-block">
													<span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="mailto:ventasgdl@zeivynox.com.mx">ventasgdl@zeivynox.com.mx</a></span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top langs mr-0">
											<ul class="nav nav-pills">
												<li class="blog">
													<a class="nav-link" href="#"> Cotizar Urgente </a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container custom-position-initial">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php"> <img alt="Porto" width="143" height="40" src="img/demos/real-estate/logo-real-estate.png"> </a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 m-0">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="index.php"> Inicio </a>
													</li>

													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link active" href="catalogue.php"> Catalogo </a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="catalogue.php"> Metodos de Pago </a>
													</li>

													<li class="dropdown dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="demo-real-estate-who-we-are.html"> Empresa </a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="demo-real-estate-contact.html"> Contacto </a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
														<a class="nav-link dropdown-toggle" href="#"> Buscar <i class="fa fa-search"></i> </a>
														<ul class="dropdown-menu custom-fullwidth-dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<form id="propertiesFormHeader" action="catalogue.php" method="POST">
																		<div class="container p-0">
																			<div class="form-row">
																				<div class="form-group col-lg-2 mb-0">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase text-2" name="propertiesPropertyType" data-msg-required="This field is required." id="propertiesPropertyType" required="">
																							<option value="">Linea</option>
																							<option value="1">Apartment</option>
																							<option value="2">House</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group col-lg-2 mb-0">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase text-2" name="propertiesLocation" data-msg-required="This field is required." id="propertiesLocation" required="">
																							<option value="">Acero</option>
																							<option value="1">Miami</option>
																							<option value="2">New York</option>
																							<option value="3">Houston</option>
																							<option value="4">Los Angeles</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group col-lg-2 mb-0">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase text-2" name="propertiesMinBeds" data-msg-required="This field is required." id="propertiesMinBeds" required="">
																							<option value="">Categoria</option>
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option value="3">3</option>
																							<option value="4">4</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group col-lg-2 mb-0">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase text-2" name="propertiesMinPrice" data-msg-required="This field is required." id="propertiesMinPrice" required="">
																							<option value="">Gama</option>
																							<option value="150000">$150,000</option>
																							<option value="200000">$200,000</option>
																							<option value="250000">$250,000</option>
																							<option value="300000">$300,000</option>
																							<option value="350000">$350,000</option>
																							<option value="400000">$400,000</option>
																							<option value="450000">$450,000</option>
																							<option value="500000">$500,000</option>
																							<option value="550000">$550,000</option>
																							<option value="600000">$600,000</option>
																							<option value="650000">$650,000</option>
																							<option value="700000">$700,000</option>
																							<option value="750000">$750,000</option>
																							<option value="800000">$800,000</option>
																							<option value="850000">$850,000</option>
																							<option value="900000">$900,000</option>
																							<option value="950000">$950,000</option>
																							<option value="1000000">$1,000,000</option>
																							<option value="1250000">$1,250,000</option>
																							<option value="1500000">$1,500,000</option>
																							<option value="1750000">$1,750,000</option>
																							<option value="2000000">$2,000,000</option>
																							<option value="2250000">$2,250,000</option>
																							<option value="2500000">$2,500,000</option>
																							<option value="2750000">$2,750,000</option>
																							<option value="3000000">$3,000,000</option>
																							<option value="3250000">$3,250,000</option>
																							<option value="3500000">$3,500,000</option>
																							<option value="3750000">$3,750,000</option>
																							<option value="4000000">$4,000,000</option>
																							<option value="4250000">$4,250,000</option>
																							<option value="4500000">$4,500,000</option>
																							<option value="4750000">$4,750,000</option>
																							<option value="5000000">$5,000,000</option>
																							<option value="6000000">$6,000,000</option>
																							<option value="7000000">$7,000,000</option>
																							<option value="8000000">$8,000,000</option>
																							<option value="9000000">$9,000,000</option>
																							<option value="10000000">$10,000,000</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group col-lg-2 mb-0">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase text-2" name="propertiesMaxPrice" data-msg-required="This field is required." id="propertiesMaxPrice" required="">
																							<option value="">Tipo</option>
																							<option value="150000">$150,000</option>
																							<option value="200000">$200,000</option>
																							<option value="250000">$250,000</option>
																							<option value="300000">$300,000</option>
																							<option value="350000">$350,000</option>
																							<option value="400000">$400,000</option>
																							<option value="450000">$450,000</option>
																							<option value="500000">$500,000</option>
																							<option value="550000">$550,000</option>
																							<option value="600000">$600,000</option>
																							<option value="650000">$650,000</option>
																							<option value="700000">$700,000</option>
																							<option value="750000">$750,000</option>
																							<option value="800000">$800,000</option>
																							<option value="850000">$850,000</option>
																							<option value="900000">$900,000</option>
																							<option value="950000">$950,000</option>
																							<option value="1000000">$1,000,000</option>
																							<option value="1250000">$1,250,000</option>
																							<option value="1500000">$1,500,000</option>
																							<option value="1750000">$1,750,000</option>
																							<option value="2000000">$2,000,000</option>
																							<option value="2250000">$2,250,000</option>
																							<option value="2500000">$2,500,000</option>
																							<option value="2750000">$2,750,000</option>
																							<option value="3000000">$3,000,000</option>
																							<option value="3250000">$3,250,000</option>
																							<option value="3500000">$3,500,000</option>
																							<option value="3750000">$3,750,000</option>
																							<option value="4000000">$4,000,000</option>
																							<option value="4250000">$4,250,000</option>
																							<option value="4500000">$4,500,000</option>
																							<option value="4750000">$4,750,000</option>
																							<option value="5000000">$5,000,000</option>
																							<option value="6000000">$6,000,000</option>
																							<option value="7000000">$7,000,000</option>
																							<option value="8000000">$8,000,000</option>
																							<option value="9000000">$9,000,000</option>
																							<option value="10000000">$10,000,000</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group col-lg-2 mb-0">
																					<input type="submit" value="Buscar" class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main" id="div_container">
				<div role="main" class="main">
					<section class="page-header page-header-light page-header-more-padding">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<h1>GAMA DE PRODUCTOS
									<p class="lead mb-0">
										Selecciona nuestra gama de productos.
									</p></h1>
								</div>
								<div class="col-lg-6">
									<ul class="breadcrumb">
										<li>
											<a href="index.php">INICIO</a>
										</li>
										<li class="active">
											CATALOGO
										</li>
									</ul>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col">
									<form id="propertiesForm" action="catalogue.php" method="POST">
										<div class="form-row">
											<div class="form-group col-lg-2 mb-0">
												<div class="form-control-custom mb-3">
													<select 
														id="cat_select"
														onchange="products.list_products({
															edit: '<?php echo $_REQUEST['edit'] ?>',
															cat_id: $(this).val(),
															view: 'list_products_catalogue',
															div: 'div_cats'
														})"
														class="form-control text-uppercase text-2"
														required="">
														<option value="">- Todas -</option><?php
														foreach ($rows as $key => $value) { ?>
															<option value="<?php echo $value['id'] ?>">
																<?php echo $value['name'] ?>
															</option><?php
														} ?>
													</select>
												</div>
											</div>
											<div class="form-group col-lg-2 mb-0">
												<button 
													onclick="products.list_products({
														edit: '<?php echo $_REQUEST['edit'] ?>',
														cat_id: $('#cat_select').val(),
														view: 'list_products_catalogue',
														div: 'div_cats'
													})"
													type="button"
													class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
													Buscar
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>

					<div class="container" id="div_container">
						<div class="row mb-4 properties-listing sort-destination p-0" id="div_cats">
							<div class="col-md-6 col-lg-4 p-3 isotope-item">
								<div class="listing-item">
									<a href="details.php" class="text-decoration-none">
									<div class="thumb-info thumb-info-lighten">
										<div class="thumb-info-wrapper m-0">
											<img src="img/demos/real-estate/listings/listing-1.jpg" class="img-fluid" alt="">
											<div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
												MODELO
											</div>
										</div>
										<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
											NOMBRE
											<i class="fa fa-caret-right text-color-secondary float-right"></i>
										</div>
										<div class="custom-thumb-info-title b-normal p-4">
											<div class="thumb-info-inner text-3">
												pequeña descripcion que no la carge toda.
											</div>
											<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
												<li>
													<span class="accomodation-title"> campo </span>

												</li>
												<li>
													<span class="accomodation-title"> campo </span>

												</li>
												<li>
													<span class="accomodation-title"> campo </span>

												</li>
											</ul>
										</div>
									</div> </a>
								</div>
							</div>
						</div>
					</div>
					<footer id="footer" class="m-0 custom-background-color-1">
						<div class="container">
							<div class="row">
								<div class="col-lg-3">
									<h4 class="mb-3">ZEIVYNOX | Cocinas y Diseños</h4>
									<p class="custom-color-2 mb-0">
										Av. Washington No. 2046
										<br>
										Col. Moderna, Guadalajara Jal.
										<br>
										Tel. : (01) 33 2466-1908
										<br>
										Email : <a class="text-color-secondary" href="mailto:ventasgdl@zeivynox.com.mx">ventasgdl@zeivynox.com.mx</a>
									</p>
								</div>
								<div class="col-lg-2">
									<h4 class="mb-3">Servicio</h4>
									<nav class="nav-footer">
										<ul class="custom-list-style-1 mb-0">
											<li>
												<a href="catalogue.php" class="custom-color-2 text-decoration-none"> Catalogo </a>
											</li>
											<li>
												<a href="catalogue.php" class="custom-color-2 text-decoration-none"> Metodos de Trabajo </a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="col-lg-2">
									<h4 class="mb-3">Nosotros</h4>
									<nav class="nav-footer">
										<ul class="custom-list-style-1 mb-0">
											<li>
												<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none"> Empresa </a>
											</li>
											<li>
												<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none"> Aviso de Privacidad </a>
											</li>
											<li>
												<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none"> Terminos y Condiciones </a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="col-lg-5">
									<h4 class="mb-3">Contacto</h4>
									<li>
										<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none"> Solicitar una Llamada </a>
									</li>
								</div>
							</div>
						</div>
						<div class="footer-copyright custom-background-color-1 pb-0">
							<div class="container">
								<div class="row pt-3 pb-3">
									<div class="col-lg-12 left m-0">
										<p>
											© Copyright 2018. All Rights Reserved Tekvia.
										</p>
									</div>
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>

			<!-- Vendor -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
			<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
			<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
			<script src="vendor/popper/umd/popper.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<script src="vendor/common/common.min.js"></script>
			<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
			<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
			<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
			<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
			<script src="vendor/isotope/jquery.isotope.min.js"></script>
			<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
			<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
			<script src="vendor/vide/vide.min.js"></script>

			<!-- Theme Base, Components and Settings -->
			<script src="js/theme.js"></script>

			<!-- Current Page Vendor and Views -->
			<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
			<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

			<!-- Current Page Vendor and Views -->
			<script src="js/views/view.contact.js"></script>

			<!-- Demo -->
			<script src="js/demos/demo-real-estate.js"></script>

			<!-- Theme Custom -->
			<script src="js/custom.js"></script>

			<!-- Theme Initialization Files -->
			<script src="js/theme.init.js"></script>

			<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
			<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
			</script>
			-->
			
		<!-- System -->
			<script src="js_system/categories.js"></script>
			<script src="js_system/products.js"></script>
			
			<script>
				categories.list_categories({
					div: 'div_cats',
					edit: '<?php echo $_REQUEST['edit'] ?>',
					view: 'list_categories_catalogue'
				});
			</script>
	</body>
</html>
