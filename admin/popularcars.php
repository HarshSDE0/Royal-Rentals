<?php
include '../config.php';
session_start();

if (isset($_POST['add'])) {
    $cid = $_POST['cid'];

    $sql1 = "SELECT * FROM cars WHERE id='$cid'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $model = $row['model'];
    $brand = $row['bname'];
    $image = $row['image'];

    $sql2 = "INSERT INTO popular(car_id,car_name,brand_name,car_image) VALUES ('$cid','$model','$brand','$image')";
    $result = mysqli_query($conn, $sql2);


}

if (isset($_POST['remove'])) {
    $rid = $_POST['rid'];
    $sql3 = "DELETE FROM popular WHERE car_id='$rid'";
    $result1 = mysqli_query($conn, $sql3);
}

$sql = "SELECT * FROM popular";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/popularcars.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'navbar.php';
    include 'sidebar.php';
    ?>

    <div class="pcontainer">
        <div class="popular">
            <div class="box">
                <form class="form" method="POST" action="">
                    <p class="form-title">Add to Popular Cars</p>
                    <div class="input-container">
                        <input type="number" placeholder="Enter Car ID" name="cid">
                    </div>
                    <button type="submit" class="submit" name="add">ADD CAR</button>
                </form>
            </div>

            <div class="box">
                <form class="form" method="POST" action="">
                    <p class="form-title">Remove From Popular Cars</p>
                    <div class="input-container">
                        <input type="number" placeholder="Enter Car ID" name="rid">
                    </div>
                    <button type="submit" class="submit" name="remove">REMOVE CAR</button>
                </form>
            </div>
        </div>

        <div class="pdetails">
            <div class="table_container">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Car ID</th>
                            <th>Car Name</th>
                            <th>Brand Name</th>
                            <th>Car Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($cars = mysqli_fetch_assoc($result)) {
                            $car_id = $cars['car_id'];
                            $car_name =  $cars['car_name'];
                            $car_brand = $cars['brand_name'];
                            $car_image = $cars['car_image'];
                            $c_img = '../images/cars/'.$car_image;

                            echo "<tr>
                            <td>$car_id</td>
                            <td>$car_name</td>
                            <td>$car_brand</td>
                            <td><div class='image'><img src='$c_img'></div></td>
                            </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>