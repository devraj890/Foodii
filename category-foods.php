    <?php
    $page = 'categories';
    include('partials-front/menu.php');
    ?>
    </nav>
    <?php
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";
        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);
        $category_title = $row['title'];
    } else {
        header('location:' . $SITEURL);
    }
    ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">

            <h2> <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container s-head">
            <h1 class="text-center" style="color:blue;">related food</h1>

            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id";
            $res2 = mysqli_query($conn, $sql2);

            $count2 = mysqli_num_rows($res2);
            if ($count2 > 0) {
                //Food is Available
                while ($row2 = mysqli_fetch_assoc($res2)) {
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $image_name = $row2['image_name'];
            ?>

            <div class="food-menu-box" style="background-color:voilet;">
                <div class="food-menu-img">
                    <?php
                            if ($image_name == "") {
                                //Image not Available
                                echo "<div class='error'>Image not Available.</div>";
                            } else {
                                //Image Available
                            ?>
                    <img src="<?php echo $SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="food"
                        class="img-responsive img-curve" style="height: 20%; width:25%;border-radius:100px">
                    <?php
                            }
                            ?>

                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class="food-price">&#8377; <?php echo $price; ?> </p>
                    <p class="food-detail">
                        <?php echo $description; ?>
                    </p>
                    <br>

                    <a href="<?php echo $SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order
                        Now</a>
                </div>
            </div>
            <br>
            <?php
                }
            } else {
                //Food not available
                echo "<div class='error'>Sweet not Available.</div>";
            }

            ?>



            <div class="clearfix"></div>



        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->
    <div class="container">
        <section style="width:60rem;">


            <div class="row">

            </div>
            <div class="card m-1 image1" style=" heigth:12rem; width:15rem;">
                <img src="<?php echo $SITEURL; ?> images/food/<?php echo $image_name; ?>" class="card-img-top"
                    id="cardi" alt="...">
                <div class="card-body width:12rem;">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text"> <?php echo $description; ?></p>
                    <a href="<?php echo $SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">order
                        now</a>
                    <h5>price:</h5>
                    <button type="button" class="btn btn-outline-dark">₹<?php echo $price; ?> </button>

                </div>
            </div>
            <?php


            ?>

            <div class="w-50"></div>
            <div class="col"></div>

    </div>
    </div>
    </section>';

    <?php include('partials-front/footer.php'); ?>