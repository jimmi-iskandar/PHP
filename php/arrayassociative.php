<?php 
//array associative
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
echo $mahasiswa[0]["nama"];
?>
<html>
    <head>
        <title>array associativr</title>

    </head>
        <body>
              <table border="1px" cellpadding="5" cellspacing="0">
              <?php foreach($mahasiswa as $mhs) : ?>
                    <tr>
                    
                        <td><?= $mhs["nama"]; ?></td>
                        <td><?= $mhs["NPM"]; ?></td>
                        <td><?= $mhs["email"]; ?></td>
                    
                    </tr>
               <?php endforeach; ?>
                    
              </table>  

        </body>
</html>