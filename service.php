<?php
$page = 'service';
include('partials-front/menu.php');
?>
</nav>
<hr>
<style>
/* Style for the service icons and content */
.icon-conten {
    text-align: center;
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.icon-conten img {
    max-width: 100px;
}
@media (max-width: 768px) {
    .icon-conten {
        margin: 20px 0;
    }
}
/* Add a hover effect to the service containers */
.icon-conten:hover {
    background-color:  #4f5d90;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s, box-shadow 0.3s;
}
/* Add a hover effect to the service containers */
.icon-conten {
    transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
}

.icon-conten:hover {
    background-color: #e5e5e5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transform: translateY(-20px); 
}

</style>
<!-- section start for services -->
<section>
    
<div class="container">
        <h1 class="text-center">SERVICES</h1>
</div>

</section>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="icon-conten">
                <img src="images/clean.jpg" style="border-radius: 10%;">
                <h4>Clean and Hygenic</h4>
                <p>We Are Provide clean surface and provide hygenic food with good quility</p>


            </div>
        </div>
        <div class="col-sm">
            <div class="icon-conten">

                <img src="images/safe.png">
                <h4>Deliver Safe</h4>
                <p>We Are Deliver sweets in same day and provide full safe and secure environment</p>

            </div>
        </div>
        <div class="col-sm">
            <div class="icon-conten">
                <img src="images/time1.png" alter="work pic" style="border-radius: 10%;">
                <h4>Working Hour's</h4>
                <p>Working with Monday to Saturday - 11am to 8pm and close for sunday</p>
            </div>
        </div>
    </div>
</div>
<!-- section end for services -->

<?php include('partials-front/footer.php'); ?>