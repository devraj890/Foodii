<?php
include('config/constants.php');
//remove the session error
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}

// $login = false;
$showerr = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from tbl_user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        // session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('location:' . $SITEURL);
    } else {
        // echo "<script> alert('Incorrect username and password'); </script> ";
        $showerr = "Incorrect username and password!";
    }
}
?>

<?php
include('partials-front/menu.php');
?>
</nav>
<hr>
<br>
<?php

if ($showerr) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showerr . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="fom-log text-colos cerkel-r back_colos">
    <form action="user-login.php" method="post">
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

        <button type="submit" class="btn btn-outline-primary cerkel-r text-colos mt-3">
            login
        </button>


    </form>
</div>
<hr>