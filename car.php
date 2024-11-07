<?php session_start();
include 'config.php';

$carname = $_GET['carname'];

$sql2 = "SELECT * FROM cars WHERE model = '$carname'";
$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_assoc($result2);
$model = $row2['model'];
$bname = $row2['bname'];
$charge = $row2['charge'];
$acceleration = $row2['acceleration'];
$engine = $row2['engine'];
$speed = $row2['speed'];
$transmission = $row2['transmission'];
$seat = $row2['seats'];
$suitcase = $row2['suitcase'];
$image = './images/cars/' . $row2['image'];
$image1 = './images/cars/' . $row2['image1'];
$image2 = './images/cars/' . $row2['image2'];
$image3 = './images/cars/' . $row2['image3'];

$sql = "SELECT * FROM brand WHERE brand_name = '$bname'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$brandlogo = $row['brand_logo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Rentals</title>
  <link rel="stylesheet" href="CSS/navbar.css">
  <link rel="stylesheet" href="CSS/car.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="image_container">
    <div class="big_img">
      <img id="image" src="<?php echo $image; ?>" alt="Image Not Found">
    </div>

    <div class="small_img">
      <div class="car_content">

        <div class="name">
          <h1>Model</h1>
          <h2><?php echo $model; ?></h2>
          <br><br>
          <h1>Charge</h1>
          <h2>Rs <?php echo $charge;?> / perday</h2>
        </div>

        <div class="car_logo">
          <img src="<?php echo $brandlogo; ?>" alt="">
        </div>
      </div>

      <div class="car_images">
        <img id="image0" src="<?php echo $image; ?>" alt="Image Not Found" onclick="change()">
        <img id="image1" src="<?php echo $image1; ?>" alt="Image Not Found" onclick="change1()">
        <img id="image2" src="<?php echo $image2; ?>" alt="Image Not Found" onclick="change2()">
        <img id="image3" src="<?php echo $image3; ?>" alt="Image Not Found" onclick="change3()">
      </div>

      <a href="booking.php?carname=<?php echo $carname;?>">RENT CAR</a>
    </div>
  </div>

  <div class="details_container">
   <div class="boxes">
   <div class="box">
    <img src="./images/time.png" alt="">
    <h3><?php echo $acceleration;?> sec</h3>
    <h5>0-60 miles/h</h5>
  </div>

    <div class="box">
      <img src="./images/engine.png" alt="">
    <h3><?php echo $engine; ?> L</h3>
    <h5>Engine Size</h5>
  </div>

    <div class="box">
    <img src="./images/speed.png" alt="">
    <h3><?php echo $speed; ?> mph/h</h3>
    <h5>Max. Speed</h5>
    </div>

    <div class="box">
    <img src="./images/transmission.png" alt="">
    <h3><?php echo $transmission; ?></h3>
    <h5>Transmission</h5>
    </div>

    <div class="box">
    <img src="./images/seat.png" alt="">
    <h3><?php echo $seat; ?> People</h3>
    <h5>Seats</h5>
    </div>

    <div class="box">
    <img src="./images/suitcase.png" alt="">
    <h3><?php echo $suitcase; ?></h3>
    <h5>Suitcases</h5>
    </div>
   </div>

  </div>



  <script>
    let mainimage = document.getElementById('image');
     
     change = () =>{
      mainimage.src = "<?php echo $image; ?>";
     }

     change1 = () =>{
      mainimage.src = "<?php echo $image1; ?>";
     }

     change2 = () =>{
      mainimage.src = "<?php echo $image2; ?>";
     }

     change3 = () =>{
      mainimage.src = "<?php echo $image3; ?>";
     }


  </script>

</body>

</html>