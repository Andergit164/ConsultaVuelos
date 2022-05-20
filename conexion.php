<?php
function conectar(){
    $host="192.168.0.11:3306";
    $user="sistemas2";
    $pass="1234";
    $db="db_vuelos";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$db);
    
    return $con;
}
?>