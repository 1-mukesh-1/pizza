<?php
require 'db_config.php';
if(isset($_POST['accept']) && isset($_POST['orders']))
{
    $orders=$_POST['orders'];
    foreach ($orders as $id) {
        $query="update history set status=1";
        $result=mysqli_query($link,$query);
        $query="delete from orders where id='$id'";
        $result=mysqli_query($link,$query);
        if(!$result)
        {
            echo 'error';
            die();
        }
        $_SESSION['success']='accepted';
        header('location:deliveryorders.php');
    }
}
else if(isset($_POST['reject']) && isset($_POST['orders']))
{
    $orders=$_POST['orders'];
    foreach ($orders as $id) {
        $query="update history set status=-1";
        $result=mysqli_query($link,$query);
        $query="delete from orders where id='$id'";
        $result=mysqli_query($link,$query);
        if(!$result)
        {
            echo 'error';
            die();
        }
        $_SESSION['rejected']='rejected';
        header('location:deliveryorders.php');
    }
}
else
{
    $_SESSION['select']='Nothing selected';
    header('location:deliveryorders.php');
}
?>
