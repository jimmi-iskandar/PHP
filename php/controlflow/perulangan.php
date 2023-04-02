<?php 
//pengulanagan ( for, while, do.. while, foreach)
for($i=0; $i<5; $i++){
    echo "for <br>";
}
$x=0;
while($x<5){
    echo "while <br>";
    $x++;
}
$do=0;
do{
    echo "do while <br>";
    $do++;
} while( $do>5)
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
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($i=1; $i<=3; $i++) :?>
                <tr>
                    <?php for ($j=1; $j<=5; $j++) :?>
                        <td><?= "$i,$j";?></td>
                    <?php endfor?>
                </tr>
            <?php endfor?>
    </table>
</body>
</html>