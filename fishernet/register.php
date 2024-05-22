<?php
include "dbfish.php";

session_start();
header('location:login.php');

$conn =  mysqli_connect('localhost', 'root', '', 'fishernet');
mysqli_select_db($conn, 'fishernet');
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$userType = $_POST['userType'];
    
        $s = "SELECT * from users where username = '$name'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
    if($num == 1){
        echo "This username is already taken";
    }else{
        $reg = "INSERT into Users (Username, Password, Email, UserType) VALUES ('$name', '$password', '$email', '$userType')";
        mysqli_query($conn, $reg);
        echo "Registration Successful";
        
    }
    
closeConnection($conn);
?>
