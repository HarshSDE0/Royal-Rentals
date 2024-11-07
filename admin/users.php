<?php
session_start();
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
   
</head>
<body>
<?php
include 'navbar.php';
include 'sidebar.php';
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
?>

    <table class="content-table">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        <?php
        while($datas = mysqli_fetch_assoc($result)){
          $fname = $datas['first_name'];
          $lname =  $datas['last_name']; 
          $email = $datas['email'];
          $password = $datas['pass'];
          echo "<tr>
          <td>$fname</td>
          <td>$lname</td>
          <td>$email</td>
          <td>$password</td>
          <td><button><a href='deleteuser.php? deleteid=$email'>Delete</a></button></td>
        </tr>";
        }
        ?>

        </tbody>
      </table>
</body>
</html>
