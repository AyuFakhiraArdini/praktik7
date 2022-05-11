<?php
include("connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>kepegawaian</title>
</head>
<body>
    <header>
        <h1>PROGRAM DATA PEGAWAI</h1>
        <h4>Daftar Data Pegawai</h4>
    </header>
    <nav>
        <a href="tambah.php">Tambah Baru</a>
    </nav>
    <br>

    <table border = "1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>ID Departemen</th>
                <th>ID Penggajian</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($conn,$sql);

            while ($pegawai = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pegawai['ID_PEGAWAI']."</td>";
                echo "<td>".$pegawai['NAMA_PEGAWAI']."</td>";
                echo "<td>".$pegawai['NO_TELPON']."</td>";
                echo "<td>".$pegawai['EMAIL']."</td>";
                echo "<td>".$pegawai['ALAMAT']."</td>";
                echo "<td>".$pegawai['ID_DEPARTMENT']."</td>";
                echo "<td>".$pegawai['ID_PENGGAJIAN']."</td>";
                echo "<td align = 'center'><a href='formEdit.php?id=".$pegawai['ID_PEGAWAI']."'>Edit</a> | <a href='prosesmenghapus.php?id=".$pegawai['ID_PEGAWAI']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html> 