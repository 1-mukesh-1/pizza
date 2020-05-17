<?php
require 'db_config.php';
if(isset($_POST['checkout']))
{
    $id=NULL;
    $user=$_SESSION['user1'];
    $query="select * from cart where orderedby='$user'";
    $result=mysqli_query($link, $query);
    while($row=mysqli_fetch_array($result))
    {
        $pizzaid=$row['pizzaid'];
        $quantity=$row['quantity'];
        $date=$row['date'];
        $query1="insert into orders values('$id','$user','$pizzaid','$quantity','$date')";
        $result1 = mysqli_query($link, $query1);
    }
    $query="delete from cart where orderedby='$user'";
    $result = mysqli_query($link, $query);
    $_SESSION['success']="added";
    header("location:cart.php");
}
?>
