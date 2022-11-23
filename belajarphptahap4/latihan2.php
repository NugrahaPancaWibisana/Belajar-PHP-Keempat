<?php
$siswa = [
    ["Nugraha Panca Wibisana", "123456789", "RPL", "example@gmail.com"],
    ["Ujang Kopling Marquee", "123456789", "TKJ", "example@gmail.com"], 
    ["Asep Linux JS", "123456789", "DKV", "example@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar siswa</h1>
    <?php foreach ($siswa as $s) : ?>
    <ul>
            <li><?= $s[0]; ?></li>
            <li><?= $s[1]; ?></li>
            <li><?= $s[2]; ?></li>
            <li><?= $s[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>