<pre>
Tambah Jurusan :
<form method="POST">
ID Jurusan   : <input type="text" name="idJur">

Nama Jurusan : <input type="text" name="namaJur">
<input type="submit" name="submit" name="Kirim">

</form>

<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$idJur = $_POST['idJur'];
	$namaJur = $_POST['namaJur'];

	$kueri = "insert into jurusan (id_jur, nama) values ('$idJur', '$namaJur')";
	return (mysqli_query($koneksi, $kueri));
	echo "Data ditambahkan ! ";

}
 ?>

 </pre>