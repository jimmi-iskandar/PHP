<?php 
session_start();
require "funtion.php";

//cek cookie
if (isset($_COOKIE['mantap']) && isset($_COOKIE['mantap1'])){
    
    $id = $_COOKIE['mantap'];
    $username = $_COOKIE['mantap1'];

    //ambil username berdasarkan id
    $panggil = mysqli_query($con, "SELECT USERNAME FROM user WHERE id = $id");

    $row = mysqli_fetch_assoc($panggil);

    //cek cookie dari username

    if ($username === hash ('sha256', $row['user']) ) {

        $_SESSION["login"] = true;
    }
}


if( isset ($_SESSION["login"]) ){

    header("Location: index.php");

}



if(isset ($_POST["login"])){

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $panggil=mysqli_query($con,"SELECT *FROM user WHERE username = '$user'" );

    //cek username
    if (mysqli_num_rows($panggil) === 1){
        
        //cek password
        $row = mysqli_fetch_assoc($panggil);
        if (password_verify($pass, $row["password"])){

            //set session
                $_SESSION["login"]=true;
                // cek rememberme
                if(isset($_POST['remember'])) {
                    //buat cookie

                    setcookie('mantap',$row['id'], time()+60);
                    setcookie('mantap1', hash('sha256', $row['user']), time()+60);

                }

                header("Location: index.php");
                exit;

        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <style>
        p{
            color : red;
            font-style : italic;
        }
    </style>
</head>
<body>
    <h1>Halaman login</h1>
    <form action="" method="post">

    <?php if (isset($error)) : ?>
            <p>username atau password salah</p>

        <?php endif ?>

        <ul>
            <li>
                <label for="username"> username </label> 
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password"> password </label> 
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"> remember me </label> 
                
            </li>
            <button type="submit" name="login">Login</button>
        </ul>

    </form>
</body>
</html>