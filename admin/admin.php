<?php
include '../config.php';
session_start();

$sql1 = "SELECT * FROM user";
$result1 = mysqli_query($conn,$sql1);
$num1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM cars";
$result2 = mysqli_query($conn,$sql2);
$num2 = mysqli_num_rows($result2);

$sql3 = "SELECT * FROM bookings";
$result3 = mysqli_query($conn,$sql3);
$num3 = mysqli_num_rows($result3);

$sql4 = "SELECT * FROM bookings WHERE brand_name = 'audi'";
$result4 = mysqli_query($conn,$sql4);
$audi = mysqli_num_rows($result4);

$sql5 = "SELECT * FROM bookings WHERE brand_name = 'bentley'";
$result5 = mysqli_query($conn,$sql5);
$bentley = mysqli_num_rows($result5);

$sql6 = "SELECT * FROM bookings WHERE brand_name = 'bmw'";
$result6 = mysqli_query($conn,$sql6);
$bmw = mysqli_num_rows($result6);

$sql7 = "SELECT * FROM bookings WHERE brand_name = 'lamborghini'";
$result7 = mysqli_query($conn,$sql7);
$lamborghini = mysqli_num_rows($result7);

$sql8 = "SELECT * FROM bookings WHERE brand_name = 'bugatti'";
$result8 = mysqli_query($conn,$sql8);
$bugatti = mysqli_num_rows($result8);

$sql9 = "SELECT * FROM bookings WHERE brand_name = 'ferrari'";
$result9 = mysqli_query($conn,$sql9);
$ferrari = mysqli_num_rows($result9);

$sql10 = "SELECT * FROM bookings WHERE brand_name = 'mclaren'";
$result10 = mysqli_query($conn,$sql10);
$mclaren = mysqli_num_rows($result10);

$sql11 = "SELECT * FROM bookings WHERE brand_name = 'rolls royce'";
$result11 = mysqli_query($conn,$sql11);
$rollsroyce = mysqli_num_rows($result11);

$sql12 = "SELECT * FROM bookings WHERE brand_name = 'porsche'";
$result12 = mysqli_query($conn,$sql12);
$porsche = mysqli_num_rows($result12);

$dataPoints = array( 
	array("y" => $audi, "label" => "AUDI" ),
	array("y" => $bentley, "label" => "BENTLEY" ),
	array("y" =>$bmw, "label" => "BMW" ),
    array("y" =>$lamborghini, "label" => "LAMBORGHINI" ),
    array("y" =>$bugatti, "label" => "BUGATTI" ),
    array("y" =>$ferrari, "label" => "FERRARI" ),
    array("y" =>$mclaren, "label" => "MCLAREN" ),
    array("y" =>$rollsroyce, "label" => "ROLLS ROYCE" ),
    array("y" =>$porsche, "label" => "PORSCHE" ),

);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('navbar.php');
    include('sidebar.php');
    ?>

    <div class="container">
        <div class="admin_content">
            <div class="details">
                <div class="box box1">
                    <h3><i class="fa-solid fa-users"></i> Total Users : <?php echo $num1 ;?></h3>
                </div>
                <div class="box box2">
                    <h3><i class="fa-solid fa-car"></i>Total Cars : <?php echo $num2 ;?></h3>
                </div>
                <div class="box box3">
                    <h3><i class="fa-solid fa-layer-group"></i>Total Bookings : <?php echo $num3 ;?></h3>
                </div>
            </div>

           <div class="charts">
           <div id="chartContainer" style="height: 370px; width: 100%;"></div>

           </div>
        </div>
    </div>

    <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "CAR BOOKINGS"
	},
	axisY: {
		title: "NO OF CARS"
	},
	data: [{
		type: "column",
		yValueFormatString: "#",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>