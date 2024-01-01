<?php
    require "Loginpage.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/css/Login.css">

    <!-- favicon -->
    <link href="../../assets/img/Tea/RichCe Logo.png Logo.png" rel="icon" />

    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <!-- Vendor.css files -->
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../../assets/vendor/bootstrap-icons/bootstrap-icons.min.css"
      rel="stylesheet"
    />
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="../../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <title>Login</title>
</head> 

<body>
<div class="login-container">
    <div class="container left" data-aos="fade-right" data-aos-delay="100">
        <div class="hero-text">
            <h1>Welcome to <span>RichCe Tea</span></h1>
        </div>
        <div class="hero-img img-fluid">
            <img src="../../assets/img/Tea/Tea1.jpg" alt="">
        </div>
    </div>
    <div class="container right shadow border" data-aos="zoom-in" data-aos-delay="100">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <a href="#">Forgot Password?</a>
            <br> <br>
            <button
            class="get-started-btn" type="submit" value="Login">Login</button>
            <a href="Signup.php">Click to SignUp</a>

            <?php
                // Display error message if authentication failed
                if (isset($error_message)) {
                    echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
                }
                ?>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>