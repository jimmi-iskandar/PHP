<?php 
$con = mysqli_connect("localhost","root","","iskandar");

 function query($query){

    global $con;

        $result = mysqli_query($con, $query);
        $wadah =[];
        
        while( $x = mysqli_fetch_object($result) ){
            $wadah[]=$x;
        }


        return $wadah;
 }
?>