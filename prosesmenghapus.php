<?php
include("connectdb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "DELETE FROM pegawai WHERE ID_PEGAWAI = $id";
    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ){
        header('Location: dataPegawai.php');
    } else {
        die("gagal menghapus...");
    }
}
