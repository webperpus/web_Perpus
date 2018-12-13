<?php
 	include'koneksi.php';
 	$id_anggota = $_POST['nim'];  
 	$nama_anggota = $_POST['nama'];
 	$telepon = $_POST['telepon'];
 	$alamat = $_POST['alamat'];

 	$query = "insert into anggota values('$id_anggota','$nama_anggota','$telepon','$alamat')";
 	$ext = mysqli_query($koneksi,$query);
 	echo $query;

 	header("location:index.php")
 ?>
