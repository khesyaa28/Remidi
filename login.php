<?php

$connect =  mysqli_connect("localhost","root","","web-hotel");

if(! $connect){
    echo "Koneksi ke database gagal : ". mysqli_connect_error();
}
echo "<a href='form-login.pho'>Login</a>"
?>