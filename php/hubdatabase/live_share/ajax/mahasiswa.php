<?php 
require '../funtion.php';
$key = $_GET['key'];


$mantap ="SELECT * FROM mahasiswa
        WHERE nama LIKE'%$key%' OR
        NPM LIKE '%$key%'
        ";
$mahasiswa = query($mantap);
$i=1;
?>
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