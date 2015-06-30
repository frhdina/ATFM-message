<html>
 <?php include "header.php";?>  
        <?php 
            if(isset($_GET['sial']))
            {
                $disposisi = $_GET['sial'];
                //echo $disposisi;
                $query=mysql_query("UPDATE disposisi set status_baca=1 where id_dis=$disposisi");
                $query1=mysql_query("select * from disposisi, header where disposisi.id_hed= header.id_hed and disposisi.id_dis=$disposisi");
                $row = mysql_fetch_assoc($query1);
            }
        ?>
        <!-- Right Sidebar End -->      
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                
                <!-- Begin Inbox -->
                <div class="box-messages">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="widget">
                                <div class="col-sm-12">
                                    <!-- Begin read message -->
                                    <!-- Message -->
                                    <div class="row">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <div class="btn-toolbar pull-right" role="toolbar">
                                                <div class="btn-group">
                                                    <br>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-download"></i> 
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="download-desposisi.php?sial=<?php echo $disposisi;?>">Download <b>Desposisi</b></a></li>
                                                            <li><a href="notadinas.php">Download <b>Desposisi sebelumnya</b></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group hidden-xs">
                                                        <a data-toggle="tooltip" title="" class="btn btn-primary">
                                                        <i class="icon-forward-1"></i> Forward</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 portlets">
                                            <div class="widget white-1">
                                                <div class="widget-header">
                                                    <h2><strong>Detail</strong></h2>
                                                    <div class="additional-btn">
                                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content padding">
                                                <table border=0>
                                                    <!--<tr>
                                                        <td><span style="color:grey;">From:</span></td>
                                                        <td> <?php //echo $departemen ?></td>
                                                    </tr>-->
                                                    <tr>
                                                        <td><span style="color:grey;">To:</span></td>
                                                        <td> 
                                                        <?php
                                                            $receiver = mysql_query("select * from hasil, unit1, unit2, disposisi
                                                                        where hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and hasil.id_dis=disposisi.id_dis
                                                                        and hasil.id_dis=$disposisi");
                                                            while($hasil=mysql_fetch_array($receiver))
                                                            {
                                                                echo $hasil['nama_unit2'];
                                                                if($hasil['status_baca_hasil']==1)
                                                                {
                                                                    echo '<i class="fa fa-check" style="color:blue;"></i>';
                                                                }
                                                                echo '<br>';
                                                            }
                                                        ?>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:grey;">Perihal:</span></td>
                                                        <td> <?php echo $row['perihal_hed']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:grey;">Status:</span></td>
                                                        <td>
                                                            <?php 
                                                                if($row['sifat_dis']==0) echo 'Biasa';
                                                                else echo 'Rahasia';?>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td><span style="color:grey;">Desposisi:</span></td>
                                                        <td>
                                                        <?php
                                                            $tipe= mysql_query("select * from tipekhusus,tipe,disposisi
                                                                        where tipekhusus.id_tipe= tipe.id_tipe and tipekhusus.id_dis=disposisi.id_dis
                                                                        and tipekhusus.id_dis=$disposisi");
                                                            while($hasil=mysql_fetch_array($tipe))
                                                            {
                                                                echo $hasil['nama_tipe'];
                                                                echo '<br>';
                                                            }
                                                        ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:grey;">Klasifikasi:</span></td>
                                                        <td> <?php 
                                                                if($row['kla_dis']==0) echo 'Segera';
                                                                else echo 'Sangat Segera';?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-sm-12 mail-body">
                                            <hr>
                                                <p>
                                                    <?php echo $row['isi_dis'];?>
                                                </p>
                                             <?php 
                                                $count = mysql_num_rows(mysql_query("select * from disposisi where id_hed=
                                                    (select distinct header.id_hed from disposisi, header where disposisi.id_hed= header.id_hed and disposisi.id_dis=$disposisi)"));
                                               if($count>1)
                                               {

                                                    echo '<hr><blockquote class="mail-reply">';
                                                    echo 'Forward:<br>';
                                                    echo 'From : ' ;
                                                    echo '</blockquote>';
                                               }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr>
                                            <div class="gallery-wrap">
                                                <?php 
                                                    $upload = mysql_query("select * from upload where id_hed=
                                                    (select distinct header.id_hed from disposisi, header where disposisi.id_hed= header.id_hed and disposisi.id_dis=$disposisi)");
                                                    while($hasil=mysql_fetch_array($upload)){
                                                ?>
                                                <div class="column">
                                                    <div class="inner">
                                                        <a href="uploads/<?php echo $hasil['nama_up'];?>">
                                                        <div class="img-wrap">
                                                            <img src="images/pdf.png">
                                                        </div>
                                                        <div class="caption-static">
                                                            <b><?php echo $hasil['nama_up'];?></b>
                                                            <br>
                                                            <b>(<?php echo $hasil['size_up'];?>) kb </b>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End div .col-md-10 -->
                    </div><!-- End div .row -->
                </div><!-- End div .box-info -->
                <!-- End inbox -->
        </div>
        <!-- End right content -->




        <!-- Modal New message -->  
        <div class="md-modal md-slide-stick-top" id="new-message">
            <div class="md-content">
            <div class="md-close-btn"><a class="md-close"><i class="fa fa-times"></i></a></div>
                <h3><strong>New</strong> Message</h3>
                <div>
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Message to">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Message subject">
                        </div>
                        <div class="form-group">
                            <textarea class="summernote-small form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-success btn-sm">Send</button>
                                <button class="btn btn-warning btn-sm">Draft</button>
                            </div>
                            <div class="col-xs-4">
                                <p class="quick-post message">
                                    <a><i class="fa fa-picture-o"></i></a>
                                    <a><i class="fa fa-video-camera"></i></a>
                                    <a><i class="icon-attach-3" data-toggle="tooltip" title="Business Contract.pdf - 2,238KB"></i></a>
                                </p>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
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
    <!-- Page Specific JS Libraries -->
    <script src="assets/libs/summernote/summernote.js"></script>
    <script src="assets/js/pages/new-message.js"></script>
    
</body>
</html>