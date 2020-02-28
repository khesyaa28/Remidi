<?php 
include './connect.php';

$Nama=$_POST['Nama'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$query= "INSERT INTO user (Nama, Username, Password)
    VALUES ('$Nama','$Username', '$Password')";

$result=mysqli_query($connect,$query);

$num=mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil Manambah Data<br>";

}else{
    echo "Gagal Menambah Data<br>";
}
echo "<a href='tampilan.php'>Registrasi</a>";
?>