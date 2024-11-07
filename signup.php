<?php
session_start();

$fail = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'config.php';
    
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
   $pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE email = '$email'";

$result = mysqli_query($conn,$sql);

if($result){
    $num = mysqli_num_rows($result);
    if($num>0){
        $fail = 1;
    }else{
        $sql = "INSERT INTO user(first_name,last_name,email,pass) VALUES ('$firstName','$lastName','$email','$pass')";

        $result = mysqli_query($conn,$sql);
    
       if($result){
        $_SESSION['first_name'] =$firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION['email'] =$email;
        $_SESSION['pass'] = $pass;
        header('location:main.php');
       }else{
        die(mysqli_error($conn));
       }
    }
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="box1">
            <div class="name">
                <h1>ROYAL</h1>
                <h1>RENTALS</h1>
            </div>

            <div class="car-img">
                <img src="images/car_img.png" alt="">
            </div>
        </div>

        <div class="box2">
            <?php if($fail){
              echo  "<h4>Email Already Exists!</h4>";
            } ?>
           <div class="form_container">
           <h3>Create Account</h3>
           <form action="signup.php" method="POST">
           <div class="name_box">
                <div class="input_box">
                <label  for="first">First Name</label>
                <input type="text" name="first_name" id="first" required>
                </div>

                <div class="input_box">
                <label for="last">Last Name</label>
                <input type="text" name="last_name" id="last" required>
                </div>
            </div>
                <div class="input_box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                </div>

                <div class="input_box">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
                </div>

                <button type="submit" class="btn">Create Account</button>
                <h5>Already have an account? <a href="login.php">Login</a></h5>
           </form>

           <div class="or">OR</div>
           <div class="extra">
            <div class="gf"><img src="images/google.png" alt="">Sign up with Google</div>
            <div class="gf"><img src="images/facebook.png" alt="">Sign Up with Facebook</div>
           </div>
           </div>
        </div>

    </div>
</body>
</html>