<?php
include '../config.php';
session_start();

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

    $insert = "INSERT INTO cars(bname,model,charge,acceleration,engine,speed,transmission,seats,suitcase,image,image1,image2,image3) VALUES('$brand','$modelname','$charge','$acceleration','$engine','$speed','$transmission','$seats','$suitcase','$upload_img','$upload_img1','$upload_img2','$upload_img3')";
    $result = mysqli_query($conn, $insert);
    header('location:viewcars.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <select name="brand" required>
                            <option hidden></option>
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
                        <input type="text" name="modelname" required>
                    </div>

                    <div class="input">
                        <label>Charge per day (in rupees)</label>
                        <input type="text" name="charge">
                    </div>
                </div>


                <div class="set2">
                    <div class="input">
                        <label>Acceleration Time</label>
                        <input type="text" name="time">
                    </div>

                    <div class="input">
                        <label>Engine Size</label>
                        <input type="text" name="engine">
                    </div>

                    <div class="input">
                        <label>Max Speed</label>
                        <input type="text" name="speed">
                    </div>
                </div>


                <div class="set3">
                    <div class="input">
                        <label>Transmission</label>
                        <input type="text" name="transmission">
                    </div>

                    <div class="input">
                        <label>Seats</label>
                        <input type="text" name="seats">
                    </div>

                    <div class="input">
                        <label>Suitcases</label>
                        <input type="text" name="suitcase">
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

            <button type="submit" name="addcar">ADD CAR</button>
        </form>

    </div>

</body>

</html>