<html>
<head>
    <title>
        Imo Belajar PHP
    </title>

    <style>
        .biru {
            color: blue;
        }
    </style>
</head>
<body>
    Hi, Perkenalkan
    <?php
    $walkes = 'Bu Yuniar';

    echo "<br> Aku imo";
    echo "<br> Aku sekolah di SNAPAN";
    echo "<div class='biru'>Wali Kelas: ". $walkes ."</div>";

    //ini komentar
    #ini juga komentar
    /*komentar*/

    $angka1 = 5;
    $angka2 = 10;
    $penjumlahan = $angka1 + $angka2;
    $x = $angka1 * $angka2;

    echo "<br> $angka1 + $angka2 = " . $penjumlahan;
    echo "<br>";
    echo $x ." = $angka1 x $angka2";
    
    echo "<br> $angka1<sup>$angka2</sup> = ";
    echo number_format (pow($angka1, $angka2), 2, ',','.');
    /*number_format(angkanya,
    jumlah angka di belakang koma,
    'tanda koma/titik paling belakang')'*/
?>

</body>
</html>