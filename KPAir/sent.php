<!DOCTYPE html>
<html>
    <?php include "header.php";?>

		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-paper-plane'></i> Sent Mail</h1>
       			</div>
            	<!-- Page Heading End-->
				<!-- Begin Inbox -->
				<div class="widget transparent box-messages">
					<!-- searching -->
					<div class="row">
						<div class="col-sm-12 col-sm-offset-3">
						<form class="form-horizontal" role="form" method="POST">
							<div class="col-sm-9 col-sm-offset-1">
								<div class="form-group">
								  <div class="row">
								  	<div class="col-md-3">
								  		<input type="text" class="form-control" name="sperihal" placeholder="Search by perihal">
								 	</div>
								 	<div class="col-md-3">
								  		<input type="text" class="form-control" name="snomer" placeholder="Search by nomer">
								 	</div>
								 	<div class="col-md-3">
								 		<input type="date" name="stanggal" class="form-control" data-mask="9999-99-99" placeholder="Search by tanggal">
								  		<!--<input type="text" class="form-control full-rounded" name="stanggal" placeholder="Search by tanggal"-->
								 	</div>
								 	<div class="col-md-1">
								 		<input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Search" style="background-color:#777;">
								 		<!--<a type="submit" class="btn btn-link" id="search"><span class="fa fa-search form-control-feedback"></span></a>-->
								 	</div>
								  </div>
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
												<a href="sent.php" data-toggle="tooltip" title="Refresh" class="btn btn-primary"><i class="fa fa-undo"></i></a>
											</div>						
										</div>
									</div>

									<?php

										$start=0;
										$id = 1;
										$limit=10;

										if(isset($_GET['id']))
										{
											$id=$_GET['id'];
											$start=($id-1)*$limit;
										}

										if (isset($_POST['SUBMIT'])) 
										{
											$perihal = $_POST["sperihal"];
											$nomer = $_POST["snomer"];
											$tanggal = $_POST["stanggal"];
											if(empty($perihal) and empty($nomer) and empty($tanggal))
											{

												echo '<script language="javascript"> alert("harap mengisi salah satu kolom atau semua kolom pencarian terlebih dahulu");';
												echo 'window.location.href = "sent.php";';
												 echo '</script>';

											}
											else
											{
												if(empty($tanggal) and empty($nomer))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc");
													if($query == FALSE) { 
													    die(mysql_error()); // TODO: better error handling
													}
												}

												elseif(empty($nomer) and empty($perihal))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND disposisi.tgl_agen = '$tanggal' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND disposisi.tgl_agen = '$tanggal' order by disposisi.tgl_agen desc");
													if($query == FALSE) { 
													    die(mysql_error()); // TODO: better error handling
													}
												}

												elseif(empty($tanggal) and empty($perihal))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND header.no_hed like '%$nomer%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND header.no_hed like '%$nomer%' order by disposisi.tgl_agen desc");
													if($query == FALSE) { 
													    die(mysql_error()); // TODO: better error handling
													}
												}

												elseif(empty($tanggal))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND header.no_hed like '%$nomer%' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND header.no_hed like '%$nomer%' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc");
													if($query == FALSE and $count ==  FALSE) { 
													    echo '<script language="javascript"> alert("Nomer atau perihal yang anda masukkan tidak ada");';
														 echo 'window.location.href = "sent.php";';
														 echo '</script>';
													}
												}

												elseif(empty($nomer))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND disposisi.tgl_agen = '$tanggal' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND disposisi.tgl_agen = '$tanggal' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc");
													
													if($query == FALSE) { 
													    echo '<script language="javascript"> alert("Tanggal atau perihal yang anda masukkan tidak ada");';
														 echo 'window.location.href = "sent.php";';
														 echo '</script>';
													}
												}

												elseif(empty($perihal))
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND disposisi.tgl_agen = '$tanggal' and header.no_hed like '%$nomer%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND disposisi.tgl_agen = '$tanggal' and header.no_hed like '%$nomer%' order by disposisi.tgl_agen desc");
													if($query == FALSE and $count==FALSE) { 
													    echo '<script language="javascript"> alert("Tanggal atau Nomer yang anda masukkan tidak ada");';
														 echo 'window.location.href = "sent.php";';
														 echo '</script>';
													}
												}

												else
												{
													$query=mysql_query("SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
													FROM disposisi , header , hasil , unit1 , unit2
													WHERE disposisi.id_hed = header.id_hed
													AND hasil.id_dis = disposisi.id_dis
													AND hasil.id_unit1 = unit1.id_unit1
													AND hasil.id_unit2 = unit2.id_unit2
													AND hasil.id_unit1 = $id_unit1
													AND disposisi.tgl_agen = '$tanggal' and header.no_hed like '%$nomer%' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc LIMIT $start, $limit");

													$count= mysql_query(
														"SELECT DISTINCT disposisi . * , header . * , hasil.id_unit1
															FROM disposisi , header , hasil , unit1 , unit2
															WHERE disposisi.id_hed = header.id_hed
															AND hasil.id_dis = disposisi.id_dis
															AND hasil.id_unit1 = unit1.id_unit1
															AND hasil.id_unit2 = unit2.id_unit2
															AND hasil.id_unit1 = $id_unit1
															AND disposisi.tgl_agen = '$tanggal' and header.no_hed like '%$nomer%' and header.perihal_hed like '%$perihal%' order by disposisi.tgl_agen desc");
													if($query == FALSE and $count==FALSE) { 
													    echo '<script language="javascript"> alert("Tanggal, nomer atau perihal yang anda masukkan tidak ada");';
														 echo 'window.location.href = "sent.php";';
														 echo '</script>';
													}
												}
											}
												

										}
										else
										{
											$query=mysql_query(
												"select distinct disposisi.*,header.*,hasil.id_unit1 
												from disposisi, header, hasil, unit1, unit2 
												where disposisi.id_hed= header.id_hed  and hasil.id_dis=disposisi.id_dis 
												and hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and hasil.id_unit1=$id_unit1
												order by disposisi.tgl_agen desc LIMIT $start, $limit");
											$count= mysql_query(
												"select distinct disposisi.*,header.*,hasil.id_unit1 
												from disposisi, header, hasil, unit1, unit2 
												where disposisi.id_hed= header.id_hed  and hasil.id_dis=disposisi.id_dis 
												and hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and hasil.id_unit1=$id_unit1
												order by disposisi.tgl_agen desc");
										}
										$rows=mysql_num_rows($count);
										$total=ceil($rows/$limit);
									?>

									<!-- header table right -->
									<div class="col-sm-4 hidden-xs">
										<div class="pull-right">
											<span class="paging-status"><?php echo $limit ?> of <?php echo $rows ?></span>
											<div class="btn-group">
											<?php
											if($id>1){?>
											  <a href="?id=<?php echo ($id-1);?>" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
											<?php 
											} 
											if($id!=$total)
											{?>
											  <a href="?id=<?php echo ($id+1);?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
											<?php } ?>
											</div>
										</div>
									</div><!-- End header table right -->

								</div><!-- End row header table -->
							</div><!-- End header table -->
							
							<!-- Message table -->
							<div class="table-responsive">
								<table class="table table-hover table-message">
									<tbody>
										<?php while($query2=mysql_fetch_array($query)){
											$receiver= $query2['id_dis'];
											$penerima=mysql_query("select * FROM unit2 , unit1 , disposisi , hasil WHERE hasil.id_dis = disposisi.id_dis AND hasil.id_unit1 = unit1.id_unit1
																and hasil.id_unit2 = unit2.id_unit2 and disposisi.id_dis =$receiver");

											if($query2['status_baca']==1){
												echo '<tr class="unread" style="background-color:rgba(136,135,106, 0.3);">';
											}
											else{
												echo '<tr class="unread">';
											}
											
											if($query2['sifat_dis']==0){?>
												<td style="width: 20px"><a href="javascript:;"> </a></td>
												<?php }
											else {?>
												<td style="width: 20px"><a href="javascript:;"><i class="fa fa-lock" style="color:#FFCC00;"></i></a></td>
												<?php } ?>
											
											<td style="width: 20px"><a href="javascript:;">
												<?php
													$total_terbaca = mysql_num_rows($penerima);
													$banyak_terbaca = mysql_num_rows(mysql_query("select * FROM unit2 , unit1 , disposisi , hasil 
														WHERE hasil.id_dis = disposisi.id_dis AND hasil.id_unit1 = unit1.id_unit1
														and hasil.id_unit2 = unit2.id_unit2 and disposisi.id_dis =$receiver and hasil.status_baca_hasil=1"));
													if($total_terbaca==$banyak_terbaca) echo '<i class="fa fa-star" style="color:green"></i> ';
													else echo '<i class="fa fa-star-half-o" style="color:green"></i> ';
												?>
											</a></td>

											<td><a href="read-sent.php?sial=<?php echo $query2['id_dis'];?>"><?php echo $query2['no_hed']?></a></td>
											
											<td><a href="read-sent.php?sial=<?php echo $query2['id_dis'];?>">
												<?php 
													if(!$penerima)
													{
														echo '</a></td>';
													}
													else
													{
														while($row=mysql_fetch_array($penerima))
														{
															echo $row['nama_unit2'];
															echo '<br>';
														}
														echo '</a></td>';
													}?>
											<td><a href="read-sent.php?sial=<?php echo $query2['id_dis'];?>">
												<?php if($query2['kla_dis']==1){?>
												<span class="label label-danger">Urgent</span> 
												<?php }
												echo $query2['perihal_hed']?></a></td>
											<!--<td><i class="icon-attach-3" data-toggle="tooltip" title="Business Contract.pdf - 2,238KB"></i></td>-->
											<td><?php echo $query2['tgl_agen']?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div><!-- End div .table-responsive -->
							<!-- End message table -->
							
							<!-- Footer message toolbar -->
							<div class="data-table-toolbar-footer">
								<div class="pull-right">
									<span class="paging-status"><?php echo $limit ?> of <?php echo $rows ?></span>
									<div class="btn-group">
									  <?php
											if($id>1){?>
											  <a href="?id=<?php echo ($id-1);?>" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
											<?php 
											} 
											if($id!=$total)
											{?>
											  <a href="?id=<?php echo ($id+1);?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
											<?php } ?>
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