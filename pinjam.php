<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan.peminjaman buku</title>
</head>
<body bgcolor="#00FFFF">
	<p><h2 align="center">Peminjaman Buku</h2></p>
	<form name="from1" method="post" action="simpan_pinjam.php">
		<table width="50%" border="0" align="center">
			<tr>
				<td width="100" align="center">Nama</td>
				<td width="73"><input type="text" name="txt_nama" id="txtnama" size="50"></td>
			</tr>
			<tr>
				<td width="100" align="center">No.Identitas</td>
				<td width="73"><input type="text" name="txt_nim" id="noidentitas" size="50"></td>
			</tr>
			<tr>
				<td width="100" align="center">No.Id buku</td>
				<td width="73"><input type="text" name="txt_idbuku" id="noidentitas" size="50"></td>
			</tr>
			<tr>
				<td width="100" align="center">Judul buku</td>
				<td width="73"><input type="text" name="txt_judulbuku" id="noidentitas" size="50"></td>
			</tr>
			<tr>
				<td width="100" align="center">Nama Pengarang</td>
				<td width="73"><input type="text" name="txt_pengarang" id="noidentitas" size="50"></td>
			</tr>
			<tr>
				<td> Tanggal peminjaman </td>
				<td>
					<input align="left" type="text" name="ttl_pinjam" size="10">
					<!-- <select name="sBulan" id="sBulan">
						<option value="Pilih" selected>Pilih</option>
						<option value="Januari" selected>Januari</option>
						<option value="Februari" selected>Februari</option>
						<option value="Maret" selected>Maret</option>
						<option value="April" selected>April</option>
						<option value="Mei" selected>Mei</option>
						<option value="Juni" selected>Juni</option>
						<option value="Juli" selected>Juli</option>
						<option value="Agustus" selected>Agustus</option>
						<option value="September" selected>September</option>
						<option value="Oktober" selected>Oktober</option>
						<option value="November" selected>November</option>
						<option value="Desember" selected>Desember</option>
					</select>
					<select name="sTahun" id="sTahun">
						<option value="2018" selected>2018</option>
						<option value="2019" selected>2019</option>
					</select> --></td>
			</tr>
			<tr>
				<td> Tanggal pengembalian </td>
				<td>
					<input align="left" type="text" name="ttl_kembali" size="10">
					<!-- <select name="sBulan" id="sBulan">
						<option value="Pilih" selected>Pilih</option>
						<option value="Januari" selected>Januari</option>
						<option value="Februari" selected>Februari</option>
						<option value="Maret" selected>Maret</option>
						<option value="April" selected>April</option>
						<option value="Mei" selected>Mei</option>
						<option value="Juni" selected>Juni</option>
						<option value="Juli" selected>Juli</option>
						<option value="Agustus" selected>Agustus</option>
						<option value="September" selected>September</option>
						<option value="Oktober" selected>Oktober</option>
						<option value="November" selected>November</option>
						<option value="Desember" selected>Desember</option>
					</select>
					<select name="sTahun" id="sTahun">
						<option value="2018" selected>2018</option>
						<option value="2019" selected>2019</option>
					</select> --></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="submit" value="OK">
					<input type="reset" name="Reset" value="Cencel"></center>
				</td>
			</tr>
			
</body>
</html>