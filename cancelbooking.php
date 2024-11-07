<?php
include 'config.php';

if(isset($_GET['bookingid'])){
    $id = $_GET['bookingid'];

    $sql = "DELETE FROM bookings WHERE booking_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:mybookings.php');
    }else{
        echo mysqli_error($conn);
        echo "Something Went Wrong";
    }
}


?>