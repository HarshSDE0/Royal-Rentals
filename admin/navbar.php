    <nav>
            <div class="logo">
                <h2>ROYAL RENTALS</h2>
            </div>
    
            <div class="user">
                <img src="images/user.png" alt="" onclick="openUser()">
            </div>
    
            <div class="user_container">
                <div class="profile">
                    <img src="images/user.png" alt="" >
                </div>
    
                <div class="profile_items">
                    <a class="item" href="">
                        <i class="fa-solid fa-circle-user"></i>
                        <p><?php
                            echo $_SESSION['first_name']." ".$_SESSION['last_name'];
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
    
                    <a class="item" href="">
                        <i class="fa-solid fa-user-pen"></i>
                        <p>Edit Profile</p>
                        <span><i class="fa-solid fa-angles-right"></i></span>
                    </a>
    
                    <a class="item" href="">
                        <i class="fa-solid fa-phone"></i>
                        <p>Contact Us</p>
                        <span><i class="fa-solid fa-angles-right"></i></span>
                    </a>
    
                    <a class="item" href="../logout.php">
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
 
