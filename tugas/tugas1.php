<!-- TUGAS LKPD PHP DASAR -->
<!-- Anggota:    1. Ayu Nadya P (04) -->
<!--             2. Sang Bimo R. L (31) -->

<h1>Skenario Pertama</h1>

<!-- Jika nilai = 100 - 90 maka hasilnya A -->
<!-- Jika nilai = 89 - 80 maka hasilnya B -->
<!-- Jika nilai = 79 - 70 maka hasilnya C -->
<!-- Jika nilai = 69 - 0 maka hasilnya D -->
<!-- Jika nilai < 0 atau nilai > 100 hasilnya invalid atau tidak ada -->

<?php
$nilai = 90;
$hasil = "";

if ($nilai >= 90 && $nilai <= 100) {
    $hasil = "A";
    echo "Nilai Anda adalah $hasil";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $hasil = "B";
    echo "Nilai Anda adalah $hasil";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $hasil = "C";
    echo "Nilai Anda adalah $hasil";
} elseif ($nilai >= 0 && $nilai <= 69) {
    $hasil = "D";
    echo "Nilai Anda adalah $hasil";
} else {
    echo "Nilai wajib dibuat 0-100";
}

?>

<h1>Skenario Kedua</h1>

<!-- Jika jam = 00:00 - 04:00 maka hasilnya dini hari -->
<!-- Jika jam = 04:00 - 10:00 maka hasilnya pagi -->
<!-- jika jam = 10:00 - 15:00 maka hasilnya siang -->
<!-- jika jam = 15:00 - 17:30 maka hasilnya sore -->
<!-- jika jam = 17:30 - 18:30 maka hasilnya petang -->
<!-- jika jam = 18:30 - 24:00 maka hasilnya malam -->
<!-- jika jam < 00.00 atau jam > 24.00 maka hasilnya dunia lain -->

<?php
$jam = date("25:00");
$waktu = "";

if ($jam >= date("00:00") && $jam <= date("04:00")) {
    $waktu = "Dini";
    echo "Sekarang adalah $waktu";
} elseif ($jam >= date("04:00") && $jam <= date("10:00")) {
    $waktu = "Pagi";
    echo "Sekarang adalah $waktu";
} elseif ($jam >= date("10:00") && $jam <= date("15:00")) {
    $waktu = "Siang";
    echo "Sekarang adalah $waktu";
} elseif ($jam >= date("15:00") && $jam <= date("17:30")) {
    $waktu = "Sore";
    echo "Sekarang adalah $waktu";
} elseif ($jam >= date("17:30") && $jam <= date("18:30")) {
    $waktu = "Petang";
    echo "Sekarang adalah $waktu";
} elseif ($jam >= date("18:30") && $jam <= date("24:00")) {
    $waktu = "Malam";
    echo "Sekarang adalah $waktu";
} else {
    echo "Sekarang adalah dunia lain";
}
?>

<h1>Skenario Ketiga</h1>


 