<style>
	.bread-bg-per {
		background: rgba(0, 0, 0, 0) url('<?php echo $_REQUEST['image'] ?>') no-repeat scroll 0 0 /cover;
	}
</style>
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
	<div class="about-sheltek-area ptb-115">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="section-title mb-30">
						<h2><?php echo $_REQUEST['title'] ?></h2>
					</div>
					<div class="pro-details-condition">
                        <div class="pro-details-condition-inner bg-gray">
                            <ul class="condition-list">
                                <li><img src="images/icons/5.png" alt=""><?php echo $_REQUEST['num_room'] ?> Habitaciones</li>
                                <li><img src="images/icons/6.png" alt=""><?php echo $_REQUEST['num_bathroom'] ?> Baños</li>
                                <li><img src="images/icons/13.png" alt=""><?php echo $_REQUEST['parking'] ?> Estacionamientos</li>
                                <li>
                                	<img src="images/icons/4.png" alt="">
                                	<?php echo $_REQUEST['construction'] ?> m<sub>2</sub> Construcción
                                </li>
                                <li>
                                	<img src="images/icons/4.png" alt="">
                                	<?php echo $_REQUEST['surface'] ?> m<sub>2</sub> Superficie
                                </li>
                                <li>
                                	<img src="images/icons/4.png" alt="">
                                	<?php echo $_REQUEST['levels'] ?> Niveles
                                </li>
                                <li><?php 
                                	switch ($_REQUEST['type']) {
										case 1:
											echo "Renta";
											break;
										case 2:
											echo "Venta";
											break;
										case 3:
											echo "Fideicomiso";
											break;
									} ?>
								</li>
                                <li>$<?php echo number_format($_REQUEST['price']) ?></li>
                            </ul>
                            <p><img src="images/icons/location.png" alt=""><?php echo $_REQUEST['address'] ?></p>
                        </div>
                    </div>
					<div class="about-sheltek-info">
						<div class="author-quote">
							<p>
								<?php echo $_REQUEST['description'] ?>
							</p>
							<p>
								<a href="<?php echo $_REQUEST['pdf'] ?>" download>Descargar PDF</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="about-image">
						<img src="<?php echo $_REQUEST['image'] ?>" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="google_map" style="width: 100%; height: 80vh"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- ABOUT SHELTEK AREA END -->
</section>
<script>
	function init(){
		var myLatlng = {
			lat : Number(<?php echo $_REQUEST['lat'] ?>),
			lng : Number(<?php echo $_REQUEST['lng'] ?>)
		};

		var map = new google.maps.Map(document.getElementById('google_map'), {
			zoom : 15,
			center : myLatlng
		});
	
		var marker = new google.maps.Marker({
			position : myLatlng,
			map : map,
			title : '<?php echo $_REQUEST['address'] ?>'
		});
	}

	init(); 
</script>