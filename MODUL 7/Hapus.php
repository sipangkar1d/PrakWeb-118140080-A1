<?php 
include 'koneksi.php';
?>

<form method="POST">
<pre>
<label>Hapus Mahasiswa dengan NRP :</label>

<input type="text" name="nrp">

<input type="submit" name="submit" value="Hapus">
</pre>
</form>

<?php 
if (isset($_POST['submit'])) {
	$nrp = $_POST['nrp'];
	$hapus = mysqli_query($koneksi, "delete from mahasiswa where nrp = $nrp");
	echo "Sukses menghapus";
}
 ?>