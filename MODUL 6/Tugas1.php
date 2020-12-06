<form method="POST">
	<input type="text" name="angka">
	<input type="submit" name="submit" value="Submit">
</form>

<?php 
function faktorin($angka){
    $total=1;
    for($i=$angka;$i>0;$i--){
        $total=$total*$i;
        echo "$i x ";
    }
    echo "0! = ";
    return $total;
}

if (isset($_POST['submit'])) {
	$angka = $_POST['angka'];
	$angka = faktorin($angka);
	echo "$angka";
}
?>

