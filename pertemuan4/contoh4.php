 <title> Menghitung Luas Lingkaran</title>
</head>
<body>
<?php
//konstanta untuk nilai judul
define("judul","Hitung Luas Lingkaran");
//konstanta untuk nilai phi
define("PHI",3.14);
echo judul;
$r=10;
echo"<br>Jari-jari:$r<br>";
$luas=PHI*$r*$r;
echo "Luas Lingkaran=$luas";
?> 
</body>