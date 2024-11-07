<?php
session_start();
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/viewcars.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'navbar.php';
    include 'sidebar.php';

    $sql = "SELECT * FROM bookings";
$result = mysqli_query($conn,$sql);
    ?>
   
      <div class="table_container">
      <table class="cars-table">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>User Email</th>
                <th>Model Name</th>
                <th>From Date</th>
                <th>To Date</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($cars = mysqli_fetch_assoc($result)) {
                $booking_id = $cars['booking_id'];
                $car_name =  $cars['car_name'];
                $login_email = $cars['login_email'];
                $fromdate = $cars['from_date'];
                $todate = $cars['to_date'];

        echo "<tr>
          <td>$booking_id</td>
          <td>$login_email</td>
          <td>$car_name</td>
          <td>$fromdate</td>
          <td>$todate</td>
        </tr>";
            }
            ?>

            
        </tbody>
    </table>

      </div>  
    
</body>

</html>