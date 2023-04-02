<?php 
session_start();
if ( !isset($_SESSION["login"]) ){

    header("Location: login.php");
    exit;
}
require "funtion.php";

//ambil data dari tabel
$mahasiswa = query("SELECT *FROM mahasiswa");

//tombol share ditekan
if(isset($_POST["cari"])){
    $mahasiswa=cari($_POST["key"]);
}
$i=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
    <style>
        .gambar{
            width:100px;
            height:100px;
            border-radius:20%;
            overflow: hidden;
        }
        img{
            width: 100%;
            height: 100%;
            object-fit : cover;
        }
    </style>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>Dafar Mahasiswa</h1>
<form action="" method="post">
        <input type="text" name="key" autofocus placeholder="Cari Nama/NPM" autocomplete="off" id="live">
        <button type="submit" name="cari" id="tombol_live">Share</button>
</form>
<br><br>

<br>
    <a href="tambah.php">tambahdata</a>
    
    <div id="container">

    
    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Profile</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            
            <?php foreach($mahasiswa as $mhs) :?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="edit.php?id=<?=$mhs["id"];?>">edit</a>
                    <a href="hapus.php?id=<?=$mhs["id"];?>" onclick="return confirm('yakin?');">delete</a>
                </td>
                
                <td><div class="gambar"><img src="../../../gambar/<?= $mhs["gambar"];?>" alt="gambar"></div></td>
                
                
                <td><?= $mhs["NPM"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>

            </tr>
            
            <?php 
            $i++;
            endforeach ?>
    </table>
    </div>
        <script src="coba.js"></script>
</body>
</html>