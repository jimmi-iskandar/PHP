<?php 
$i=10;

if ($i<10) {
    echo "benar";
} elseif($i==10){
    echo "binngo";
}else{
    echo "salah";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            background-color: green;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($i=1; $i<=3; $i++) :?>
                <?php if($i ==1) : ?>
                        <tr class="color">
                <?php else : ?>
                    <tr>
                <?php endif?>
                    <?php for ($j=1; $j<=5; $j++) :?>
                        <td><?= "$i,$j";?></td>
                    <?php endfor?>
                </tr>
            <?php endfor?>
    </table>
</body>
</html>