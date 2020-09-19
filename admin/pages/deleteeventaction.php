<?php
include("../database_conn/conn.php");


$event_id=$_GET['event_id'];

$event="delete from tbl_events where event_id=$event_id";
$res=mysqli_query($conn,$event);
        //message code
        if($res)
        {
        header("location:deleteevent.php");
        }
    

?>