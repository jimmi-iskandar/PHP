<?php 
//koneksi database
$con = mysqli_connect("localhost","root","","iskandar");


//ambil data dari tabel
$result= mysqli_query($con,"SELECT * from mahasiswa");


/*ambil data dari result
ada 4 cara
1. mysqli_fetch_row()=> mengembalikan nilai array numerik
2. mysqli_fetch_assoc()=>mengembalikan nilai array associative
3. mysqli_fetch_array()=>mengembalikan nilai array numerik dan array associative(kelemahanya dikeluarkan semua jadi datanya dobble)
4. mysqli_fetch_object()mengembalikan nilai object ($mhs->nilai)
*/
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
        img{
            width: 100px;
            height: auto;
            obeject-fit : cover;
        }
    </style>
</head>
<body>
    <h1>Dafar Mahasiswa</h1>
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
            
            <?php while($mhs=mysqli_fetch_object($result)) :?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </td>
                <td><img src="../../gambar/<?= $mhs->gambar?>" alt="gambar"></td>

            </tr>
            
            <?php 
            $i++;
            endwhile ?>
    </table>

</body>
</html>