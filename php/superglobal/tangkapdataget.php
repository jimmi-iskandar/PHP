<?php 
//cek apakah tigak ada data di $_GET
if( !isset ( $_GET["nama"] ) ){
    //redirect
       header ("Location: get.php");
    exit;
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
    <table border="1px" cellpadding="7" cellspacing="0">
        <tr>
            <td><?= $_GET["nama"]; ?></td>
            <td><?= $_GET["NPM"]; ?></td>
            <td><?= $_GET["email"]; ?></td>
        </tr>
    </table>

    <a href="get.php">kembali</a>
</body>
</html>