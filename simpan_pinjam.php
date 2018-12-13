<?php
 	include'koneksi.php';
 	$nama_anggota = $_POST['txt_nama'];
 	$id_anggota = $_POST['txt_nim'];
 	$id_buku = $_POST['txt_idbuku'];
 	$judul_buku = $_POST['txt_judulbuku'];  
 	$pengarang = $_POST['txt_pengarang'];
 	$ttl_pinjam = $_POST['ttl_pinjam'];
 	$ttl_kembali = $_POST['ttl_kembali'];

 	$query = "insert into peminjam values('$nama_anggota','$id_anggota','$id_buku','$judul_buku','$pengarang','$ttl_pinjam','$ttl_kembali')";
 	$ext = mysqli_query($koneksi,$query);
 	echo $query;
 	echo "<script>alert('buku berhasil di pinjam')</script>";
 	header("location:home.php")
 ?>