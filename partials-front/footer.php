<?php
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


?><style>

.social-icon:hover {
    /* border: 2px solid black; */
    border-color: red; 
    transform: scale(2.3); /* Enlarge the image on hover */
}
</style>


<?php
if (isset($_POST['submit'])) {
    
    $name = test_data($_POST['name']);
    $phone = test_data($_POST['phone']);
    $email = test_data($_POST['email']);
    $comment = test_data($_POST['comment']);

    $query = "insert into tbl_contact (name,phone,email,comment) values ('$name', '$phone', '$email', '$comment')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>';
    }
}

function test_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<hr>

<div style="width:100%">

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white mt-3" style="background-color: #1c2331">
        <!-- Section: Social media -->

        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
                <span>
                    <h2>Get connected with us on social networks:</h2>
                </span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>

                <a href="https://instagram.com/__d_ivine_?igshid=YmMyMTA2M2Y=" class="text-white me-4">
                    <i class="fab fa-twitter social-icon"> <img src="image/insta.jpg" alter="insta"
                            style="height:5rem; width:5rem;border: 2px solid red; border-radius: 35%; margin-left: 20px;"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google social-icon"> <img src="image/gogle.png" alter="gogle"
                            style="height:5rem; width:5rem; border: 2px solid white; margin-left:5%; border-radius: 35%;  "></i>
                </a>
                <a href="https://instagram.com/__d_ivine_?igshid=YmMyMTA2M2Y=" class="text-white me-4">
                    <i class="fab fa-instagram social-icon"> <img src="image/twitter.png" alter="insta"
                            style="height:5rem; width:5rem; border: 2px solid white; margin-left:5%; border-radius: 35%;"></i>
                </a>

            </div>
            
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">foodi</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            WE PROVIDE US THE BEST PRODUCT IN THE BEST PRICE RENT
                        </p>
                        <a href="<?php echo $SITEURL; ?>/admin/login.php">
                            <h5>admin</h5>
                        </a>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">MAGGI</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">PASTA</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">PIZZA</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">MOMOS</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->

                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> VILL-MAGROLA NY-10012, INDIA</p>
                        <p><i class="fas fa-envelope mr-3"></i> FOODII@GMAIL.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 75 666 947 777</p>

                    </div>
                    <!-- Grid column
                    
                    <div class="" id="fed">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Feedback Now</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <section>
                            <div class="">
                                <div class="">
                                    <div class="row ">
                                        <div class="">
                                            <div class="contact-form p-5">
                                                <h2 class="text-center"></h2>
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label" for="name">Name:</label>
                                                        <input type="text" class="form-control mt-1 p-1 cerkel-r" id="name"
                                                            placeholder="Enter Name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="Phone">Phone:</label>
                                                        <input type="number" class="form-control mt-1 p-1 cerkel-r" id="phone"
                                                            placeholder="Enter Phone Number" name="phone" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="email">Email:</label>
                                                        <input type="email" class="form-control mt-1 p-1 cerkel-r" id="email"
                                                            placeholder="Enter email" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mt-1 p-1 cerkel-r" for="comment">Comment:</label>
                                                        <textarea class="form-control" rows="5" id="comment"
                                                            name="comment" required></textarea>
                                                    </div>
                                                    <div class="form-group mb-2 mt-2">
                                                        <button type="submit" class="btn btn-primary w-25 mt-1 p-1 cerkel-r"
                                                            name="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
    
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">DEV RAJPUT.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


</div>
<!-- End of .container -->

<script src="js/jquery.js"></script>
<script src="js/jquery-utils.js"></script>
<script src="js/jquery-utils.min.js"></script>
<script src="js/jquery.slim.js"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper-utils.js"></script>
<script src="js/popper.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/popper-utils.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->

</html>