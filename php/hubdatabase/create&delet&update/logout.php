<?php 
//menghapus session
session_start();
session_unset();
session_destroy();

//menghapus cookie
setcookie('mantap','', time() - 3600);
setcookie('mantap1','', time()- 3600);
header("Location: login.php");
exit;
?>