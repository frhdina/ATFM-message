<!DOCTYPE html>
<html>
	<body>
    <?php include "header.php";?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
	<!------- Including CSS File ------>
	<link href="assets/css/kelly.css" rel="stylesheet" />


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
					<div class="col-sm-12 portlets">
						<div class="widget">
							<br>
							<div class="widget-content padding">
								<form enctype="multipart/form-data" action="" method="post">
									<div class="form-group">
										<label>Surat dari</label>
										<input type="text" name="from_hed" placeholder="" class="form-control" style="width: 50%;">
									</div>

									<div class="form-group">
										<label >Nomor Agenda</label>
										<input type="text" name="no_agen" placeholder="Nomer Agenda" class="form-control" style="width: 50%;">
									</div>
									
									<div class="form-group">
										<label>Tanggal Agenda</label>
										<input type="date" name="tgl_agen" class="form-control" data-mask="9999-99-99" placeholder="yyyy-mm-dd" style="width: 50%;">
									</div>
									
									<div class="form-group">
										<label>Perihal</label>
										<input type="text" name="perihal_hed"  placeholder="Perihal" class="form-control" style="width: 50%;">
									</div>

									<div class="form-group">
										<label>Sifat</label>
										<div class="radio iradio">
											<label>
												<input type="radio" name="sifat_dis" value="0" checked> Biasa
											</label>
										</div>
										<div class="radio iradio">
											<label>
												<input type="radio" name="sifat_dis" value="1"> Rahasia
											</label>
										</div>
									</div>

									<div class="form-group">
										<label>Klasifikasi</label>
										<div class="radio iradio">
											<label>
												<input type="radio" name="kla_dis" value="0" checked> Segera
											</label>
										</div>
										<div class="radio iradio">
											<label>
												<input type="radio" name="kla_dis" id="1" value="1"> Sangat Segera
											</label>
										</div>
									</div>

									<div class="form-group">
										<label>Tipe</label>
										<?php 
											$tipe=mysql_query("select * from tipe");
											while($tipeall=mysql_fetch_array($tipe))
											{
												$id = $tipeall['id_tipe'];?>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="id_tipe[]" value="<?php echo $id;?>"> <?php echo $tipeall['nama_tipe'];?>
											</label>
										</div>
										<?php }?>
									</div>
 									
 									<div class="form-group">
										<label>Pilih Penerima Desposisi</label>
										<?php 
											$unit2=mysql_query("SELECT * FROM unit2,unit1,previllage WHERE unit1.user_unit = '$username'
													AND previllage.id_unit1 = unit1.id_unit1 AND unit2.id_unit2 = previllage.id_unit2");
											while($baris=mysql_fetch_array($unit2))
											{
												$id_unit2 = $baris['id_unit2'];?>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="id_unit2[]" value="<?php echo $id_unit2;?>"><?php echo $baris['nama_unit2'];?>
												</label>
											</div>
											<?php } ?>
											<input type="hidden" name="id_unit1" value="<?php echo $id_unit1;?>">
									</div>

									<div class="form-group">
										<label for="inputSurat">Nomor Surat</label>
											<input type="text" name="no_hed" placeholder="Username" class="form-control" style="width: 50%;">
									</div>
												
									<div class="form-group">
										<label for="inputDate">Tanggal Surat</label>
											<input type="date" name="tgl_hed"class="form-control" data-mask="9999-99-99" placeholder="yyyy-mm-dd" style="width: 50%;">
									</div>

									<div class="form-group">
										<label for="inputPerihal">Isi</label>
											<textarea name="isi_dis" class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label for="inputPerihal">Upload</label>
											<br>
											<input type="button" id="add_more" class="unggah" value="Add Files"/>
											<!------- Including PHP Script here ------>
									</div>
								<input type="submit" value="Send" name="submit" id="upload" class="unggah"/>	
								</form>	
								<?php include "unggah1.php"; ?>
							</div>
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
	<script src="assets/libs/bootstrap-validator/js/bootstrapValidator.min.js"></script>
	<script src="assets/js/pages/form-validation.js"></script>
	</body>
</html>