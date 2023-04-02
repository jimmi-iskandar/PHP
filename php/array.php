<?php 
//array
//element pada array boleh memiliki tipe data yang berbeda
//membuat array cara lama
$hari = array("senin","selasa","rabu");
//membuat array cara baru

$bulan=["januari","februari","maret"];
//menampilkan array

// echo $hari[0];
// echo "<br>";

//menambahkan elemen pada array
// var_dump($hari);
// $hari[]= "kamis";
// echo "<br>";
// var_dump($hari);

//pengulangan pada array
// count (nama array) !untuk perulangan menngunakan for tanpa menghitung isi array
$coba =[1,3,2,4,5,6,3,2,];

// array multi dimensi


$mahasiswa =[
    ["jimmi iskandar","202043500681","jim.iskandar20@gmail.com"],
    ["Kharisma agustina","202043500771","Kharisma20@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width : 50px;
            height : 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
            
        }
        .clear{clear:both;}
    </style>
</head>
<body>
    <?php for ( $i=0; $i< count($coba); $i++) :?>
    <div class="kotak"><?= $coba[$i] ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach($coba as $c) : ?>
            <div class="kotak"><?= $c; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
    
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
    
    </ul>
    <?php endforeach; ?>
    
    
</body>
</html>