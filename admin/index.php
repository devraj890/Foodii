<?php include('partials/amenu.php'); ?>
<!-- Main Content Section Starts -->
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="main-content" id="1">
        <div class="wrapper">
            <h1>Dashboard</h1>
            <br><br>
            <?php
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br><br>


            <div class="col-4 text-center btn btn-outline-secondary">

                <?php
                //Sql Query 
                $sql4 = "SELECT * FROM tbl_order";
                //Execute Query
                $res4 = mysqli_query($conn, $sql4);
                //Count Rows
                $count4 = mysqli_num_rows($res4);
                ?>

                <h1><?php echo $count4; ?></h1>
                <br />
                Total Orders
            </div>


            <div class="col-4 text-center btn btn-outline-secondary">

                <?php
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_category";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count Rows
                $count2 = mysqli_num_rows($res2);
                ?>

                <h1><?php echo $count2; ?></h1>
                <br />
                Categories
            </div>

            <div class="col-4 text-center btn btn-outline-secondary">

                <?php
                //Sql Query 
                $sql3 = "SELECT * FROM tbl_food";
                //Execute Query
                $res3 = mysqli_query($conn, $sql3);
                //Count Rows
                $count3 = mysqli_num_rows($res3);
                ?>

                <h1><?php echo $count3; ?></h1>
                <br />
                Foods
            </div>

            <div class="col-4 text-center btn btn-outline-secondary">

                <?php
                //Sql Query 
                $sql = "SELECT * FROM tbl_user";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
                ?>

                <h1><?php echo $count; ?></h1>
                <br />
                Users
            </div>

            <div class="col-4 text-center btn btn-outline-secondary">

                <?php
                //Sql Query 
                $sql5 = "SELECT * FROM tbl_contact";
                //Execute Query
                $res5 = mysqli_query($conn, $sql5);
                //Count Rows
                $count5 = mysqli_num_rows($res5);
                ?>

                <h1><?php echo $count5; ?></h1>
                <br />
                Feedback
            </div>

            <!-- <div class="col-4 text-center">

                <?php
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql6 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                //Execute the Query
                $res6 = mysqli_query($conn, $sql6);

                //Get the VAlue
                $row6 = mysqli_fetch_assoc($res6);

                //GEt the Total REvenue
                $total_revenue = $row6['Total'];

                ?>

                <h1>&#8377; <?php echo $total_revenue; ?></h1>
                <br />
                Revenue Generated -->
        </div>

        <div class="clearfix"></div>

    </div>
    </div>
    </div>

    </section>




    <!-- Main Content Setion Ends -->

    <?php include('manage-order.php') ?>
    <?php include('manage-category.php') ?>
    <?php include('manage-food.php') ?>
    <?php include('manage-user.php') ?>
    <?php include('manage-feedback.php') ?>
    <!-- Footer Section Starts -->

    <div class="footer">
        <div class="wrapper" style="background-color: blue;">
            <p class="text-center">2022 All rights reserved, FOODII Developed By - DEV&TEAMS</p>
        </div>
    </div>
    <!-- Footer Section Ends -->

</body>

</html>