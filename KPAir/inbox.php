<!DOCTYPE html>
<html>
    <?php 
    include "header.php";
    include "configure/session.php";?>

		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-inbox'></i> Inbox</h1>
       			</div>
            	<!-- Page Heading End-->
				<!-- Begin Inbox -->
				<div class="widget transparent box-messages">
					<!-- searching -->
					<div class="row">
						<div class="col-sm-3 col-sm-offset-9">
						<form class="form-horizontal" role="form">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="form-group form-search search-box has-feedback">
								  <input type="text" class="form-control full-rounded" id="inputSuccess5" placeholder="Search..">
								  <a class="btn btn-link" href="#"><span class="fa fa-search form-control-feedback"></span></a>
								</div>
							</div>
						</form>
						</div>
					</div>

					<!-- content -->
					<div class="row">
						<div class="col-md-12">
							<div class="mail-list">
							<div class="clearfix"></div>
							<!-- Toolbar message -->
							<div class="data-table-toolbar">
								<div class="row">
									<!-- header table left -->
									<div class="col-sm-8">
										<div class="btn-toolbar" role="toolbar">
											<div class="btn-group">
												<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-envelope"></i> 
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="desposisi.php">Create <b>Desposisi</b></a></li>
													<li><a href="notadinas.php">Create <b>Notadinas</b></a></li>
											  	</ul>
											</div>
											
											<div class="btn-group hidden-xs">
												<a data-toggle="tooltip" title="Refresh" class="btn btn-primary"><i class="fa fa-undo"></i></a>
											</div>						
										</div>
									</div>

									<!-- header table right -->
									<div class="col-sm-4 hidden-xs">
										<div class="pull-right">
											<span class="paging-status">20 of 250</span>
											<div class="btn-group">
											  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
											  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
											</div>
										</div>
									</div><!-- End header table right -->

								</div><!-- End row header table -->
							</div><!-- End header table -->
							
							<!-- Message table -->
							<div class="table-responsive">
								<table class="table table-hover table-message">
									<tbody>
										<tr class="unread">
											<td style="width: 20px"><a href="javascript:;"> </a></td>
											<td style="width: 20px;"><a href="javascript:;"><i class="fa fa-paper-plane" style="color:blue"></i></a></td>
											<td style="width: 20px"><a href="javascript:;"><i class="fa fa-star-half-o" style="color:green"></i> </a></td>
											<td><a href="read-message.php">UGX/01/02</a></td>
											<td><a href="read-message.php">General Manager</a></td>
											<td><a href="read-message.php">Undangan Rapat</a></td>
											<td><i class="icon-attach-3" data-toggle="tooltip" title="Business Contract.pdf - 2,238KB"></i></td>
											<td>June, 18th 2015 18:30</td>
										</tr>
										<tr>
											<td style="width: 20px"><a href="javascript:;"><i class="fa fa-lock" style="color:#FFCC00;"></i></a></td>
											<td style="width: 20px;"><a href="javascript:;"> </a></td>
											<td style="width: 20px"><a href="javascript:;"><i class="fa fa-star" style="color:green"></i> </a></td>
											<td><a href="read-message.php">UGX/01/03</a></td>
											<td><a href="read-message.php">General Manager</a></td>
											<td><a href="read-message.php"><span class="label label-danger">Urgent</span> Pengecheckan Ulang</a></td>
											<td></td>
											<td>June, 20th 2015 15:00</td>
										</tr>
									</tbody>
								</table>
							</div><!-- End div .table-responsive -->
							<!-- End message table -->
							
							<!-- Footer message toolbar -->
							<div class="data-table-toolbar-footer">
								<div class="pull-right">
									<span class="paging-status">20 of 250</span>
									<div class="btn-group">
									  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
									  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
									</div><!-- End div .btn-group -->
								</div><!-- End div .pull-right -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End Footer message toolbar -->
							</div>
						</div><!-- End div .col-md-10 -->
					</div><!-- End div .row -->
				</div><!-- End div .box-info -->
				<!-- End inbox -->
				
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

		
		<!--
		MODAL OVERLAY
		Always place this div at the end of the page content
		-->
		<div class="md-overlay"></div>
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
	</body>
</html>