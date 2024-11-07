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

    $sql = "SELECT * FROM cars";
$result = mysqli_query($conn,$sql);
    ?>
   
      <div class="table_container">
      <table class="cars-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Model Name</th>
                <th>Charge/Day</th>
                <th>Acceleration Time</th>
                <th>Engine Size</th>
                <th>Max Speed</th>
                <th>Transmission</th>
                <th>Seats</th>
                <th>Suitcases</th>
                <th>Main Image</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($cars = mysqli_fetch_assoc($result)) {
                $id = $cars['id'];
                $bname =  $cars['bname'];
                $mname = $cars['model'];
                $charge = $cars['charge'];
                $acceleration = $cars['acceleration'];
                $engine = $cars['engine'];
                $speed = $cars['speed'];
                $transmission = $cars['transmission'];
                $seats = $cars['seats'];
                $suitcase = $cars['suitcase'];
                $image = $cars['image'];
                $image1 = $cars['image1'];
                $image2 = $cars['image2'];
                $image3 = $cars['image3'];

                $carimage = '../images/cars/'.$image;
                $car1image = '../images/cars/'.$image1;
                $car2image = '../images/cars/'.$image2;
                $car3image = '../images/cars/'.$image3;

        echo "<tr>
          <td>$id</td>
          <td>$bname</td>
          <td>$mname</td>
          <td>$charge</td>
          <td>$acceleration</td>
          <td>$engine</td>
          <td>$speed</td>
          <td>$transmission</td>
          <td>$seats</td>
          <td>$suitcase</td>
          <td><img class='image' src='$carimage'></td>
          <td><img class='image' src='$car1image'></td>
          <td><img class='image' src='$car2image'></td>
          <td><img class='image' src='$car3image'></td>
          <td><button class='update'><a href='updatecar.php?carid=$id'>Update</a></button></td>
          <td><button class='delete'><a href='deletecar.php?carid=$id'>Delete</a></button></td>
        </tr>";
            }
            ?>

            
        </tbody>
    </table>

      </div>  
    
</body>

</html>