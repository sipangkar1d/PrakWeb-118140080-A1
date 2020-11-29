<?php 
$koneksi = mysqli_connect("localhost", "root", "", "prakweb3");
if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
	return ($koneksi);
	}

?>