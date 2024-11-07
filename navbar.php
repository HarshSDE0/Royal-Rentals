<nav>
    <div class="logo">
        ROYAL RENTALS
    </div>

    <div class="menu">
        <li><a href="main.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="mybookings.php">BOOKINGS</a></li>
        <li><a href="main.php?#services">SERVICES</a></li>
        <li><a href="main.php?#brands">BRANDS</a></li>
    </div>

    <div class="user">
        <img src="images/user.png" alt="" onclick="openUser()">
    </div>

    <div class="user_container">
        <div class="profile">
            <img src="images/user.png" alt="">
        </div>

        <div class="profile_items">
            <a class="item" href="">
                <i class="fa-solid fa-circle-user"></i>
                <p><?php
                    echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
                    ?>
                </p>
            </a>

            <a class="item" href="">
                <i class="fa-solid fa-envelope"></i>
                <p>
                    <?php
                    echo $_SESSION['email'];
                    ?>
                </p>
            </a>


            <a class="item" href="mybookings.php">
            <i class="fa-solid fa-car"></i>
                <p>My Bookings</p>
                <span><i class="fa-solid fa-angles-right"></i></span>
            </a>

            <a class="item" href="logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
                <span><i class="fa-solid fa-angles-right"></i></span>
            </a>
        </div>
    </div>
</nav>

<script>
    let userContainer = document.querySelector('.user_container');
    openUser = () => {
        userContainer.classList.toggle('open_user');
    }
</script>