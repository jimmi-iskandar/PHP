<?php 
// date (untuk menampilkan tanggal dengan format tertentu)
// echo date("l,d-M-Y");

//time(untuk menampilkan waktu)
//detik yang sudah berlalu sejak 1 anuari 1970(hari kesepakatan para programan)

// echo time();
// echo date("d M Y", time()+60*60*24*2);
//membuat detik sendiri (mktime(0,0,0,0,0))
// urutannya mktime(jam, menit, detik, bulan, tanggal, tahun)
//echo mktime(0,0,0,5,13,2000);

//membuat fuction sendiri

function salam($waktu="Datang", $nama="admin"){
    
    return "selamat $waktu, $nama!";
}
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
    <h1><?= salam("pagi","jimmi"); ?></h1>
</body>
</html>