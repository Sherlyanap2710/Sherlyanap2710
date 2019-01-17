<html>
	<head>
		<title> Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="input.css"/>
	</head>
	<body>
		<h3><div class="jdl">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
	<table width=80% height=5% align="center">
	<tr>
		<td><b><h2> Data Barang</h2></td></b>
		<td><p align="right"><a href = "input.php"><Button class="btn">Tambah</Button></a>
		</tr>
	</table>
	<br>
		<table width=80% height=40% align="center" border=1>
			<tr align="center">
				<td height="25" width=30%>Kode</td>
				<td height="25" width=30%>Nama</td>
				<td height="25" width=25%>Harga</td>
				<td height="25" width=25%>Aksi</td>
			</tr>
			
			<?php
			include("connect.php");
			$tampil = mysql_query("select * from barang");
			while ($data = mysql_fetch_array($tampil)) {
				?>
				
				<tr width = 80% height = 30% align = "center">
					<td> <?php echo $data['kode']; ?> </td>
					<td> <?php echo $data['nama']; ?> </td>
					<td> <?php echo $data['harga']; ?> </td>
					<td class="text"><a href="edit.php?id=<?php echo $data['id'];?>">Edit  |</a>
					<a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a></td>
				</tr>
				<?php
			}
		?>
		<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("config.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
		<table align="center">
		<br>
		<br>
		<td>
			<tr>
			<td><p align="right"><a href = "logout.php"><Button class="btn">LogOut</Button></a>
			</br>
			</br>
			</tr>
			</td>
			</table>
		
			
			
			</table>
	</body>
</html>