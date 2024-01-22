<?php

include('config/constants.php');
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
$showalert = false;
$showerr = false;
if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $existsql = "SELECT * FROM tbl_user WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $showerr = "Username Already Exists!";
    } else {
        if ($password == $cpassword) {
            $sql = "insert into tbl_user (name,gender,phone,email,address,username,password) values ('$name', '$gender', '$phone', '$email', '$address', '$username', '$password')";

            $res = mysqli_query($conn, $sql);

            if ($res) {
                $showalert = true;
            }
        } else {
            $showerr = "Password do not match!";
        }
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
if ($showalert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Account has been created. you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($showerr) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showerr . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<br>
<div class="text-colos">
<div class="fom-log cerkel-r back_colos" >
    <div class=" text-center">
        <h1 class="text-colos">Signup Here</h1>
    </div>

        <form action="#" method="post">
            <div class="form-group">
                <label class="control-label" for="name">Name :</label>
                <input type="text" class="form-control cerkel-r" id="name" placeholder="Enter Name" name="name" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="gender">Gender :</label> <br>
                <div class="form-check-inline">
                    <label class="form-check-label ml-2">
                        <input type="radio" class="form-check-input" style="color: wheat;"  name="gender" value="Male" /> Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label ml-2">
                        <input type="radio" class="form-check-input text-colos" name="gender" value="Female" /> Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="Phone">Phone :</label>
                <input type="number" class="form-control cerkel-r" id="phone" placeholder="Enter Phone Number" name="phone"
                    required>
            </div>
            <div class="form-group">
                <label class="control-label " for="email">Email :</label>
                <input type="email" class="form-control cerkel-r" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
                <label class="control-label text-colos" for="address">Address :</label>
                <input type="text" class="form-control cerkel-r" id="address" placeholder="Enter Address" name="address"
                    required>
            </div>
            <div class="form-group">
                <label class="control-label " for="username">Username :</label>
                <input type="text" class="form-control cerkel-r" id="username" placeholder="Enter Username" name="username"
                    required>
            </div>
            <div class="form-group">
                <label class="control-label " for="password">Password :</label>
                <input type="password" class="form-control cerkel-r" id="password" placeholder="Enter password" name="password"
                    required>
            </div>
            <div class="form-group">
                <label class="control-label" for="cpassword">Confirm Password :</label>
                <input type="password" class="form-control cerkel-r" id="cpassword" placeholder="Confirm password"
                    name="cpassword" required>
            </div>
            <div class="form-group mb-2 mt-2">
                <button type="submit" class="btn btn-outline-primary w-20 cerkel-r text-colos" name="signup">Signup</button>
            </div>


    </div>
</div>

<hr>