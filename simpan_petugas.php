<?php
 	include'koneksi.php';
 	$id_petugas = $_POST['nip'];  
 	$nama_petugas = $_POST['nama_p'];
 	$telepon = $_POST['telepon_p'];
 	$alamat = $_POST['alamat_p'];

 	$query = "insert into petugas values('$id_petugas','$nama_petugas','$telepon','$alamat')";
 	$ext = mysqli_query($koneksi,$query);
 	echo $query;

 	header("location:index.php")
 ?>