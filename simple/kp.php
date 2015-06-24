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
                  <div class="col-sm-6">
                    <h3 class="m-b-xs text-black"><i class="fa fa-1x fa-inbox icon"> </i>      Inbox</h3>
                  </div>
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
                    <!-- menu message -->
                    <header class="panel-heading text-right bg-light">
                    <div class="data-table-toolbar">
                      <div class="row">
                        <div class="col-sm-8"> 
                          <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                              <button class="btn btn-default" data-toggle="dropdown">
                                <i class="fa fa-square-o icon"></i> <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#fakelink">All</b></a></li>
                                <li><a href="#fakelink">Read</b></a></li>
                                <li><a href="#fakelink">Unread</a></li>
                              </ul>
                              <button title="Move to Trash" class="btn btn-default">
                                <i class="fa fa-trash-o"></i>
                              </button>
                            </div>    
                          </div>
                        </div>

                        <div class="col-sm-4 hidden-xs">
                          <div class="pull-right">
                            <span class="paging-status">2 of 2</span>
                            <div class="btn-group">
                              <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
                              <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <header>  

                    <!-- content message -->
                    <div class="table-responsive">
                    <table class="table table-hover table-message">
                    <tbody>
                      <tr class="unread">
                        <td style="width: 20px"><input type="checkbox" class="rows-check"></td>
                        <td style="width: 20px;"><a href="javascript:;"><i class="fa fa-star icon"></i></a></td>
                        <td><a href="read-message.php">General Manager</a></td>
                        <td>
                          <a href="read-message.php">Undangan Rapat</a>
                          <br> Klasifikasi : Segera
                          <br> Desposisi : 
                        </td>
                        <td><i class="fa fa-paperclip icon" data-toggle="tooltip" title="Rapat.pdf - 2,238KB"></i></td>
                        <td>Monday, 15:00</td>
                      </tr>
                      <tr class="read">
                        <td style="width: 20px"><input type="checkbox" class="rows-check"></td>
                        <td style="width: 20px;"><a href="javascript:;"><i class="fa fa-star-o icon"></i></a></td>
                        <td><a href="read-message.html">Deputy of ....</a></td>
                        <td><a href="read-message.html">Something to do</a>
                          <br> Klasifikasi : Segera 
                          <br> Desposisi :  
                        </td>
                        <td> </td>
                        <td>Monday, 18:30</td>
                      </tr>
                    </tbody>
                    </table>
                    </div><!-- End div .table-responsive -->
                  </section><!-- End message table -->
                </div>
              </div>

            </div>
        </div>
       </div>
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
