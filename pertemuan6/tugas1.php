<?php
$jenis = "mobil"; 
$jam = 5;        

if ($jenis == "motor") {
    $pertama = 3000; $berikutnya = 2000; $maksimal = 15000; $inap = 20000;
} else {
    $pertama = 5000; $berikutnya = 3000; $maksimal = 30000; $inap = 50000;
}

$hari = 0;
$sisa = $jam;
if ($sisa >= 24) {
    $sisa = $sisa - 24;
    $hari = $hari + 1;
    
    
    if ($sisa >= 24) {
        $sisa = $sisa - 24;
        $hari = $hari + 1;
    }
}

if ($sisa == 0) {
    $biaya_sisa = 0;
} else {
    $biaya_sisa = $pertama + (($sisa - 1) * $berikutnya);
    if ($biaya_sisa > $maksimal) {
        $biaya_sisa = $maksimal;
    }
}

$total = ($hari * $inap) + $biaya_sisa;

echo "Jenis Kendaraan : " . ucfirst($jenis) . "<br>";
echo "Lama Parkir     : " . $jam . " jam<br>";
echo "<b>Total Biaya     : Rp " . number_format($total, 0, ',', '.') . "</b>";
?>