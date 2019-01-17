<html>
<head>
<title>Input Data Barang </title>
<link rel="stylesheet" type="text/css" href="input.css" >
</head>
<body>
	<h2><div class="jdl">KELOLA DATA BARANG</div></h2>
	<br>
	<br>
<form action = "inputPelanggan.php" method = "post" p align = "center">
	<table width=50% height=5% align="center">
	<tr>
	<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width=50% height=5% align="center">
	<tr>
	<td><b>Kode:</b></td>
	<td><input class="atr" type="text" name="kode"></td>
	</tr>
	<tr>
	<td><b>Nama:</b></td>
	<td><input class="atr" type="text" name="nama"></td>
	</tr>
	<tr>
	<td><b>Deskripsi:</b></td>
	<td><input class="hh" name="deskripsi"></td>
	</tr>
	<tr>
	<td><b>Stok:</b></td>
	<td><input class="atr" type="text" name="stok"></td>
	</tr>
	<tr>
	<td><b>Harga:</b></td>
	<td><input class="atr" type="text" name="harga"></td>
	</tr>
	<tr>
	<td><b>Berat:</b></td>
	<td><input class="atr" type="text" name="berat">gram</td>
	</tr>
	</table>

	
	<p align="center"><a href = "input.php"><Button class="btn">Tambah</Button></a></p>
	</form>
	
</body>
</html>