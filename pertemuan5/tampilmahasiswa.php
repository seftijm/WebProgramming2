<html>
<head>
    <title> Data Mahasiswa </title>
</head>
<body>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$jeniskel = $_POST['jeniskel'];
$prodi = $_POST['prodi'];

?>
<table border=1 bgcolor="Cyan">
<tr>
<th colspan=2 align="center"><b>Data Mahasiswa</b></td>
</tr>
<tr><td>NIM</td><td><?php echo $nim; ?></td></tr>
<tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
<tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
<tr><td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td></tr>
<tr><td>program Studi</td><td><?php echo $prodi; ?></td></tr>
<tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
</table>
<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>