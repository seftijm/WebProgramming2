<html>
<head>
    <title>Tugas 06</title>
</head>
<body>
<?php
$nama          = $_POST['nama'];
$alamat        = $_POST['alamat'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan    = $_POST['pendidikan'];
?>

    <h3>Data Registrasi</h3>
    <table border="1" width="50%">
        <tr>
            <td width="30%">Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $pendidikan; ?></td>
        </tr>
    </table>
    <br>
    <a href="tugas03.php">Back To Home</a>
</body>
</html>