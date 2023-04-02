<?php 
session_start();
if ( !isset($_SESSION["login"]) ){

    header("Location: login.php");
    exit;
}
require "funtion.php";

//pagination tau konfirgurasi
$jumlahdataditampilkan = 2;
$jumlah_data = count(query("SELECT * FROM mahasiswa"));
/*
tipe pembulatan
1 round (pembulatan ke desimal terdekat)
2 floor (pembulatan ke desimal bawah)
3 ceil (pembulatan ke desimal atas)
*/
$jumlahhalaman = ceil($jumlah_data / $jumlahdataditampilkan);

//jika menggunakan if
// if (isset($_GET['hal']) ) {
//     $halamanaktif = $_GET['hal'];
// } else {

//     $halamanaktif =1;
// }

// menggunakan operator ternary
$halamanaktif = (isset($_GET["hal"])) ? $_GET["hal"] : 1;

$awaldata = ($jumlahdataditampilkan * $halamanaktif) - $jumlahdataditampilkan;


//ambil data dari tabel
$mahasiswa = query("SELECT *FROM mahasiswa LIMIT $awaldata, $jumlahdataditampilkan");

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
        <input type="text" name="key" autofocus placeholder="Cari Nama/NPM" autocomplete="off">
        <button type="submit" name="cari">Share</button>
</form>
<br><br>
<?php if ($halamanaktif > 1) : ?>
    <a href="?hal= <?= $halamanaktif - 1 ?>">&laquo</a>
<?php endif; ?>



<?php for ($j=1; $j<= $jumlahhalaman; $j++) :?>
    <?php if ( $j == $halamanaktif) : ?>
        <a href="?hal=<?= $j; ?>" style = "font-weight : bold; color : red;"><?= $j; ?></a>
    <?php else : ?>
        <a href="?hal=<?= $j; ?>"><?= $j; ?></a>
    <?php endif; ?>
<?php endfor; ?>



<?php if ($halamanaktif < $jumlahhalaman) : ?>
    <a href="?hal= <?= $halamanaktif + 1 ?>">&raquo</a>
<?php endif; ?>
<br>
    <a href="tambah.php">tambahdata</a>
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

</body>
</html>