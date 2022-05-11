<?php
include("connectdb.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: dataPegawai.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$sql = "SELECT * FROM pegawai WHERE ID_PEGAWAI = $id";
$query = mysqli_query($conn,$sql);
$pegawai = mysqli_fetch_assoc($query);

//cek datanya
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>kepegawaian</title>
</head>
<body>
    <header>
        <h1>PROGRAM KEPEGAWAIAN</h1>
    </header>
    <form action="prosesmengedit.php" method = "post">
        <fieldset>
        <table>
                <tr>
                <td><label for="idp">ID Pegawai  </label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawain" value="<?php echo $pegawai['ID_PEGAWAI'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="iddpt">ID Departemen  </label></td>
                <td><input type="text" name = "iddpt" placeholder = "ID Departemen" value="<?php echo $pegawai['ID_DEPARTMENT'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="idpgj">ID ID Penggajian</label></td>
                <td><input type="text" name = "idpgj" placeholder = "ID Kerja" value="<?php echo $pegawai['ID_PENGGAJIAN'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="nama">Nama  </label></td>
                <td><input type="text" name = "nama" placeholder = "Nama Lengkap" value="<?php echo $pegawai['NAMA_PEGAWAI'] ?>"></td>
                </tr>
                <tr>
                <td><label for="email">Email  </label></td>
                <td><input type="text" name = "email" placeholder = "Email" value="<?php echo $pegawai['EMAIL'] ?>"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon  </label></td>
                <td><input type="text" name = "telp" placeholder = "No Telepon" value="<?php echo $pegawai['NO_TELPON'] ?>"></td>
                <tr>
                <td><label for="alamat">Alamat  </label></td>
                <td><textarea name="alamat" cols="21" rows="10"><?php echo $pegawai['ALAMAT']?></textarea></td>
                <tr>
                </tr>
            </table>
            <input type="submit" value="Simpan" name="update">
        </fieldset>
    </form>
</body>
</html> 