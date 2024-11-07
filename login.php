<?php

$nouser = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'config.php';
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";

$result = mysqli_query($conn,$sql);

if($result){
    $num = mysqli_num_rows($result);
    if($num>0){
        $getdata = mysqli_fetch_assoc($result);
        session_start();
        if($getdata['user_type']=='user'){
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['first_name'] = $getdata['first_name'];
            $_SESSION['last_name'] = $getdata['last_name'];
            header('location:main.php');
        }elseif($getdata['user_type']=='admin'){
            
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['first_name'] = $getdata['first_name'];
            $_SESSION['last_name'] = $getdata['last_name'];
            header('location:./admin/admin.php');
        

        
    }
}else{
    $nouser = 1;
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
        <?php if($nouser){
              echo  "<h4>User Not Found!</h4>";
            } ?>
           <div class="form_container">
           <h3>Welcome Back</h3>
           <form action="login.php" method="POST">
                <div class="input_box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                </div>

                <div class="input_box">
                <label for="password">Password</label>
                <input type="password" name="pass" id="pass">
                </div>

                <button type="submit" class="btn">Login</button>
                <h5>Don't have an account? <a href="signup.php">Create Now</a></h5>
           </form>

           <div class="or">OR</div>
           <div class="extra">
            <div class="gf"><img src="images/google.png" alt="">Login with Google</div>
            <div class="gf"><img src="images/facebook.png" alt="">Login with Facebook</div>
           </div>
           </div>
        </div>

    </div>
</body>
</html>