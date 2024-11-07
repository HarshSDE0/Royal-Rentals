<?php
session_start();
include 'config.php';

if (!isset($_SESSION['first_name'])) {
    header('index.php');
}
?>

<?php
$sql = "SELECT * FROM brand ";
$result = mysqli_query($conn, $sql);



$query = "SELECT * FROM popular" ;
$pop = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Rentals</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <script src="https://kit.fontawesome.com/9acd62c403.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section class="home">
        <h1>ROYAL RENTALS</h1>

        <div class="about_btn"><a href="about.php">ABOUT US</a></div>

        <div class="social_btn">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-facebook-f"></i>
        </div>
    </section>

    <section class="brands" id="brands">
        <div class="heading">
            <h3>ALL BRANDS</h3>
        </div>
        <div class="brands_container">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

                $id = $row['brand_id'];
                $brandname = $row['brand_name'];
                $brandlogo = $row['brand_logo'];
                echo "<div class='brand_item'>
                <img class='brand_logo' src='$brandlogo'>
                <div class='brand_name'>
                    <h2>$brandname</h2>
                    <a href='brand.php?brandid=$id'> See All Models<span><i class='fa-solid fa-angles-right'></i></span></a>
                </div>
            </div>";
            }

            ?>
        </div>
        </div>
    </section>

    <section class="popular">
        <div class="heading">
            <h3>POPULAR CARS</h3>
        </div>

     

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
               <?php 
               while($pcar = mysqli_fetch_assoc($pop)){

                $car_name = $pcar['car_name'];
                $brand_name = $pcar['brand_name'];
                $image = $pcar['car_image'];
                $id = $pcar['car_id'];
                $car_img = 'images/cars/'.$image;

              $logo = './images/logos/'.$brand_name.'.png';
                
                echo " <div class='swiper-slide'>
                <div class='pcar_img'>
                    <img src='$car_img'>
                </div>

                <div class='pcar_content'>
                    <div class='pcar_logo'>
                        <h3>$brand_name </h3>
                        <img src='$logo'>
                    </div>
                    <h1 class='pcar_name'>$car_name </h1>
                    <a class='pcar_btn' href='car.php?carname=$car_name'>VIEW CAR</a>
                </div>
            </div>";
               }
               ?>
               

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox=""></svg>
            </div>
        </div>

    </section>


    <section class="services" id="services">
        <div class="heading">
            <h3>OUR SERVICES</h3>
        </div>

        <div class="service_container">
            <div class="service s1">
                <h3>Super Car Hire</h3>
                <button class="sbtn">BROWSE CARS</button>
            </div>

            <div class="service s2">
                <h3>Prestige Car Hire</h3>
                <button class="sbtn">BROWSE CARS</button>
            </div>

            <div class="service s3">
                <h3>Wedding Car Hire</h3>
                <button class="sbtn">BROWSE CARS</button>
            </div>

            <div class="service s4">
                <h3>Long Term Hire</h3>
                <button class="sbtn">BROWSE CARS</button>
            </div>

        </div>
    </section>



    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);

                }
            }
        });
    </script>


<section class="services" id="services">
        <div class="heading">
            <h3>Why Choose Us</h3>
        </div>
        <h3>Experience The Exotic & Luxury Car Collection By Royal Rentals</h3>
        <div class="why_container">
            <div class="why">
            <i class="fa-solid fa-car"></i>
                <h4>Variety of Car Brands</h4>
                <p>Audi , Bentley , BMW , Lamborghini , Bugatti , Ferrari , Mclaren , Rolls Royce ,  Porsche and more.</p>
            </div>

            <div class="why">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <h4>Best Rate Guarantee</h4>
            <p>We guarantee you always get the lowest price when you reserve an exotic & luxury car through an official Exotic & Luxury Car Rental company booking channel, or we'll match the lower price.</p>
            </div>
          
            <div class="why">
            <i class="fa-solid fa-headset"></i>
                <h4>24*7 Customer Support</h4>
                <p>Customer service always plays the biggest role in our company’s vision of being a sustainable business. Our goal is to provide you with bar none superior service at any cost.</p>
            </div>
        </div>

        </section>


<?php include 'footer.php'; ?>
</body>

</html>