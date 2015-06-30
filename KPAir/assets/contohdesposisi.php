<!DOCTYPE html>
<html>
    <?php include "header.php";?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<!------- Including CSS File ------>
	<link rel="stylesheet" type="text/css" href="kelly.css">

		<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='icon-edit'></i> Desposisi</h1>
            	</div>
            	<!-- Page Heading End-->				
				<div class="row">
					<div class="col-md-12 portlets">
						<!-- Your awesome content goes here -->
						<div class="widget animated fadeInDown">
							<form enctype="multipart/form-data" id="myWizard" action="" method"POST">
								<section class="step" data-step-title="Create Disposisi">
									<div class="row">
										<div class="col-sm-12">
											<div class="notes">
												<div class="form-group">
													<label for="inputPerihal">Perihal</label>
													<input type="text" name="perihal_hed"  placeholder="Perihal" class="form-control" style="width: 49%;">
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-sm-6">
															<label for="inputNomor">Nomor Agenda</label>
															<input type="text" name="no_agen" placeholder="Nomer Agenda" class="form-control">
														</div>
														<div class="col-sm-6">
															<label for="inputDate">Tanggal Agenda</label>
															<input type="text" name="tgl_agen" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
														</div>
													</div>
												</div>
												
												 <div class="form-group">
												 	<div class="row">
												 		<div class="col-sm-6">
													 		<label for="inputDate">Sifat</label>
															<div class="radio iradio">
															  <label>
																<input type="radio" name="sifat_dis" value="0" checked>
																Biasa
															  </label>
															</div>
															<div class="radio iradio">
															  <label>
																<input type="radio" name="sifat_dis" value="1">
																Rahasia
															  </label>
															</div>

															<label for="inputDate">Klasifikasi</label>
															<div class="radio iradio">
															  <label>
																<input type="radio" name="kla_dis" value="0" checked>
																Segera
															  </label>
															</div>
															<div class="radio iradio">
															  <label>
																<input type="radio" name="kla_dis" value="1">
																Sangat Segera
															  </label>
															</div>
														</div>

														<div class="col-sm-6">
															<label>Tipe</label>
															<?php 
																$tipe=mysql_query("select * from tipe");
																while($tipeall=mysql_fetch_array($tipe))
																{
																	$id = $tipeall['id_tipe'];?>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="id_tipe" value="<?php echo $id;?>"> <?php echo $tipeall['nama_tipe'];?>
																</label>
															</div>
															<?php }?>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</section>

								<section class="step" data-step-title="Upload File">
									<div class="row">
										<div class="col-sm-12">
											<div class="notes">
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6">
															<label for="inputSurat">Nomor Surat</label>
															<input type="text" name="no_hed" placeholder="Username" class="form-control" style="width: 50%;">
															<br>
															<label for="inputDate">Tanggal Surat</label>
															<input type="text" name="tgl_hed"class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd" style="width: 50%;">
															<br>
															<label for="inputPerihal">Isi</label>
															<input type="textarea" name="is_dis" class="form-control" style="width: 50%;">
														</div>
														<div class="col-sm-6">
															<label>Upload</label>
															<br>
															<h2>Multiple Image Upload Form</h2>
															<form enctype="multipart/form-data" action="" method="post">
															First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
															<br>
															<input type="button" id="add_more" class="upload" value="Add Files"/>
															<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
															</form>
															<!------- Including PHP Script here ------>
															<?php include "unggah1.php"; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="step" data-step-title="Pilih Penerima">
									<div class="row">
										<div class="col-sm-12">
											<div class="notes">
												<div class="form-group">
													<label>Pilih Penerima Desposisi</label>
														<?php 
															$unit2=mysql_query("select * from unit2");
															while($baris=mysql_fetch_array($unit2))
															{
																$id_unit = $baris['id_unit2'];?>
														<div class="checkbox">
														  <label>
															<input type="checkbox" value="<?php echo $id_unit2;?>">
															<?php echo $baris['nama_unit2'];?>
														  </label>
														</div>
														<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</section>

							</form>
						</div>
					</div>
				</div>
					
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/jquery-wizard/jquery.easyWizard.js"></script>
	<script src="assets/js/pages/form-wizard.js"></script>
	<script src="assets/libs/dropzone/dropzone.min.js"></script>
	</body>
</html>