<?php include('config/constants.php');

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}

// session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fodde</title>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 500px;
    }
    </style>
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/all.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'home') {
                                            echo 'active';
                                        } ?>" href="<?php echo $SITEURL; ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'service') {
                                            echo 'active';
                                        } ?>" href="<?php echo $SITEURL; ?>service.php">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'foods') {
                                            echo 'active';
                                        } ?>" href="<?php echo $SITEURL; ?>foods.php">FOOD</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'about') {
                                            echo 'active';
                                        } ?>" href="<?php echo $SITEURL; ?>about.php">ABOUT</a>
                </li>

                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                    if ($loggedin) {
                        echo
                        ' <p><h4 class=" mt-1">' . $_SESSION['username'] . '</h4></p>
                        </form>';
                        echo '<li class="nav-item"><a href="ucheckorder.php"><button type="button" class="btn btn-outline-secondary p-1 ">ORDER</button></a></li>';

                        echo '<a href="' . $SITEURL . 'user-logout.php"><button type="button" class="btn btn-outline-secondary p-1">LOGOUT</button></a>
                        ';
                    }
                }
                if (!$loggedin) {

                    echo
                    '<a href="' . $SITEURL . 'user-login.php"><button type="button" class="btn btn-outline-secondary mt-1 p-1 cerkel-r">LOGIN</button></a>
                        <a href="' . $SITEURL . 'user-signup.php"><button type="button" class="btn btn-outline-secondary mt-1 p-1 cerkel-r">SINGUP</button></a>';
                }
                ?>
                <li class="nav-item">
                <form class="" action="<?php echo $SITEURL; ?>food-search.php" method="POST">
                    <input type="search" class="mt-1 p-1 cerkel-r" name="search" placeholder="Search here iteam" required>
              
                </form>
                </li>
            </ul>
        </div>
        


        <!-- <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'categories') {
                                            echo 'active';
                                        } ?>" href="<?php echo $SITEURL; ?>categories.php">CATEGIRY</a>
                </li> -->
        <!-- Navbar Section Ends Here -->