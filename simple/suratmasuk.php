</html>
<?php include "header.php"; ?>
  <!-- content -->
  <section id="content">
    <section class="hbox stretch">
			<section>
				<section class="vbox">
					<section class="w-f scrollable" style="height:100%;">
					 <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
					 <section class="scrollable padder">
              <section class="row m-b-md">
                  <form role="search" class="navbar-form navbar-right">
                      <div class="form-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </section>

<div class="row">
<div class="col-sm-12">
      <section class="panel panel-default">
      <header class="panel-heading text-right bg-light">
        <ul class="nav nav-tabs pull-left">
          <li class="active"><a href="#tab-1" data-toggle="tab" id="d_perusahaan"><i class="fa fa-th-large" ></i> KP Reguler</a></li>
          <li><a href="#tab-2" data-toggle="tab" id="d_pengajuan"><i class="fa fa-user "></i> Pengajuan</a></li>
          <li><a href="#tab-3" data-toggle="tab" id="d_pengajuan"><i class="fa fa-bookmark"></i> Nilai KP</a></li>
        </ul>
        <span class="hidden-sm">Information</span>
       </header>
      <div class="panel-body">
        <div class="tab-content">
          <div class="tab-pane fade active in" id="tab-1">
               <div class="col-sm-12">
                <form class="bs-example form-horizontal">
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Status</strong></label>
                        <div class="col-lg-4">
                          <p class="form-control-static">
                          Disetujui KP                          </p>
                        </div>
                        <label class="col-lg-2 control-label hidden-xs " style="text-align:center;"><strong>Periode Awal</strong></label>
                        <div class="col-lg-4 hidden-xs " >
                          <p class="form-control-static">
                           21 June 2015                          </p>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Tempat KP</strong></label>
                        <div class="col-lg-4">
                          <p class="form-control-static">
                          AIR NAV INDONESIA, TANGERANG                          </p>
                        </div>

                        <label class="col-lg-2 control-label hidden-xs " style="text-align:center;"><strong>Periode Akhir</strong></label>
                        <div class="col-lg-4 hidden-xs ">
                          <p class="form-control-static">
                           21 July 2015                          </p>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Pembimbing Internal</strong></label>
                        <div class="col-lg-4">
                          <p class="form-control-static">
                          DINI ADNI NAVASTARA                          </p>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label "><strong>Pembimbing Eksternal</strong></label>
                        <div class="col-lg-4">
                          <p class="form-control-static">
                          -                          </p>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Fungsi Keteknikan</strong></label>
                        <div class="col-lg-10">
                         <p class="form-control-static">
                                                                                                - Komputasi Cerdas dan Visualisasi<br/>                                                                                     </p>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Anggota</strong></label>
                        <div class="col-lg-10">
                          <p class="form-control-static">
                          - KELLY ROSSA SUNGKONO <br />- IZDIHAR FARAHDINA <br />                          </p>
                        </div>
                      </div>

                      <div class="line line-dashed b-b line-lg pull-in" style="margin-top:0; margin-bottom:0;"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label"><strong>Catatan</strong></label>
                        <div class="col-lg-10">
                          <p class="form-control-static text-danger">
                          Anda tidak dapat mengajukan proposal jika salah satu proposal Anda telah di setujui.
                          </p>
                        </div>
                      </div>
                 </form>
               </div>
          </div>
          <div class="tab-pane fade " id="tab-2">
               <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table m-b-none" data-ride="datatables" id="example">
                            <thead class="bg-light">
                                <tr>
                                  <th>Status</th>
                                  <th>Perusahaan</th>
                                  <th>Pembimbing Eksternal</th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
              </div>
          </div>
          <div class="tab-pane fade" id="tab-3">
                    <div class="col-sm-12">
              <blockquote>
                  Maaf nilai belum keluar
              </blockquote>
          </div>
                    
          </div>
        </div>
       </div>
    </section>
  </div>
</div>

<!--<script type="text/javascript">

  var person_id = "3082";
  $('[data-ride="datatables"]').each(function() {

        var oTable = $(this).dataTable({

          "sAjaxSource": "https://simkp.its.ac.id/index.php/backend/json",
          "bProcessing": true,
          "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
          "sPaginationType": "full_numbers",
          "aoColumnDefs":[

          {
              "aTargets": [ 0 ],
              "mData": "status_nama"
          },{
              "aTargets": [ 1 ],
              "mData": "perusahaan_nama",
			  "mRender" : function (url,type,full){
				button  = "<form action='"+BASE_URL+"index.php/perusahaan' method='post'>";
				button += "<input type='hidden' name='csrf_token' value='"+token+"' >";
				button += "<input type='hidden' name='id' value='"+full.perusahaan_id+"'>";
				button += "<button type='submit' class='btn btn-link'>"+full.perusahaan_nama+"</button>";
				button += "</form>";
				return button;
			  }
          },{
              "aTargets": [ 2 ],
              "mData": "pembimbing_eksternal",
              "bSortable": false
          },{
              "aTargets": [ 3 ],
              "bSortable": false,
              "mData": "kpreguler_id",
      			  "mRender": function ( url, type, full )  {
        				var button;
        				if(full.m_status_id == 6 ){
          					button  = "<form action='"+BASE_URL+"index.php/kpreguler' method='post'>";
                    button += "<input type='hidden' name='csrf_token' value='"+token+"' >";
                    button += "<input type='hidden' name='task' value='4'><input type='hidden' name='kpreguler_id' value='"+url+"'>";
                    button += "<input type='hidden' name='person_id' value='"+person_id+"'>";
                    button += "<button class='btn btn-default btn-xs btn-primary' type='submit' value='1' name='approve_choise'>";
                    button += "<i class='fa fa-mail-forward'></i> Approve</button></form>";
        				} else if(full.m_status_id == 2){
        					  button = "<a href='"+ BASE_URL + "index.php/kpreguler/iniFormKepada/"+url+"' data-toggle='ajaxModal' class='btn btn-default btn-xs btn-primary'><i class='fa fa-print'></i> Cetak Pengajuan KP</a>";
        				} else {
                    button = "";
                }
        				return button;
      			  }
          }]
        });

		$(document).on( 'click', '#example tbody tr', function(){
         if ( oTable.fnIsOpen(this)) {
           $(this).removeClass('selected');
           oTable.fnClose( this);
         }
         else {
           oTable.fnOpen( this, fnFormatDetails(oTable, this), 'details' );
           $(this).addClass('selected');
         }
		  });
    });

	function fnFormatDetails ( oTable, nTr )
	{
  		var aData             = oTable.fnGetData( nTr );
  		var fungsi_keteknikan = "";
      var anggota_kelompok  = "";

  		var obj = $.ajax({
  			url : BASE_URL + "index.php/jurusan",
  			type: "POST",
  			dataType : "JSON",
  			global: false,
  			async:false,
  			data: { task : 4 , kpreguler_id : aData.kpreguler_id, csrf_token : token},
  			success: function(response){
  				return response;
  			}
  		});

      var kelompok = $.ajax({
        url : BASE_URL + "index.php/kpreguler/getKelompok",
        type: "POST",
        dataType : "JSON",
        global: false,
        async:false,
        data: {kpreguler_id : aData.kpreguler_id, csrf_token : token},
        success: function(response){
          // console.log(response);
          return response;
        }
      }); 

      // console.log(kelompok);

      for (var i = 0; i < kelompok.responseJSON.length; i++) {
        anggota_kelompok +=  "- "+kelompok.responseJSON[i].person_name + "<br />";
      }

  		for (var i = 0; i < obj.responseJSON.length; i++) {
  			fungsi_keteknikan +=  "- "+obj.responseJSON[i].teknik_nama + "<br />";
  		}
    	var sOut = '<table cellpadding="5" cellspacing="0" border="0" >';
      sOut += '<tr><td><strong>Periode</strong></td><td >'+aData.kpreguler_periode_awal+"  s/d  "+aData.kpreguler_periode_akhir+'</td></tr>';
      sOut += '<tr><td><strong>Pembimbing Internal</strong></td><td >' +aData.pembimbing_internal+'</td></tr>';
      sOut += '<tr><td><strong>Kelompok</strong></td><td > '+ anggota_kelompok +' </td></tr>';
      sOut += '<tr><td><strong>Keteknikan</strong></td ><td>'+fungsi_keteknikan+'</td></tr>';
      sOut += '</table>';

		  return sOut;
	}
</script>-->
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



<script src="js/app.v1.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/app.plugin.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/bootstrap-filestyle.min.js"></script>
<script src="js/function.js"></script>

</body>
</html>
