<?php
include '../config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM user WHERE email = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:users.php');
    }else{
        echo mysqli_error($conn);
        echo "failed";
    }
}

?>