<?php 
include 'koneksi.php';
 ?>

<form method="POST">
	<pre>
Tambah Data Mahasiswa
NRP     : <input type="text" name="nrp">

Nama    : <input type="text" name="nama">

Alamat  : 
	  <textarea name="alamat"> </textarea>

Jurusan : <select name="id_jur">
			<option disabled selected>ID Jurusan</option>
			<?php  
				$kueri = "select id_jur from jurusan";
				$id = mysqli_query($koneksi, $kueri);

				while ($kuerii = mysqli_fetch_array($id)) {
			?>
					<option value="<?php echo $kuerii['id_jur'];?>"><?php echo $kuerii['id_jur'];?></option>
			<?php	
				}
			?>
		  </select>
	  
	  <input type="submit" name="submit" value="Submit">
	</pre>
</form>

<?php 
if (isset($_POST['submit'])) {
	$nrp = $_POST['nrp'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$id_jur = $_POST['id_jur'];
	
	$kueri = "insert into mahasiswa (nrp, nama, alamat, id_jur) values ('$nrp', '$nama', '$alamat','$id_jur')";
	echo "Data ditambahkan ! ";
	return (mysqli_query($koneksi, $kueri));
}
?>