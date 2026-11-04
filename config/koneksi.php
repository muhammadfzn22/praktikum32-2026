<?php

$servername = "localhost";
$database = "pwd_fzn";
$username = "root";
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password,  $database);

if(!$conn){
    die("koneksigagal:". mysqli_connect_eror());
}
echo "koneksi berhasil";
mysqli_close($conn);

?>