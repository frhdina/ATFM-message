<?php
	require('configure/html2pdf.php');
	include "configure/session.php";
			if(isset($_GET['sial']))
            {
                $disposisi = $_GET['sial'];
                $query1=mysql_query("select * from disposisi, header where disposisi.id_hed= header.id_hed and disposisi.id_dis=$disposisi");
                $row = mysql_fetch_assoc($query1);
                $receiver = mysql_query("select * from hasil, unit1, unit2, disposisi
                    where hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and hasil.id_dis=disposisi.id_dis
                    and hasil.id_dis=$disposisi");
                $hasil = mysql_fetch_assoc($receiver);
                 $tipe= mysql_fetch_assoc(mysql_query("select * from tipekhusus,tipe,disposisi
               where tipekhusus.id_tipe= tipe.id_tipe and tipekhusus.id_dis=disposisi.id_dis
               and tipekhusus.id_dis=$disposisi"));
            }

    $pdf=new PDF();
    $pdf->SetFont('Arial','',12);
    $pdf->AddPage();
    $text='
		<table border="1">
		<tr>
			<td style="width:20%">
			<img src="assets/img/logoairnav.jpg" width="20%"></img> Airnav Indonesia
		</td>
		<td style="text-align:right;">
			<b>LPPNPI<br>
			JAKARTA AIR TRAFFIC SERVICES CENTRE <br>
			BANDARA UDARA SOEKARNO - HATTA <br>
			</b>
		</td>
		</tr>
		<tr>
		<td colspan="2">
			<center><b>
			LEMBAR DISPOSISI <br>
			' .$departemen. '
			</b></center>
		</td>
		</tr>
		<tr>
		<td rowspan="2">
			<B>AGENDA</B>
			<BR><br>
			<b>No.</b>'  .$row['no_agen']. 
			'<br>
			<b>Tgl.</b>' .$row['tgl_agen'].
		'</td>
		</tr>
		<tr>
		<td style="padding:0 0 8px 15px">
		<br>
		Surat dari   : ' .$row['from_hed'].
		'<br>
		Nomor        : ' .$row['no_hed'].
		'<br>
		Tanggal      : ' .$row['tgl_hed'].
		'<br>
		Perihal      : ' .$row['perihal_hed'].
		'<br>
		Sifat		 : 
			<?php if(' .$row['sifat_dis']. '==0) echo "Biasa"; 
			else echo "Rahasia"; ?>
		<br>
		Klasifikasi  : 
			<?php if(' .$row['kla_dis']. '==0) echo "Segera"; 
			else echo "Sangat Segera";
		</td>
		</tr>
		<tr>
		<td colspan="2">
		<b>Kepada Yth    : </b>
		<br>
		<?php
		 $receiver = mysql_query("select * from hasil, unit1, unit2, disposisi
                    where hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and hasil.id_dis=disposisi.id_dis
                    and hasil.id_dis=$disposisi");
        while($hasil=mysql_fetch_array($receiver))
        {
            ' .$hasil['nama_unit2'].
            'echo <br>;
        }?>
        </tr>
	<tr>
	<td>
	<b>DISPOSISI:</b><br>
	<?php 
		 $tipe= mysql_query("select * from tipekhusus,tipe,disposisi
               where tipekhusus.id_tipe= tipe.id_tipe and tipekhusus.id_dis=disposisi.id_dis
               and tipekhusus.id_dis=$disposisi");
        while($hasil=mysql_fetch_array($tipe))
            {
               ' .$tipe['nama_tipe']. ';
               echo <br>;
            }
    <br>
	<br>
	<b>Catatan:</b><br>
	<i>Lembar disposisi ini <br>
	menjadi bagian yang <br>
	tidak terpisahkan dari <br>
	nomor dan tanggal <br>
	surat pada agenda <br></i>
	</td>
	<td style="vertical-align: text-top;">
	<b> CATATAN </b>
	<br>
	' .$row['isi_dis']. '
	<br>
	<br>
	<center>
	Tangerang,' .$row['tgl_agen']. '
	<br>
	' .$departemen. '
	<br>
	<br>
	<br>
	<br>
	<u> ' .$nama. '</u>
	</u>
	</center>
	</td>
	</tr>
	</table>';

    if(ini_get('magic_quotes_gpc')=='1')
        $text=stripslashes($text);
    $pdf->WriteHTML($text);
    $pdf->Output();
    exit;
?>