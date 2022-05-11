<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(20) PRIMARY KEY,
    NAMA VARCHAR(50) NOT NULL,
    EMAIL VARCHAR(40) NOT NULL,
    isi text()
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Tabel Buku Tamu Created Sucessfully";
} else {
    echo "Tabel Error : " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>