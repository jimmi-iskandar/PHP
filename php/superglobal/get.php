<?php 
$mahasiswa= [
    [
        "nama"=>"iskandar",
        "NPM"=>"202043500681",
        "email"=>"jim.iskandar20@gmail.com"
    ],[
        "nama"=>"kharisma",
        "NPM"=>"303042500778",
        "email"=>"Kharisma20@gmail.com"

    ]
];
?>
<html>
    <head>
        <title>array associativr</title>

    </head>
        <body>
            <h1>Daftar Mahasiswa</h1>
              <table border="1px" cellpadding="5" cellspacing="0">
              <?php foreach($mahasiswa as $mhs) : ?>
                    <tr>
                    
                        <td>
                            <a href="tangkapdataget.php?nama=<?= $mhs["nama"];?>
                            &NPM=<?=$mhs["NPM"];?>
                            &email=<?=$mhs["email"];?>
                            "><?= $mhs["nama"]; ?></a>
                        </td>
                    
                    </tr>
                <?php endforeach; ?>
                    
              </table>  

        </body>
</html>