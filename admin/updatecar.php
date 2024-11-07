<?php
include '../config.php';
session_start();
$id = $_GET['carid'];

$sql = "SELECT * FROM cars WHERE id=$id";
$result = mysqli_query($conn,$sql);

$cars = mysqli_fetch_assoc($result);
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


if (isset($_POST['addcar'])) {
    $brand = $_POST['brand'];
    $modelname = $_POST['modelname'];
    $charge = $_POST['charge'];
    $engine = $_POST['engine'];
    $speed = $_POST['speed'];
    $acceleration = $_POST['time'];
    $seats = $_POST['seats'];
    $suitcase = $_POST['suitcase'];
    $transmission = $_POST['transmission'];
    $image = $_FILES['image'];
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];
    $image3 = $_FILES['image3'];


    $upload_img =  $image['name'];
    move_uploaded_file($image['tmp_name'], '../images/cars/'.$upload_img);

    $upload_img1 = $image1['name'];
    move_uploaded_file($image1['tmp_name'], '../images/cars/'.$upload_img1);

    $upload_img2 = $image2['name'];
    move_uploaded_file($image2['tmp_name'], '../images/cars/'.$upload_img2);

    $upload_img3 = $image3['name'];
    move_uploaded_file($image3['tmp_name'], '../images/cars/'.$upload_img3);


    $insert = "UPDATE cars SET id=$id, bname='$brand', model='$modelname', charge='$charge', engine='$engine', speed='$speed', acceleration='$acceleration', seats='$seats', suitcase='$suitcase',image='$upload_img', image1='$upload_img1', image2='$upload_img2', image3='$upload_img3' WHERE id=$id";
    $result = mysqli_query($conn, $insert);

   
    header('location:viewcars.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/addcar.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include 'navbar.php';
    include 'sidebar.php';
    ?>

    <div class="addcontainer">
        <form  method="POST" enctype="multipart/form-data">
            <div class="form_container">
                <div class="set1">
                    <div class="input">
                        <label>Brand Name</label>
                        <select name="brand" >
                            <option value="<?php echo $bname;?>"><?php echo $bname; ?></option>
                            <option value="AUDI">AUDI</option>
                            <option value="BENTLEY">BENTLEY</option>
                            <option value="BMW">BMW</option>
                            <option value="LAMBORGHINI">LAMBORGHINI</option>
                            <option value="BUGATTI">BUGATTI</option>
                            <option value="FERRARI">FERRARI</option>
                            <option value="MCLAREN">MCLAREN</option>
                            <option value="ROLLS ROYCE">ROLLS ROYCE</option>
                            <option value="PORSCHE">PORSCHE</option>
                        </select>
                    </div>

                    <div class="input">
                        <label>Model Name</label>
                        <input type="text" name="modelname" value="<?php echo $mname; ?>">
                    </div>

                    <div class="input">
                        <label>Charge per day (in rupees)</label>
                        <input type="text" name="charge" value="<?php echo $charge; ?>">
                    </div>
                </div>


                <div class="set2">
                    <div class="input">
                        <label>Acceleration Time</label>
                        <input type="text" name="time" value="<?php echo $acceleration; ?>">
                    </div>

                    <div class="input">
                        <label>Engine Size</label>
                        <input type="text" name="engine" value="<?php echo $engine; ?>">
                    </div>

                    <div class="input">
                        <label>Max Speed</label>
                        <input type="text" name="speed" value="<?php echo $speed; ?>">
                    </div>
                </div>


                <div class="set3">
                    <div class="input">
                        <label>Transmission</label>
                        <input type="text" name="transmission" value="<?php echo $transmission; ?>">
                    </div>

                    <div class="input">
                        <label>Seats</label>
                        <input type="text" name="seats" value="<?php echo $seats; ?>">
                    </div>

                    <div class="input">
                        <label>Suitcases</label>
                        <input type="text" name="suitcase" value="<?php echo $suitcase; ?>">
                    </div>
                </div>

                <div class="set4">
                    <div class="input">
                        <label>Main Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input">
                        <label>Image 1</label>
                        <input type="file" name="image1">
                    </div>

                    <div class="input">
                        <label>Image 2</label>
                        <input type="file" name="image2">
                    </div>

                    <div class="input">
                        <label>Image 3</label>
                        <input type="file" name="image3">
                    </div>
                </div>
            </div>

            <button type="submit" name="addcar">UPDATE CAR</button>
        </form>

    </div>

</body>

</html>