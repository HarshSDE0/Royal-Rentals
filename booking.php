<?php
session_start(); 
include 'config.php';

$carname = $_GET['carname'];
$sql = "SELECT * FROM cars WHERE model ='$carname'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
$name = $row['model'];
$brand = $row['bname'];
$charge = $row['charge'];
$image = './images/cars/' . $row['image'];
$image1 = './images/cars/' . $row['image1'];
$image2 = './images/cars/' . $row['image2'];
$image3 = './images/cars/' . $row['image3'];

$login_email = $_SESSION['email'];


if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $bookingid = rand(111111,999999);

    
    $sql2 = "INSERT INTO bookings(first_name, last_name, email, phone, state_name, city_name, user_address, from_date, to_date, booking_id, car_name, brand_name, charge , login_email) VALUES ('$fname','$lname','$email','$phone','$state','$city','$address','$fromdate','$todate','$bookingid','$name','$brand','$charge', '$login_email')";
    $result2 = mysqli_query($conn,$sql2);

    if($result2){
        echo mysqli_error($conn);
        header('location:mybookings.php');
      
    }else{
        header('location:main.php');
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="CSS/booking.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'navbar.php';?>

    <div class="b_container">
        <div class="car_images">
                <div class="big_car">
                    <img src="<?php echo $image; ?>" alt="Image Not Found" id="image">
                </div>

                <div class="small_car">
                <img src="<?php echo $image; ?>" alt="Image Not Found" onclick="change()"> 
                <img src="<?php echo $image1; ?>" alt="Image Not Found" onclick="change1()">
                <img src="<?php echo $image2; ?>" alt="Image Not Found" onclick="change2()">
                <img src="<?php echo $image3; ?>" alt="Image Not Found" onclick="change3()">
                </div>
        </div>
        <div class="booking_form">
    <div class="car_content">
        <div class="car_name">
        <h2><?php echo $name;?></h2>
        <h3><?php echo $brand;?></h3>
        </div>
        <h2><?php echo $charge;?> / day</h2>
    </div>

            <form method="POST">
                <div class="set iset">
                <div class="input">
                <label>first name</label>
                <input type="text" name="fname" required>
                </div>

                <div class="input iset">
                <label>last name</label>
                <input type="text" name="lname" required>
                </div>
                </div>

                <div class="set iset">
                <div class="input">
                <label>email</label>
                <input type="email" name="email" required>
                </div>

                <div class="input iset">
                <label>mobile number</label>
                <input type="number" name="phone" required>
                </div>
                </div>

                <div class="set iset">
                <div class="input">
                <label>state</label>
                <input type="text" name="state" required>
                </div>

                <div class="input iset">
                <label>city</label>
                <input type="text" name="city" required>
                </div>
                </div>

                <div class="input">
                <label>address</label>
                <input type="text" name="address" required>
                </div>

                <div class="set iset">
                <div class="input">
                <label>from date</label>
                <input type="date" name="fromdate" id="d1" required>
                </div>

                <div class="input iset">
                <label>to date</label>
                <input type="date" name="todate" id="d2" required>
                </div>
                </div>

                <button type="submit" name="submit">BOOK NOW</button>
            </form>
        </div>
    </div>

    <script>
        let mainImage = document.getElementById('image');
        change=()=>{
            mainImage.src = "<?php echo $image; ?>";
        }

        change1=()=>{
            mainImage.src = "<?php echo $image1; ?>";
        }

        change2=()=>{
            mainImage.src = "<?php echo $image2; ?>";
        }

        change3=()=>{
            mainImage.src = "<?php echo $image3; ?>";
        }

    </script>
</body>
</html>