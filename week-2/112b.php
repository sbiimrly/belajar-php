<!-- Percabangan: IF ELSE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imo's PHP</title>
</head>
<body>
    <?php

    // Jika senin - rabu maka mengenakan seragam osis
    // Jika kamis mengenakan seragam batik
    // Jika jumat mengenakan seragam olah raga
    // Jika sabtu mengenakan seragam pramuka

    $hari = "minggu";

    // && = dan
    // || = atau

    if ($hari == "senin" || $hari == "selasa" || $hari == "rabu") {
        echo "Hari ini $hari, kamu mengenakan seragam osis";
    } elseif ($hari == "kamis") {
        echo "Hari ini $hari, kamu mengenakan seragam batik merah putih";
    } elseif ($hari == "jumat") {
        echo "Hari ini $hari, kamu mengenakan seragam olah raga";
    } elseif ($hari == "sabtu") {
        echo "Hari ini $hari, kamu mengenakan seragam pramuka";
    } else {
        echo "Hari ini $hari, kamu tidak mengenakan seragam";
    }
    ?>
</body>
</html>