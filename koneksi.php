<?php
$db_host = "localhost"; //nama sever host
$db_user = "root"; 		// username access database
$db_pass = "";			// password access database
$db_name = "perpustakaan_web";	// nama database

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo 'Koneksi berhasil ^_^';
}
?>