<?php
include 'config.php';

if(isset($_GET['carid'])){
    $id = $_GET['carid'];

    $sql = "DELETE FROM cars WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:viewcars.php');
    }else{
        echo mysqli_error($conn);
    }
}

?>