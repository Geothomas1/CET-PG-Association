<?php
include("../database_conn/conn.php");


$notification_id=$_GET['notification_id'];

$notification="delete from tbl_notifications where notification_id=$notification_id";
$res=mysqli_query($conn,$notification);
        //message code
        if($res)
        {
        header("location:deletenotification.php");
        }
    

?>