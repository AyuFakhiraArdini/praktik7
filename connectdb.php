<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// membuat koneksi 
$conn = mysqli_connect($servername, $username, $password,
$dbname);

// cek koneksi
if (!$conn) {
    die ( "Connection failed:" . mysqli_connect_error());
}else{
    echo " Database : ".$dbname." : Successfully";
}
?>