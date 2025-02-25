<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas LKPD</title>
    </head>
    <body>

<!-- TUGAS LKPD PHP DASAR -->

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
$jam = date("04:00");
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

<h1>Skenario Ketiga Jadwal Harian Andi</h1>

<!-- // Andi pulang sekolah pukul 15:30, dan tiba di rumah pukul 15:45
// Mengaji selama 30 menit (15:45 - 16:15) tetapi sebelum ngaji Andi mandi terlebih dahulu
// Mengerjakan tugas sekolah selama 2 jam (16:15 - 18:15)
// Menghafalkan dialog selama setengah jam (18:15 - 18:45)
// Ibu meminta Andi bumbu masakan sebelum makan malam
// Makan malam setelah mahgrib sampai isya (18:45 - 19:15)
// Andi sebelum tidur dia perlu menyisihkan waktu 30 menit untuk chatting dengan Raya karena Raya berada di Arab. Perbedaan waktu di Aarab 4 jam\
// Sebelum tidur Andi mengobrol dengan keluarganya 30 menit setelah mengerjakan tugas. Jika tidak ada tugas bisa dimajukan waktu mengobrolnya
// Andi tidur pukul 22:00 bangun jam 04:00 -->

    <table>
        <tr>
            <th>No.</th>
            <th>Kegiatan</th>
            <th>Jam</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Pulang Sekolah</td>
            <td>15:30 - 15:45</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Mandi</td>
            <td>15:45 - 16:00</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Mengerjakan Tugas</td>
            <td>16:00 - 18:00</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Membeli bumbu masakan</td>
            <td>18:00 - 18:10</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Makan malam</td>
            <td>18:30 - 19:00</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Mengaji</td>
            <td>19:00 - 19:30</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Menghafalkan dialog untuk festival seni budaya</td>
            <td>19:30 - 20:00</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Chatting dengan Raya</td>
            <td>20:00 - 20:30</td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Mengobrol bersama keluarga</td>
            <td>20:30 - 21:00</td>
        </tr>
            <td>10.</td>
            <td>Tidur</td>
            <td>22:00</td>
        </tr>
            <td>11.</td>
            <td>Bangun tidur</td>
            <td>04:00</td>
        </tr>
    </table>
    <br>
    <?php
        $jadwal = "08:00";

        if ($jadwal >= date("15:30") && $jadwal <= date("15:45")) {
            echo "$jadwal : Andi pulang sekolah";
        } else if ($jadwal >= date("15:45") && $jadwal <= date("16:00")) {
            echo "$jadwal : Mandi";
        } else if ($jadwal >= date("16:00") && $jadwal <= date("18:00")) {
            echo "$jadwal : Mengerjakan tugas";
        } else if ($jadwal >= date("18:00") && $jadwal <= date("18:10")) {
            echo "$jadwal : Membeli bumbu masakan";
        } else if ($jadwal >= date("18:20") && $jadwal <= date("19:00")) {
            echo "$jadwal : Makan malam";
        } else if ($jadwal >= date("19:00") && $jadwal <= date("19:30")) {
            echo "$jadwal : Mengaji";
        } else if ($jadwal >= date("19:30") && $jadwal <= date("20:00")) {
            echo "$jadwal : Menghafalkan dialog untuk festival seni budaya";
        } else if ($jadwal >= date("20:00") && $jadwal <= date("20:30")) {
            echo "$jadwal : Chatting dengan Raya";
        } else if ($jadwal >= date("20:30") && $jadwal <= date("21:00")) {
            echo "$jadwal : Mengobrol bersama keluarga";
        } else if ($jadwal >= date("22:00") && $jadwal <= date("03:59")) {
            echo "$jadwal : tidur";
        } else if ($jadwal >= date("04:00")) {
            echo "$jadwal : bangun";
        } else {
            echo "$jadwal waktu bebas";
        }
        
        ?>
        
        <br>
        <h3>Bahan Diskusi</h3>
        <p>Anggota:
            <br> Ayu Nadya P (04)
            <br> Sang Bimo R L (31)
        </p>
        <ol>
            <li>Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan?</li>
            <p>Yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau bertabrakan adalah <br>
                dengan memprioritaskan kegiatan Andi yang lebih penting sehingga tidak membuat jadwalnya bertumpuk dan memberikan waktu yang fleksibel agar Andi masih memiliki waktu untuk mengerjakan tugas yang terlewatkan</p>

            <li>Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut!</li>
            <p>Alasan kami dalam menentukan urutan kegiatan tersebut ialah agar Andi dapat menyelesaikan tugas-tugas dengan menyesuaikan prioritasnya dan bisa memiliki waktu luang lebih untuk dirinya sendiri </p>

            <li>Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?</li>
            <p>Andi dan Raya melakukan chatting pada pukul 00:00 waktu Arab</p>

            <li>Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?</li>
            <p>Masih, Andi masih memiliki waktu luang. Pada jam 18:10-18:30 dan jam 21:00-22:00, jadi Andi memiliki waktu luang sebanyak 1 jam 20 menit.</p>

            <li>Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?</li>
            <p>Jika Andi tidak memiliki tugas sekolah, maka waktu luang yang Andi miliki adalah 3 jam 20 menit</p>
        </ol>

</body>
</html>