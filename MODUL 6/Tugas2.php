<form method="POST">
    Nama : <input type="text" name="nama"><br>
    Warna : <input type="text" name="warna"><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
function bet($x,$y){
    $harga=strlen($x);
    if($harga<=10){
        $harga=$harga*300;
    }else if($harga<20){
        $harga=$harga*500;
    }
    else{
        $harga=$harga*700;
    }
   echo "<font color = $y> Nama : $x <br> Harga : Rp $harga";
}

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $warna=$_POST['warna'];
    if(empty($warna)){
        $warna="red";
    }
    bet($nama,$warna);
}
?>