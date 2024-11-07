<!DOCTYPE html>
<html>
<body>

<?php

$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 5/100; 
$hutang_b = 9500000;
$bunga_b = 4.5/100; 


$bunga_total_a = $hutang_a * $bunga_a;
$bunga_total_b = $hutang_b * $bunga_b;


$total_bunga = $bunga_total_a + $bunga_total_b;


$total_hutang = $hutang_a + $hutang_b + $total_bunga;


$sisa_uang = $pemasukan - $total_hutang;


echo "<h2>Hasil Perhitungan</h2>";
echo "<p>Sisa uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "</p>";
echo "<p>Total bunga hutang: Rp " . number_format($total_bunga, 0, ',', '.') . "</p>";
echo "<p>Total hutang: Rp " . number_format($total_hutang, 0, ',', '.') . "</p>";
?>

</body>
</html>
