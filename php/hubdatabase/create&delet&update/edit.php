<?php 

session_start();
if ( !isset($_SESSION["login"]) ){

    header("Location: login.php");
    exit;
}

//cek tombol sudah ditekan apa belom
require "funtion.php";

//ambil data di url
$id=$_GET["id"];

//query data mahasiswa

$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if(isset ($_POST["submit"])){
    //cek apakah data behasil di tambahkan atau tidak
    if ( edit($_POST) > 0){
        echo "<script>
                alert('data berhasi diubah');
                document.location.href='indek.php';
        
            </script>";
    }else {
        echo "<script>
            alert('data gagal diubah');
            document.location.href='indek.php';
        
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
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$mhs["id"];?>">
        <table cellpadding="7" border="1" cellspacing="0">
            <tr>
                <td>
                    <label for="nama"> Nama </label> 
                    <input type="text" name="nama" id="nama" required value="<?=$mhs["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NPM"> NPM </label> 
                    <input type="text" name="NPM" id="NPM" required value=<?=$mhs["NPM"]; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"> Email </label> 
                    <input type="text" name="email" id="email" required value=<?=$mhs["email"];?>>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan" > jurusan </label>
                    <input type="text" name="jurusan" id="jurusan" required value=<?=$mhs["jurusan"];?>> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar" >gambar</label>
                    <input type="text" name="gambar" id="gambar" required value=<?=$mhs["gambar"];?>> 
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Ubah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>