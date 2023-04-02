<?php 
$con = mysqli_connect("localhost","root","","iskandar");

 function query($query){

    global $con;

        $result = mysqli_query($con, $query);
        $wadah =[];
        
        while($x = mysqli_fetch_assoc($result)){
            $wadah[]=$x;
        }


        return $wadah;
 }
 
 function tambah ($data){

    global $con;
    //ambil data dari tiap elemen form
    $nama = htmlspecialchars( $data["nama"]);
    $NPM = htmlspecialchars($data["NPM"]) ;
    $email = htmlspecialchars($data["email"]);
    $jurusan= htmlspecialchars($data["jurusan"]);

    //uploadgambar
    $gambar= upload();
    if(!$gambar){
      return false;
    }

    $query= "INSERT INTO mahasiswa VALUES ('','$nama','$NPM','$email','$gambar','$jurusan')";
    //query insert data
    mysqli_query($con,$query);

    return mysqli_affected_rows($con);

 }
 function upload(){
   $namafile=$_FILES['gambar']['name'];
   $ukuranfile=$_FILES['gambar']['size'];
   $error=$_FILES['gambar']['error'];
   $tmpnama=$_FILES['gambar']['tmp_name'];

   //cek apakah ada gambar yang diupload

   if($error===4){
      echo "
         <script>
         alert('pilih gambar terlebih dahulu');
         </script>
      ";
      return fales;
      }
      //cek file adalah gambar
      $gambarvalid=['jpg','jpeg','png'];
      $namavalid= explode('.',$namafile);
      $namavalid= strtolower(end($namavalid)) ;
      if(!in_array($namavalid,$gambarvalid) ){

         echo "
         <script>
         alert('yang anda upload bukan gambar');
         </script>
      ";
      return fales;
      }
      //cek ukuran gambar 
      if ($ukuranfile> 1000000) {
         echo "
         <script>
         alert('ukuran gambar terlalu besar');
         </script>
      ";
      return false;
      }
      //lolos pengecekan gambar
      //generate nama baru
     $namafilebaru= uniqid();
     $namafilebaru .='.';
     $namafilebaru .= $namavalid;

     move_uploaded_file($tmpnama,'../../../gambar/' .$namafilebaru);

     return $namafilebaru;
 }

 function hapus($id){
    global $con;
    mysqli_query($con,"DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($con);

 }
 function edit($data){
   global $con;
    //ambil data dari tiap elemen form
    $id=$data["id"];
    $nama = htmlspecialchars( $data["nama"]);
    $NPM = htmlspecialchars($data["NPM"]) ;
    $email = htmlspecialchars($data["email"]);
    $jurusan= htmlspecialchars($data["jurusan"]);
    $gambar=htmlspecialchars($data["gambar"]);

    $query= "UPDATE mahasiswa SET nama='$nama',NPM='$NPM',email='$email',jurusan='$jurusan',gambar='$gambar' WHERE id= $id";
    //query insert data
    mysqli_query($con,$query);

    return mysqli_affected_rows($con);


 }
 function cari($key){

      $query="SELECT * FROM mahasiswa
         WHERE nama LIKE'%$key%' OR
         NPM LIKE '%$key%'
      ";
      return query($query);
 }
 function registrasi($data){

   global $con;

   $username = strtolower(stripslashes($data["username"]));
   $pass = mysqli_real_escape_string($con, $data["password"]);
   $pass2 = mysqli_real_escape_string($con, $data["password2"]);

   //cek username sudah ada atau belom

   $wadah = mysqli_query($con,"SELECT username FROM user WHERE username ='$username'");

   if (mysqli_fetch_assoc($wadah)){

      echo "
         <script>
            alert ('username sudah ada');
         
         </script>
      ";
      return false;
   }


   //konfirmasi password

   if($pass !== $pass2){

      echo "
      <script>
            alert ('konfirmasi password tidak sesuai');
      </script>
      ";
      return false;
   }

   //endcripsi password
   $pass1 = password_hash ($pass, PASSWORD_DEFAULT);

   //tambahkan user baru ke database
   mysqli_query($con, "INSERT INTO user VALUES ('','$username','$pass1')");

   return mysqli_affected_rows($con);
 }
?>