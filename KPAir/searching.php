<?php
 	include "configure/koneksi.php";
	if (isset($_POST['submit'])) 
	{
		$perihal = $_POST["sperihal"];
		$nomer = $_POST["snomer"];
		$stanggal = $_POST["stanggal"];
	}
?>