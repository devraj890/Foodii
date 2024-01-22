<?php
include "config/constants.php";

//hide warning of header
ob_start();

// session_start();
//remove the session error
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:" . $SITEURL . "user-login.php");
    exit;
}

$page = 'foods';
include('partials-front/menu.php');

?>
</nav>
<?php
if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);

        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
    } else {
        header('location:' . $SITEURL);
    }
} else {
    header('location:' . $SITEURL);
}
?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search">
    <div class="container fom-log">

        <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

        <form action="" method="POST" class="order">
            <fieldset>
                <legend>Selected food</legend>

                <div class="food-menu-img">
                    <?php

                    //CHeck whether the image is available or not
                    if ($image_name == "") {
                        //Image not Availabe
                        echo "<div class='error'>Image not Available.</div>";
                    } else {
                        //Image is Available
                    ?>
                    <img src="<?php echo $SITEURL; ?>images/food/<?php echo $image_name; ?>"
                        style="height:10rem; border-radius:90px; width:10rem" alt="Chicke Hawain Pizza"
                        class="img-responsive img-curve">
                    <?php
                    }

                    ?>

                </div>

                <div class="food-menu-desc">
                    <h3><?php echo $title; ?></h3>
                    <input type="hidden" name="food" value="<?php echo $title; ?>">

                    <p class="food-price">&#8377; <?php echo $price; ?> </p>
                    <input type="hidden" name="price" value="<?php echo $price; ?>">

                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>

                </div>

            </fieldset>


            <fieldset>
                <?php
                $user = $_SESSION['username'];
                $sql2 = "SELECT * FROM tbl_user WHERE username = '$user'";
                $result1 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $name = $row2['name'];
                    $adress = $row2['address'];
                    $email = $row2['email'];
                    $conta = $row2['phone'];
                ?>
                <div class="row">
                    <div class="col">

                        <legend>Delivery Details</legend>
                        <div class="order-label">Full Name</div>
                        <input type="text" name="full-name" placeholder="Enter Full Name" class="input-responsive"
                            value="<?php echo $name; ?>" required>

                    </div>
                    <div class="col">

                        <div class="order-label">Phone Number</div>
                        <input type="tel" name="contact" placeholder="Enter Mobile Number" class="input-responsive"
                            value="<?php echo $conta; ?>" required>

                    </div>
                    <div class="col">

                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="Enter Email" class="input-responsive"
                            value="<?php echo $email; ?>" required>

                    </div>
                    <div class="col">

                        <div class="order-label">Address</div>
                        <textarea name="address" rows="10" placeholder="Enter Full Address to deliver"
                            class="input-responsive" value="<?php echo $adress; ?>" required></textarea>
                    </div>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
            </fieldset>
            <?php } ?>
        </form>
    </div>

    <?php
   
    $username = $_SESSION['username'];
    $sql3 = "SELECT cid FROM tbl_user WHERE username = '$username'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
       // Access the 'cid' value from the associative array
    $cid = $row3['cid'];
   

    if (isset($_POST['submit'])) {
                $food = $_POST['food'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        $total = $price * $qty; // total = price x qty 

        $order_date = date("Y-m-d h:i:sa"); //Order DAte

        $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

        $customer_name = $_POST['full-name'];
        $customer_contact = $_POST['contact'];
        $customer_email = $_POST['email'];
        $customer_address = $_POST['address'];


        $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address',
                        cid ='$cid'
                    ";

        $res2 = mysqli_query($conn, $sql2);

        if ($res2 == true) {
            $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
            header('location:' . $SITEURL . 'index.php');
        } else {
            $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
            header('location:' . $SITEURL);
        }
    }

    //hide warning of header
    ob_flush();
    ?>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<?php include('partials-front/footer.php'); ?>