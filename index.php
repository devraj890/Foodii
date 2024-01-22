    <?php
    //clear session start notice......
    error_reporting(E_ALL ^ E_NOTICE);
    if (!isset($_SESSION)) {
        session_start();
    }

    $page = 'home';
    include('partials-front/menu.php');

    ?>
    <style>

.offer-container {
    text-align: center;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.offer h1 {
    color: #ff5733;
    font-size: 24px;
}

.offer p {
    font-size: 18px;
    margin-top: 10px;
}
</style>
  

 <style>
    
 </style>

    <?php
   
    // if (isset($_SESSION['order'])) {
    //     echo $_SESSION['order'];
    //     unset($_SESSION['order']);
    // }
    ?>

    <a class="navbar-brand" href="#"></a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#cat">SERVICE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#awa">AWORD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#fed">FEEDBACK</a>
        </li>
    </ul>
    </nav>
    <!-- slidstart -->
    
    <!-- slideshow -->
    <div class="container-fluid mt-1 p-1 mt-1 pt-1 mb-1">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <!-- <div class="container">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/cr2.jpg" style="height:30rem; border-radius: 10%;" alt="Los Angeles"
                            class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/cr3.jpg" style=" border-radius: 10%;" alt="Chicago" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="images/cr4.jpg" style=" border-radius: 10%;" alt="New York" class="d-block">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

    </div> 
    <!-- section start for services -->
    
    <div class="offer-container">
        <div class="offer">
            <h1>Special Offer</h1>
            <p>Get a 20% discount on all items today!</p>
            <div id="countdown"></div>
        </div>
    </div>
    
    <!-- CAtegories Section Starts Here -->
    <section class="categories" id="cat">
        <div class="container">
            <h1 class="text-center" style="color: blue;">Categories Available</h1>

            <div class="row">
                <?php
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 6";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if ($count > 0) {
                    // Categories Available
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                ?>
                        <div class="col-md-4 mb-4">
                            <a href="<?php echo $SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                                <div class="box-3 float-container">
                                    <?php
                                    // Check whether Image is available or not
                                    if ($image_name == "") {
                                        // Display Message
                                        echo "<div class='error'>Image not Available</div>";
                                    } else {
                                        // Image Available
                                    ?>
                                        <img src="<?php echo $SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Category"
                                            class="img-responsive img-curve" style="border-radius: 50%;">
                                    <?php
                                    }
                                    ?>

                                    <h3 class="text-center"><?php echo $title; ?></h3>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                } else {
                    // Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
                ?>
            </div>
        </div>
    </section>
   
    <!-- fOOD MEnu Section Starts Here -->

    <!-- fOOD Menu Section Ends Here -->

    <a class="nav-link <?php if ($page == 'about') {
                            echo 'active';
                        } ?>" href="<?php echo $SITEURL; ?>about.php">
        <h1 style="text-align: center;">Awards and press</h1>
        <div class="container" id="awa">
            <section>
                <div class="row">
                    <div class="col">
                        <div class="media">
                            <img class="mr-3" src="images/award2.jpg" alt="Generic placeholder image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="media-body">
                            <h5 class="mt-0">we are best seller</h5>
                            This award is give for the best service provice.
                            The Nielsen Book Gold and Platinum Awards were originally launched in September 2001, and
                            were
                            presented to
                            publishers and authors of books that achieved outstanding sales through the UK retail book
                            trade.
                            Any one
                            title,
                            in all its print editions, that had sold more than 500,000 copies (Gold) or 1,000,000 copies
                            (Platinum) over
                            a
                            period of five consecutive years qualified for a Nielsen Book Gold & Platinum Award.
                        </div>
                    </div>
                </div>
    </a>


    <!-- Testimonial section starts here -->

    <!-- Testimonial section ends here -->
    </div>

    <?php include('partials-front/footer.php'); ?>
    <!DOCTYPE html>
<html>

<head>
    <title>Online Food Ordering</title>
    <!-- Include your CSS and JavaScript files here -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
    // Your PHP code for including the menu goes here
    ?>

    <!-- Categories Section Starts Here -->
    <!-- Categories Section Ends Here -->

    <?php
    // Your PHP code for including the footer goes here
    ?>
    <script>// Set the target date for the offer expiration
const targetDate = new Date('2023-12-31T23:59:59').getTime();

// Update the countdown every second
const timer = setInterval(updateCountdown, 1000);

function updateCountdown() {
    const currentDate = new Date().getTime();
    const timeLeft = targetDate - currentDate;

    if (timeLeft <= 0) {
        clearInterval(timer);
        document.getElementById('countdown').innerHTML = 'Offer has expired';
    } else {
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById('countdown').innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }
}
</script>
</body>

</html>
