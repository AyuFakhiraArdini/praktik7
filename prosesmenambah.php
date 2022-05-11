<?php
include("connectdb.php");
//proses untuk tambah data
if (isset($_POST['daftar'])) {
    $id     = $_POST['idp'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $idp    = $_POST['iddpt'];
    $idpgj    = $_POST['idpgj'];

    //query insert
    $sql = "INSERT INTO pegawai (ID_PEGAWAI,NAMA_PEGAWAI,NO_TELPON, EMAIL, ALAMAT, ID_DEPARTMENT, ID_PENGGAJIAN) VALUE ('$id','$nama','$email','$telp','$alamat','$idp','$idpgj')";

    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Tombol Submit tidak di klik");
}

?>