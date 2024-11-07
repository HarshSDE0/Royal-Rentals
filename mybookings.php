<?php
session_start();
include 'config.php';
$mail = $_SESSION['email'];

$sql = "SELECT * FROM bookings WHERE login_email = '$mail'";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/mybooking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="mybookings_container">
        <div class="mybooking">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $booking_id = $row['booking_id'];
                $car_name = $row['car_name'];
                $car_brand = $row['brand_name'];
                $charge = $row['charge'];
                $from_date = $row['from_date'];
                $to_date = $row['to_date'];
               
                $date1 = strtotime($to_date);
                $date2 = strtotime($from_date);
                $diff = $date1 - $date2;
                $days = $diff / (60 * 60 * 24);
                $amount = $charge * $days;
                $gst = (12 / 100) * $amount;
                $totalamount = $gst + $amount;

                $sql2 = "SELECT * FROM cars WHERE model = '$car_name'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $image = $row2['image'];
                $car_image = './images/cars/' . $image;

                echo "<div class='car_details'>
                <div class='booking'>
                <h2 id='bookingid'>Booking ID : <span>#$booking_id</span></h2>
                <button><a href='cancelbooking.php?bookingid=$booking_id'>CANCEL BOOKING</a></button>
                </div>

                <div class='car_content'>
                   <div class='carr'>
                   <img src='$car_image' alt='Image Not Found'>
                   <div class='car_info'>
                       <h4>$car_name</h4>
                       <h5>Brand : $car_brand</h5>
                       <h5>Charge : $charge / Day</h5>
                   </div>
                   </div>
                    <div class='table'>
                        <table class='content-table'>
                            <thead>
                                <tr>
                                    <th>From Date</th>
                                    <th>To date</th>
                                    <th>Total DAYS</th>
                                </tr>
                            </thead>
                            <tr>
                                    <td>$from_date</td>
                                    <td>$to_date</td>
                                    <td>$days</td>
                                </tr>
                                <tr>
                                    <td colspan='2'>Subtotal</td>
                                    <td>$amount Rs</td>
                                </tr>
                                <tr>
                                <td colspan='2'>GST (12%)</td>
                                    <td>$gst Rs</td>
                                    </tr>

                                    <td colspan='2'>Total Amount</td>
                                    <td>$totalamount Rs</td>
                                    </tr>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>";
            }
            ?>
        </div>
    </div>

</body>

</html>