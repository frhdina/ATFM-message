<html>
 <?php include "header.php";?>  
 
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
                                                            <li><a href="desposisi.php">Download <b>Desposisi</b></a></li>
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
                                                    <tr>
                                                        <td><span style="color:grey;">From:</span></td>
                                                        <td> General Manager</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:grey;">To:</span></td>
                                                        <td> Deputy of .... <i class="fa fa-check" style="color:blue;"></i> <br> Deputy of ... </td> 
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:grey;">Perihal:</span></td>
                                                        <td> Undangan Rapat</td>
                                                    </tr>
                                                     <tr>
                                                        <td><span style="color:grey;">Desposisi:</span></td>
                                                        <td> </td>
                                                    </tr>
                                                     <tr>
                                                        <td><span style="color:grey;">Klasifikasi:</span></td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-sm-12 mail-body">
                                            <hr>
                                            <!-- isi yang asli -->
                                            <hr>
                                            <blockquote class="mail-reply">
                                                <!-- isi yang dsposisi sebelumnya -->
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr>
                                            <div class="gallery-wrap">
                                                <div class="column">
                                                    <div class="inner">
                                                        <a title="Image title here" href="images/big/img005.jpg" class="zooming">
                                                        <div class="img-wrap">
                                                            <img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img005_small.jpg">
                                                        </div>
                                                        <div class="caption-static">
                                                            website-banner-1.jpg (1.264KB)
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="inner">
                                                        <a title="Image title here" href="images/big/img002.jpg" class="zooming">
                                                        <div class="img-wrap">
                                                            <img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img002_small.jpg">
                                                        </div>
                                                        <div class="caption-static">
                                                            website-banner-2.jpg (2.033KB)
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
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