<?php
include"file2.php";
$name=$_REQUEST['nama'];
$pw=$_REQUEST['pw'];

$mysqli="INSERT INTO input_tabel (Nama, Pw) VALUES('$name', '$pw')";
$result=mysqli_query($conn, $mysqli);
if($result){
    echo "Berhasil";
}else{
    echo "Gagal";
}
mysqli_close($conn);

?>