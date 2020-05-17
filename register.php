<?php
require 'db_config.php';
if(isset($_POST['register']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $wallet=1000;
    $id=NULL;
    $query="insert into users values('$user','$pass','$phno','$wallet','$id','$email','$address')";
    $result = mysqli_query($link, $query);
    header("Location:registration.php");
}
?>