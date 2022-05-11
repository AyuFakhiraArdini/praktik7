<!DOCTYPE html>
<html>
<head>
    <title>kepegawaian</title>
</head>
<body>
    <header>
        <h1>PROGRAM KEPEGAWAIAN</h1>
    </header>
    <form action="prosesmenambah.php" method = "post">
        <fieldset>
            <table>
                <tr>
                <td><label for="idp">ID Pegawai  </label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawain"></td>
                </tr>
                <tr>
                <td><label for="iddpt">ID Department  </label></td>
                <td><select name="iddpt" >
                    <option>001</option>
                    <option>002</option>
                    <option>003</option>
                    <option>004</option>
                    <option>005</option>
                    <option>006</option>
                    <option>007</option>
                </select></td>
                </tr>
                <tr>
                <td><label for="idpgj">ID Penggajian </label></td>
                <td><select name="idpgj" >
                    <option>201</option>
                    <option>202</option>
                    <option>203</option>
                    <option>204</option>
                    <option>205</option>
                    <option>206</option>
                </select></td>
               </tr>
                <tr>
                <td><label for="nama">Nama  </label></td>
                <td><input type="text" name = "nama" placeholder = "Nama Lengkap"></td>
                </tr>
                <tr>
                <td><label for="email">Email  </label></td>
                <td><input type="text" name = "email" placeholder = "contoh123@gmail.com"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon  </label></td>
                <td><input type="text" name = "telp" placeholder = "Nomor telepon aktif"></td>
                </tr>
                <tr>
                <td><label for="alamat">Alamat  </label></td>
                <td><textarea name="alamat" cols="21" rows="10"></textarea></td>
                </tr>
            </table>
            <input type="submit" value = "Daftar" name = "daftar">
        </fieldset>
    </form>
</body>
</html>