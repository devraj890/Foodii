<?php
// session_start();
include('../config/constants.php');
//remove the session error
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Admin Login</title> -->
    <title>Login - ViMi Sweets</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <!--link for font awesome 6.1..-->
    <!--link for bootstrap 4..-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <!-- <link rel="stylesheet" href="../css/admin_login.css"> -->
    <link rel="stylesheet" href="../css/food.css">


    <!--all bs Scripts-->
    <script src="../js/jquery.min.js"></script>
    <!--link for jquery..-->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!--link for bootstrap 4 js..-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper-utils.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!--link for font awesome 6.1..-->
</head>

<body>

    <div class="container ad-title">
        <h1 style="text-align:center; color:darkslategray;">Admin login</h1>
    </div>


    <div class="container log">

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>
        <!-- <br><br> -->

        <div class="fom-log text-colos cerkel-r back_colos">
            <form action="login.php" method="post">
                <div class=" form-group">
                    <label for="exampleInputEmail1">
                        username:
                    </label>
                    <input type="text" class="form-control cerkel-r" id="exampleInputEmail1" aria - describedby="emailHelp"
                        name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">
                        Password:
                    </label>
                    <input type="password" class="form-control cerkel-r" id="exampleInputPassword1" name="password">
                </div>


                <div class="row mb-1 mt-3">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <button class="btn btn-outline-secondary mt-1 p-1 cerkel-r text-colos" type="submit" name="submit">Login</button>


                    </div>
                </div>
            </form>
            <a href="<?php echo $SITEURL; ?>"> <button class="btn btn-outline-secondary mt-1 p-1 cerkel-r text-colos">home</button></a>

        </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);

    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

        //REdirect to HOme Page/Dashboard
        header('location:' . $SITEURL . 'admin/');
    } else {
        //User not Available and Login FAil
        echo "<script> alert('Incorrect username and password'); </script> ";
        //REdirect to HOme Page/Dashboard
    }
}

?>