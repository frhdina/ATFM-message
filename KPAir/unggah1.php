<?php
 	include "configure/koneksi.php";
	if (isset($_POST['submit'])) 
	{
		$from_hed = $_POST["from_hed"]; // Sender Name
		$no_agen = $_POST["no_agen"]; // Sender's email ID
		$tgl_agen = $_POST["tgl_agen"]; // Sender's Message
		$perihal_hed = $_POST["perihal_hed"]; // Sender Name
		$sifat_dis = $_POST["sifat_dis"]; // Sender's email ID
		$kla_dis = $_POST["kla_dis"]; // Sender's Message
		$id_tipe = $_POST["id_tipe"];
		$id_unit2 = $_POST["id_unit2"];
		$id_unit1 = $_POST["id_unit1"];
		$no_hed = $_POST["no_hed"];
		$tgl_hed = $_POST["tgl_hed"];
		$isi_dis = $_POST["isi_dis"];

		$header= mysql_query("INSERT INTO header(from_hed, no_hed, tgl_hed,perihal_hed) 
			VALUES('$from_hed','$no_hed','$tgl_hed','$perihal_hed')");

		$row=mysql_fetch_assoc(
			mysql_query("select id_hed from header order by id_hed desc limit 1"));
		$id_hed =$row['id_hed'];

		$header1= mysql_query("INSERT INTO disposisi(id_hed,no_agen,tgl_agen,sifat_dis,kla_dis,isi_dis) 
			VALUES('$id_hed','$no_agen','$tgl_agen','$sifat_dis','$kla_dis','$isi_dis')");
		$row1=mysql_fetch_assoc(mysql_query("select id_dis from disposisi order by id_dis desc limit 1"));
		$id_dis =$row1['id_dis'];

		for ($i=0; $i < sizeof($id_tipe) ; $i++) 
		{
			{
				$query = mysql_query("INSERT INTO tipekhusus(id_dis,id_tipe) values ('$id_dis','$id_tipe[$i]')");
			}
		}

		for ($j=0; $j < sizeof($id_unit2) ; $j++) 
		{
			{
				$query1 = mysql_query("INSERT INTO hasil(id_unit2,id_unit1,id_dis) values ('$id_unit2[$j]','$id_unit1','$id_dis')");
			}
		}

		
		$j = 0;     // Variable for indexing uploaded image.
		$target_path = "uploads/";     // Declaring Path for uploaded images.
		echo '<script language="javascript">';
		echo 'alert("';
		for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
		{
			// Loop to get individual element from the array
			$validextensions = array("pdf");      // Extensions which are allowed.
			$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
			$file_extension = end($ext); // Store extensions in the variable.
			$names= md5(uniqid()) . "." . $ext[count($ext) - 1];
			$target_path = $target_path . $names;     // Set the target path with a new name of image.
			$j = $j + 1; 
			$size=$_FILES["file"]["size"][$i];     // Increment the number of uploaded images according to the files in array.
			if (($_FILES["file"]["size"][$i] < 100000000)     // Approx. 100kb files can be uploaded.
			&& in_array($file_extension, $validextensions)) 
			{
				if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) 
				{
					// If file moved to uploads folder.
					$sql= "INSERT INTO upload(id_hed, nama_up, size_up) VALUES('$id_hed','$names','$size')";
					mysql_query($sql);

					//echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
					echo $j. ')Image uploaded successfully!")';
				} 
				else {     //  If File Was Not Moved.
					//echo $j. ').<span id="error">please try again!.</span><br/><br/>';
					echo 'alert("There has problem, please try again")';
				}
			} 
			else 
			{     //   If File Size And File Type Was Incorrect.
				//echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
				echo 'alert("Invalid File size or type")';
			}
		}
		echo '</script>';
	}
?>