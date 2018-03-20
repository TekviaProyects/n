<?php
	$images = explode(', ', $_POST['images']); 
?>

<section class="page-header page-header-light page-header-more-padding">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1><?php echo $_POST['name'] ?><span><?php echo $_POST['model'] ?></span></h1>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pb-5 pt-3">
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-7">
					<a 
						href="index.php" 
						class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-2 pl-3 pr-3 text-decoration-none">
						Regresar
					</a>
					<div class="thumb-gallery">
						<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
							<div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover owl-loaded owl-drag" id="thumbGalleryDetail">

								<div class="owl-stage-outer">
								<!-- ------------------- -->
									<div 
										class="owl-stage" 
										style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1915px;"><?php
										foreach ($images as $key => $value) { ?>
											<div class="owl-item active" style="width: 468.75px; margin-right: 10px;">
												<div>
													<a 
														href="<?php echo $value ?>"> 
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
																<span class="thumb-info-wrapper text-4"> 
																<img 
																	alt="Property Detail" 
																	src="<?php echo $value ?>" 
																	class="img-fluid"> 
																<span class="thumb-info-title text-4"> 
																	<span class="thumb-info-inner text-4">
																		<i class="icon-magnifier icons text-4"></i>
																	</span> 
																</span> 
															</span> 
														</span> 
													</a>
												</div>
											</div><?php
										} ?>
									</div>
								<!-- ------------------- -->
								</div>
								<div class="owl-nav">
									<div class="owl-prev disabled"></div><div class="owl-next"></div>
								</div><div class="owl-dots disabled"></div>
							</div>
						</div>

						<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt owl-loaded owl-drag" id="thumbGalleryThumbs">

							<div class="owl-stage-outer">
							<!-- ------------------- -->
								<div 
									class="owl-stage" 
									style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 484px;"><?php
									foreach ($images as $key => $value) { ?>
										<div class="owl-item active" style="width: 105.938px; margin-right: 15px;">
											<div>
												<img 
													alt="Property Detail" 
													src="<?php echo $value ?>" 
													class="img-fluid cur-pointer">
											</div>
										</div><?php
									} ?>
								</div>
							<!-- ------------------- -->
							</div>
							<div class="owl-nav disabled">
								<div class="owl-prev">
									Atras
								</div>
								<div class="owl-next">
									Siguiente
								</div>
							</div><div class="owl-dots disabled"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<table class="table table-striped">
						<colgroup>
							<col width="35%">
							<col width="65%">
						</colgroup>
						<tbody>
							<tr>
								<td class="background-color-primary text-light align-middle"></td>
								<td class="text-4 font-weight-bold align-middle background-color-primary text-light">
									<?php echo $_POST['name'] ?>
								</td>
							</tr>
							<tr>
								<td>Modelo:</td>
								<td><?php echo $_POST['model'] ?></td>
							</tr>
							<tr>
								<td>Campo 1:</td>
								<td><?php echo $_POST['c1'] ?></td>
							</tr>
							<tr>
								<td>Campo 2:</td>
								<td><?php echo $_POST['c2'] ?></td>
							</tr>
							<tr>
								<td>Campo 3:</td>
								<td><?php echo $_POST['c3'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h4 class="mt-3 mb-3">Descripción</h4>
					<p>
						<?php echo $_POST['description'] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<aside class="sidebar" style="margin-top: -30px">
				<h4 class="pt-4 mb-3 text-color-dark">Request Information</h4>
				<p>
					Contact us or give us a call to request more information
				</p>
				<form id="contactForm" action="php/contact-form.php" method="POST" class="mb-4">
					<div class="form-row">
						<div class="form-group col">
							<label>Your name *</label>
							<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Your email address *</label>
							<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Subject</label>
							<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Message *</label>
							<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="submit" value="Send Message" class="btn btn-secondary mb-lg-5" data-loading-text="Loading...">

							<div class="alert alert-success d-none" id="contactSuccess">
								Message has been sent to us.
							</div>

							<div class="alert alert-danger d-none" id="contactError">
								Error sending your message.
							</div>
						</div>
					</div>
				</form>
			</aside>
		</div>
	</div>
</div>