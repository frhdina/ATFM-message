<?php
	session_start(); // Memulai Session
	$error=''; // Variabel untuk menyimpan pesan error
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
				$error = "Username or Password is invalid";
				echo ($error);
		}
		else
		{
			// Variabel username dan password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Membangun koneksi ke database
			include "koneksi.php";
			// Mencegah MySQL injection 
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			// SQL query untuk memeriksa apakah karyawan terdapat di database?
			$query = mysql_query("select * from unit1 where pas_unit='$password' AND user_unit='$username'");
			$rows = mysql_num_rows($query);
				if ($rows == 1) 
				{
					$_SESSION['username']=$username; 
					header("location: ../inbox.php"); // Mengarahkan ke halaman profil
				} 
				else 
				{
					$password=mysql_num_rows(mysql_query("select * from unit1 where pas_unit='$password'"));
					$username=mysql_num_rows(mysql_query("select * from unit1 where user_unit='$username'"));
					if($password !=1)
					{
						$error = "Password wrong, please try again";
						echo ($error);
					}
					else if ($username !=1)
					{
						$error = "Username wrong, please try again";
						echo ($error);
					}
					else
					{
						$error = "Username or password wrong, please try again";
						echo ($error);
					}
				}
		}
	}
	?>