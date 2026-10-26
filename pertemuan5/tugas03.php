<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h3>Form Registrasi</h3>
    <form action="tugas03proses.php" method="post">
        <p>Isi Data Dibawah ini :</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: <input type="text" name="tempat_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <input type="text" name="tanggal_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: 
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki 
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>: 
                    <select name="pendidikan">
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>