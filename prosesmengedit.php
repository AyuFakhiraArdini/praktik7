<?php
include("connectdb.php");

//proses untuk update data
if (isset($_POST['update'])) {
    $id     = $_POST['idp'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $idp    = $_POST['iddpt'];
    $idpgj   = $_POST['idpgj'];

    //query insert
    $sql = "UPDATE pegawai SET ID_PEGAWAI='$id',NAMA_PEGAWAI='$nama',
    EMAIL='$email',NO_TELPON='$telp',ALAMAT='$alamat', ID_DEPARTMENT= '$idp', ID_PENGGAJIAN= '$idpgj' WHERE ID_PEGAWAI=$id";

    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ) {
        header('Location: dataPegawai.php');
    } else {
       die("Gagal Menyimpan Data");
    }
} else {
    die("Tombol Simpan tidak di klik");
}

?> 
