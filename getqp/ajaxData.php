<?php
//Include database configuration file
include('include/db_connect.php');

if(isset($_POST["cource_id"]) && !empty($_POST["cource_id"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM branch WHERE cource_id = ".$_POST['cource_id']." AND status = 1 ORDER BY branch_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Branch</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
        }
    }else{
        echo '<option value="">Branch not available</option>';
    }
}

if(isset($_POST["branch_id"]) && !empty($_POST["branch_id"])){
    //Get all city data
	echo "asdasd";
    $query = $mysqli->query("SELECT * FROM stream WHERE branch_id = ".$_POST['branch_id']." AND status = 1 ORDER BY stream_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Stream</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['stream_id'].'">'.$row['stream_name'].'</option>';
        }
    }else{
        echo '<option value="">Stream not available</option>';
    }
}




?>
