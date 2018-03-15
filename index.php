<?php
	error_reporting(0);
?>	
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ZEIVYNOX | Cocinas y Diseños</title>
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
		
	<!-- sweetalert -->
		<link rel="stylesheet" href="plugins/sweetalert-master/dist/sweetalert.css" />

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
										<a href="demo-real-estate.html"> <img alt="Porto" width="143" height="40" src="img/demos/real-estate/logo-real-estate.png"> </a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 m-0">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav"><?php
													if ($_REQUEST['add'] == 1) { ?>
														<li class="dropdown-full-color dropdown-quaternary">
															<a
																onclick="categories.add({
																	div: 'contenedor'
																})"
																class="nav-link active"
																href="#"> 
																Agregar categoria 
															</a>
														</li>
														<li class="dropdown-full-color dropdown-quaternary">
															<a
																onclick="products.add({
																	div: 'contenedor'
																})"
																class="nav-link active"
																href="#"> 
																Agregar producto 
															</a>
														</li><?php
													} ?>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link active" href="demo-real-estate.html"> Inicio </a>
													</li>

													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="demo-real-estate-properties.html"> Catalogo </a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="demo-real-estate-properties.html"> Metodos de Pago </a>
													</li>

													<li class="dropdown dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="demo-real-estate-who-we-are.html"> Empresa </a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link " href="demo-real-estate-contact.html"> Contacto </a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
														<a class="nav-link dropdown-toggle" href="#"> Buscar <i class="fa fa-search"></i> </a>
														<ul class="dropdown-menu custom-fullwidth-dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<form id="propertiesFormHeader" action="demo-real-estate-properties.html" method="POST">
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
			<div role="main" class="main">
				<div class="slider-container light rev_slider_wrapper" style="height: 650px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'arrows': {'enable': true, 'left':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':-80},'right':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':80}}}}">
						<div class="slides-number d-none d-sm-block">
							<span class="atual">1</span>
							<span class="total">3</span>
						</div>
						<ul>
							<li data-transition="fade">
								<img src="img/demos/real-estate/slides/1.png"
								alt=""
								data-bgposition="center center"
								data-bgfit="cover"
								data-bgrepeat="no-repeat"
								class="rev-slidebg">

								<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
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
								style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
									<span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
									<span class="feature-tag" data-width="50" data-height="50" style="background: #1A1C43; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos Nuevos </span>
								</div>

								<div class="tp-caption main-label"
								data-x="left" data-hoffset="35"
								data-y="center" data-voffset="-50"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[-100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								data-textAlign="center"
								style="z-index: 5; font-size: 0.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									Estufa 6 Quemadores
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
								style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #1A1C43; line-height: 0.8em; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									$975,000
								</div>

								<a class="tp-caption slide-button btn"
								href="demo-real-estate-properties-detail.html"
								data-x="left" data-hoffset="108"
								data-y="center" data-voffset="60"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #1A1C43; padding: 12px 35px; color: #FFF;"
								data-mask_in="x:0px;y:0px;">IR A PRODUCTOS</a>
							</li>
							<li data-transition="fade">
								<img src="img/demos/real-estate/slides/2.png"
								alt=""
								data-bgposition="center center"
								data-bgfit="cover"
								data-bgrepeat="no-repeat"
								class="rev-slidebg">

								<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
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
								style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
									<span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
									<span class="feature-tag" data-width="50" data-height="50" style="background: #1A1C43; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos Nuevos </span>
								</div>

								<div class="tp-caption main-label"
								data-x="left" data-hoffset="35"
								data-y="center" data-voffset="-50"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[-100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								data-textAlign="center"
								style="z-index: 5; font-size: 0.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									Asador de Parrilla
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
								style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #1A1C43; line-height: 0.8em; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									$790,000
								</div>

								<a class="tp-caption slide-button btn"
								href="demo-real-estate-properties-detail.html"
								data-x="left" data-hoffset="108"
								data-y="center" data-voffset="60"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #1A1C43; padding: 12px 35px; color: #FFF;"
								data-mask_in="x:0px;y:0px;">IR A PRODUCTOS</a>
							</li>
							<li data-transition="fade">
								<img src="img/demos/real-estate/slides/3.png"
								alt=""
								data-bgposition="center center"
								data-bgfit="cover"
								data-bgrepeat="no-repeat"
								class="rev-slidebg">

								<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
								id="slide-529-layer-1"
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
								style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
									<span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
									<span class="feature-tag" data-width="50" data-height="50" style="background: #1A1C43; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos Nuevos </span>
								</div>

								<div class="tp-caption main-label"
								data-x="left" data-hoffset="35"
								data-y="center" data-voffset="-50"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[-100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								data-textAlign="center"
								style="z-index: 5; font-size: 0.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									Campana a Muro
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
								style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #1A1C43; line-height: 0.8em; width: 27vw; max-width: 320px;"
								data-mask_in="x:0px;y:0px;">
									$625,000
								</div>

								<a class="tp-caption slide-button btn"
								href="demo-real-estate-properties-detail.html"
								data-x="left" data-hoffset="108"
								data-y="center" data-voffset="60"
								data-start="1500"
								data-whitespace="nowrap"
								data-transform_in="y:[100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #1A1C43; padding: 12px 35px; color: #FFF;"
								data-mask_in="x:0px;y:0px;">IR A PRODUCTOS</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row" style="padding: 20px">
					<div class="col-sm-12" id="contenedor" >
						
					</div>
				</div>
				<div class="container">
					<div class="row mt-5">
						<div class="col-lg-9">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-normal mb-2"> Nuevos <strong class="text-color-secondary font-weight-extra-bold">Productos</strong><span class="font-weight-light">en</span><strong class="text-color-secondary font-weight-extra-bold">Catalogo</strong></h2>
								</div>
							</div>
							<div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/1.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												MODELO PRODUCTO
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Nombre Producto
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> CAMPO: </span>

													</li>
													<li>
														<span class="accomodation-title"> CAMPO: </span>

													</li>
													<li>
														<span class="accomodation-title"> CAMPO: </span>

													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/2.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												$ 320,000
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Sunny Isles Beach
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> Beds: </span>
														<span class="accomodation-value custom-color-1"> 3 </span>
													</li>
													<li>
														<span class="accomodation-title"> Baths: </span>
														<span class="accomodation-value custom-color-1"> 2 </span>
													</li>
													<li>
														<span class="accomodation-title"> Sq Ft: </span>
														<span class="accomodation-value custom-color-1"> 500 </span>
													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/3.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												$ 3000 / month
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Miami
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> Beds: </span>
														<span class="accomodation-value custom-color-1"> 3 </span>
													</li>
													<li>
														<span class="accomodation-title"> Baths: </span>
														<span class="accomodation-value custom-color-1"> 2 </span>
													</li>
													<li>
														<span class="accomodation-title"> Sq Ft: </span>
														<span class="accomodation-value custom-color-1"> 500 </span>
													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/4.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												$ 730,000
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Lawe Worth, Florida
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> Beds: </span>
														<span class="accomodation-value custom-color-1"> 3 </span>
													</li>
													<li>
														<span class="accomodation-title"> Baths: </span>
														<span class="accomodation-value custom-color-1"> 2 </span>
													</li>
													<li>
														<span class="accomodation-title"> Sq Ft: </span>
														<span class="accomodation-value custom-color-1"> 500 </span>
													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/5.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												$ 435,000
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Isles Beach, Florida
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> Beds: </span>
														<span class="accomodation-value custom-color-1"> 3 </span>
													</li>
													<li>
														<span class="accomodation-title"> Baths: </span>
														<span class="accomodation-value custom-color-1"> 2 </span>
													</li>
													<li>
														<span class="accomodation-title"> Sq Ft: </span>
														<span class="accomodation-value custom-color-1"> 500 </span>
													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
										<div class="thumb-info thumb-info-lighten">
											<div class="thumb-info-wrapper m-0">
												<img src="img/demos/real-estate/listings/6.png" class="img-fluid" alt="">
											</div>
											<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
												$ 490,000
												<i class="fa fa-caret-right text-color-secondary float-right"></i>
											</div>
											<div class="custom-thumb-info-title b-normal p-4">
												<div class="thumb-info-inner text-3">
													Miami Ave
												</div>
												<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
													<li>
														<span class="accomodation-title"> Beds: </span>
														<span class="accomodation-value custom-color-1"> 3 </span>
													</li>
													<li>
														<span class="accomodation-title"> Baths: </span>
														<span class="accomodation-value custom-color-1"> 2 </span>
													</li>
													<li>
														<span class="accomodation-title"> Sq Ft: </span>
														<span class="accomodation-value custom-color-1"> 500 </span>
													</li>
												</ul>
											</div>
										</div> </a>
									</div>
								</div>
							</div>
							<div id="listingLoadMoreBtnWrapper" class="row align-items-center" style="min-height: 140px;">
								<div class="col text-center">
									<div id="listingLoadMoreLoader" class="listing-load-more-loader">
										<div class="bounce-loader">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>

									<button id="listingLoadMore" type="button" class="btn btn-secondary btn-xs text-3 text-uppercase outline-none custom-padding-1">
										Ver Mas...
									</button>
								</div>
							</div>
							<div class="row pb-2">
								<div class="col">
									<h2 class="font-weight-normal mt-1 mb-0">Visita las Soluciones que tenemos para tu Negocio. </h2>
								</div>
							</div>
							<div class="row pb-4 mb-4" id="div_cats">
								
							</div>
						</div>
						<div class="col-lg-3">
							<aside class="sidebar">
								<div class="row">
									<div class="col">
										<h2 class="font-weight-normal mb-4"> Ofertas Especiales </h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-lg-12">
										<div class="special-offer-item text-center text-color-light">
											<a href="demo-real-estate-properties.html" class="text-decoration-none"> <span class="special-offer-wrapper"> <img src="img/demos/real-estate/offers/1.jpeg" class="img-fluid" alt=""> <span class="special-offer-infos text-color-light"> </span> </span> </a>
										</div>
									</div>
									<div class="col-md-6 col-lg-12">
										<div class="special-offer-item text-center text-color-light">
											<a href="demo-real-estate-properties.html" class="text-decoration-none"> <span class="special-offer-wrapper"> <img src="img/demos/real-estate/offers/2.jpeg" class="img-fluid" alt=""> <span class="special-offer-infos text-color-light pt-4"> </span> </span> </a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-lg-12">
										<div class="agents text-color-light text-center">
											<h4 class="text-light pt-4 m-0">Contacto Agentes</h4>
											<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
												<div class="pr-2 pl-2">
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none"> <span class="agent-thumb"> <img class="img-fluid rounded-circle" src="img/team/team-11.jpg" alt /> </span> <span class="agent-infos text-light pt-3"> <strong class="text-uppercase font-weight-bold">Alberto Glez.</strong> <span class="font-weight-light">044 333 667 0789</span> <span class="font-weight-light">alberto@zeivynox.com.mx</span> </span> </a>
												</div>
												<div class="pr-2 pl-2">
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none"> <span class="agent-thumb"> <img class="img-fluid rounded-circle" src="img/team/team-12.jpg" alt /> </span> <span class="agent-infos text-light pt-3"> <strong class="text-uppercase font-weight-bold">Sofia Glez.</strong> <span class="font-weight-light">044 331 082 4895</span> <span class="font-weight-light">sofia@zeivynox.com.mx</span> </span> </a>
												</div>
												<div class="pr-2 pl-2">
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none"> <span class="agent-thumb"> <img class="img-fluid rounded-circle" src="img/team/team-13.jpg" alt /> </span> <span class="agent-infos text-light pt-3"> <strong class="text-uppercase font-weight-bold">Marco Valerio</strong> <span class="font-weight-light">(477) 329-1974</span> <span class="font-weight-light">ventasleon@zeivynox.com.mx</span> </span> </a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-12">
										<div class="newsletter box-shadow-custom p-4 text-center">
											<i class="icon-envelope-letter icons"></i>
											<h4 class="mt-1 mb-1"> Suscribete </h4>
											<p>
												Suscríbete y obtén las mejores ofertas.
											</p>

											<div class="alert alert-success d-none" id="newsletterSuccess">
												<strong>Success!</strong> You've been added to our email list.
											</div>

											<div class="alert alert-danger d-none" id="newsletterError"></div>

											<form id="newsletterForm" class="text-black pt-2" action="php/newsletter-subscribe.php" method="POST">
												<input class="form-control" placeholder="Tu Nombre *" name="newsletterName" id="newsletterName" type="text">
												<input class="form-control" placeholder="Tu Dirección Email*" name="newsletterEmail" id="newsletterEmail" type="text">
												<button class="btn btn-light btn-block text-uppercase background-color-secondary mt-4 text-light p-2 pl-5 pr-5" type="submit">
													Suscribete
												</button>
											</form>
										</div>
									</div>
								</div>
							</aside>
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
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none"> Catalogo </a>
										</li>
										<li>
											<a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none"> Metodos de Trabajo </a>
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
		
	<!-- sweetalert -->
		<script type="text/javascript" src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.js"></script>

	<!-- System -->
		<script src="js_system/categories.js"></script>
		<script src="js_system/products.js"></script>

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
		<script>
			categories.list_categories({
				div: 'div_cats',
				edit: '<?php echo $_REQUEST['edit'] ?>'
			});
			
			products.list_products({
				div: 'listingLoadMoreWrapper',
				edit: '<?php echo $_REQUEST['edit'] ?>'
			});
		</script>
	</body>
</html>
