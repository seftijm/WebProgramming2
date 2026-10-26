<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body bgcolor="yellow">
<form action="tampilmahasiswa.php" method="post">
<b>Input Data Mahasiswa</b>
<br>
<p>NIM : <input type="text" name="nim" size="25" maxlength="50">
<p>Nama : <input type="text" name="nama" size="25" maxlength="50">
<p>Kelas : <input type="text" name="kelas" size="25" maxlength="50">
<p>Jenis Kelamin :
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
<input type="radio" name="jeniskel" value="Perempuan"> Perempuan
<p>Program Studi :
    <select id="jurusan" name="prodi" required>
        <option value="">-- Pilih Program Studi --</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
    </select><br><br>
<p>Alamat : <textarea rows="3" cols="25" name="alamat"> </textarea>
<p><input type="submit" value="Kirim"><input type="reset" value="Batal">
</form>
</body>
</html>