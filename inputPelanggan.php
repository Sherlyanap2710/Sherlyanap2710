<?php
include("connect.php");//koneksi kedatabase

//variabel untuk menampung data yang diinputkan

$Kode = $_POST["kode"];
$Nama = $_POST["nama"];
$Deskripsi = $_POST["deskripsi"];
$Stok = $_POST["stok"];
$Harga = $_POST["harga"];
$Berat = $_POST["berat"];

//kondisi jika data masih kosong 

if (trim($Kode)==""){
	echo "Kode masih kosong,isi dengan benar";
	}
		elseif (trim($Nama)==""){
		echo "Nama masih kosong,isi dengan benar";
		}
	elseif (trim($Deskripsi)==""){
		echo "Deskripsi masih kosong,isi dengan benar";
		}
			elseif (trim($Stok)==""){
		echo "Stok masih kosong,isi dengan benar";
		}
			elseif (trim($Harga)==""){
		echo "Harga masih kosong,isi dengan benar";
		}
				elseif (trim($Berat)==""){
		echo "Berat masih kosong,isi dengan benar";
		}
		else{
		
		
		$input="insert into barang(Kode,Nama,Deskripsi,Stok,Harga,Berat)
			values ('$Kode','$Nama','$Deskripsi','$Stok','$Harga','$Berat')";
			$hasil = mysql_query($input,$conn);
			echo "<br>Input Data Berhasil<br>";
			}
			?>