<?php
//ini coment satu baris
/*
komentar dengan banyak baris
ingin mnegomen banyak baris ctrl+/
*/

//syntax php

//standar output
// echo,print
//print_r( untuk mencetak isi array)
//var_dump(isi dari variable)
echo "ini echo";
print "ini print";

//1. penulisan php didalam html
/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>jimmi <?php echo "iskandar";?></h1>
    <h1><?php echo $nama  ?></h1>
    
</body>
</html>

*/
//variable (tidak boleh diawali ngan angka)

$nama = "jimmi php";

echo "nama saya $nama ";

/*operator{}

1. aritmatika ( + - * / % )

$x=10;
$y=10;

echo $x*$y;
=================================================
2. concat ( operator penggabung string (.))
$nama_depan="jimmi";
$nama_blakang="iskandar";

echo $nama_depan." ".$nama_blakang;
================================================
3. assignment (penugasan)
 (=, +=, -=, *=, /=, %=, .=)

 $x =1;
$x +=5;

echo $x;

4. perbandingan (<,>,<=,>=,==,!=)

var_dump(1<5);

5. identitas

var_dump(1==="1");

6. logica (&&, ||, !)

$x=20;
var_dump($x < 10 && $x % 2==0 );
*/

?>
