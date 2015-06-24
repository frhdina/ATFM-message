<html>
<?php include "header.php";  ?>
     <!-- .content -->
    <section id="content">
        <section class="hbox stretch">

							<section>
					<section class="vbox">
					<section class="w-f scrollable" style="height:100%;">
					<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
					<header class="header bg-white b-b b-light">
    <p>
      <i class="i i-checked icon"> </i> <span><strong>Ganti Password</strong></span>
    </p>
</header>
<section class="scrollable padder">
<section class="row m-b-md"></section>

<div class="row">
  <div class="col-sm-12">
         <div class="col-sm-7">
    <section class="panel panel-default">
    <header class="panel-heading font-bold">Form Password</header>
    <div class="panel-body">
        <form class="bs-example form-horizontal" method="post" action="https://simkp.its.ac.id/index.php/password" onsubmit="return check()">
            <input type="hidden" name="task"  value="2">
            <input type="hidden" name="csrf_token"
                   value="f015011ac2d5e1e3bdc252bdb508c0dd" />
            <div class="form-group">
                <label class="col-lg-4 control-label"><strong>Password Lama</strong></label>
                <div class="col-lg-8">
                    <input type="password" name="password_lama" id="password_lama" class="form-control" value="" required>
                </div>
            </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-lg-4 control-label"><strong>Password Baru</strong></label>
                <div class="col-lg-8">
                <input type="password" name="password_baru" id="password_baru" class="form-control" value="" required>
                </div>
            </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-lg-4 control-label"><strong>Confirm Password Baru</strong></label>
                <div class="col-lg-8">
            <input type="password" name="password_confirm" id="password_confirm" class="form-control"   value="" required>
                </div>
            </div>
    </div>
    <footer class="panel-footer text-right bg-light lter">
          <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </footer>
    </section>
    </div>
  </div>
</div>
</section>

<script type='text/javascript'>
function check() {
    if (document.getElementById('password_confirm').value != document.getElementById('password_baru').value) {
	    $('#password_confirm').addClass('parsley-error');
		return false;
    } else {
		return true;
	}

}
</script>
					</div>
					</section>
					</section>
				</section>
			
        </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>
    <!-- /content -->

    </section>
  </section>

</section>
<!-- Bootstrap -->
<!-- App -->



<script src="https://simkp.its.ac.id/assets/dev/js/app.v1.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/script/app.plugin.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/js/datepicker/datepicker.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/js/chosen/chosen.jquery.min.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/js/file-input/bootstrap-filestyle.min.js"></script>
<script src="https://simkp.its.ac.id/assets/dev/script/function.js"></script>

</body>
</html>
