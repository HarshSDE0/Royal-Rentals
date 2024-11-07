<?php

include 'config.php';
session_start();

$bid = $_GET['brandid'];

$sql = "SELECT * FROM brand WHERE brand_id = $bid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bname = $row['brand_name'];
$blogo = $row['brand_logo'];

$card = "SELECT * FROM cars WHERE bname = '$bname'";
$carresult = mysqli_query($conn, $card);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/brand.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="mainbox">
            <div class="content">
                <h1><?php echo $bname ;?></h1>
                <div class="carlogo">
                    <?php echo "<img src='$blogo'>"; ?>
                </div>
            </div>

            <p>Elevate your journey with <span><?php echo $bname ;?></span> Car Hire. Rent an <span><?php echo $bname ;?></span> and experience the perfect blend of elegance and performance for a memorable driving experience.</p>
        </div>

        <div class="carbox">
            <?php  
    while($rowdata = mysqli_fetch_assoc($carresult)){
        $car_name = $rowdata['model'];
        $car_image = $rowdata['image'];
        $ab = './images/cars/'.$car_image;
        
                echo "
                <div class='card'>
                <div class='card_img'>
                     <img src='$ab'>
                </div>
                <h3>$car_name</h3>
                <a href='car.php?carname=$car_name'>SELECT VEHICLE</a>
            </div>";
    }
            ?>
            

        </div>
    </div>

</body>

</html>
