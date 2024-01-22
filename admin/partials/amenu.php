<?php
// session_start();
include('../config/constants.php');
include('login-check.php');
//remove the session error
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
?>



<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vimi Sweets - Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/admin.css">

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
</head>


<nav id="navbar-example2" class="navbar navbar-light bg-light" Style="position : fixed">
    <a class="navbar-brand" href="#"></a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary" href="index.php">HOME</a>
        </li>
        <!--Zoom effect-->

        <li class="nav-item nav-tabs">
            <a class="nav-link " href="#2">ORDER</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#3">CATEGYORY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#6">PRODUCT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#4">USER-DEATILS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#5">FEEDBACK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
    </ul>
</nav>



<!-- Menu Section Ends -->