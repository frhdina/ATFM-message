<?php
	// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
	include "koneksi.php";
	session_start();// Memulai Session
	// Menyimpan Session
	$user_check=$_SESSION['username'];
	// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
	$ses_sql=mysql_query("select * from unit1 where user_unit='$user_check'");
	$row = mysql_fetch_assoc($ses_sql);
	$username =$row['user_unit'];
	$nama = $row['nama_pemegang'];
	$departemen =$row['nama_unit'];
	$id_unit1 = $row['id_unit1'];
	if(!isset($username)){
		header('Location: login.php'); // Mengarahkan ke Home Page
	}
?>