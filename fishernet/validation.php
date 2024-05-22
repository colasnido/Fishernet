<?php
include "dbfish.php";

session_start();


$conn =  mysqli_connect('localhost', 'root', '', 'fishernet');
mysqli_select_db($conn, 'fishernet');
$name = $_POST['username'];
$password = $_POST['password'];
    
        $s = "SELECT * from users where username = '$name' && '$password'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
    if($num == 1){
        header('location:index_fish.php');
    }else{
        header('location:login.php');
    }
    
closeConnection($conn);
?>
