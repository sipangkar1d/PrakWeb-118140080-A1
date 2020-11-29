<?php 
include 'koneksi.php';
?>
<form method="POST">
<pre>
Pencarian dengan Nama

<label>Nama :</label>

<input type="text" name="nama">
<input type="submit" name="submit" value="Cari">
</pre>
</form>

<?php 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$cariNama = mysqli_query($koneksi, "select mahasiswa.nrp, mahasiswa.nama, mahasiswa.alamat, jurusan.nama from mahasiswa inner join jurusan on jurusan.id_jur=mahasiswa.id_jur where mahasiswa.nama like '%$nama%'");
	$jumlah = mysqli_num_rows($cariNama);
	echo "Ditemukan : $jumlah<br>";
	while ($data = mysqli_fetch_array($cariNama)) {
		echo "<pre>";
		echo "NRP : ";echo $data[0];
		echo "<br>Nama : "; echo $data[1];
		echo "<br>Alamat : "; echo $data[2];
		echo "<br>Nama Jurusan : ";echo $data[3];
		echo "</pre>";
	}
}
 ?>