<?php 
session_start();
if ( !isset($_SESSION["login"]) ){

    header("Location: login.php");
    exit;
}

require "funtion.php";
//cek tombol sudah ditekan apa belom
if(isset ($_POST["submit"])){
    
    //cek apakah data behasil di tambahkan atau tidak
    if ( tambah($_POST) > 0){
        echo "<script>
                alert('data berhasi ditambahkan');
                document.location.href='index.php';
        
            </script>";
    }else {
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href='index.php';
        
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>tambah data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="7" border="1" cellspacing="0">
            <tr>
                <td>
                    <label for="nama"> Nama </label> 
                    <input type="text" name="nama" id="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NPM"> NPM </label> 
                    <input type="text" name="NPM" id="NPM" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"> Email </label> 
                    <input type="text" name="email" id="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan" > jurusan </label>
                    <input type="text" name="jurusan" id="jurusan" required> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar" >gambar</label>
                    <input type="file" name="gambar" id="gambar"> 
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">upload</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>