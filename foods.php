<?php
$page = 'foods';
include('partials-front/menu.php');
?>
</nav>
<!-- fOOD sEARCH Section Starts Here -->

<style>/* styles.css */
.food-search {
    background-color: #f9f9f9;
    padding: 20px;
}

.food-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
}

.food-item img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-right: 20px;
}

.food-item-details {
    flex: 1;
}

.food-item-title {
    font-size: 24px;
    margin-bottom: 10px;
}

.food-item-description {
    font-size: 16px;
    margin-bottom: 10px;
}

.food-item-price {
    font-size: 18px;
}

.btn-primary {
    background-color: #007bff;
    border: 2px solid #007bff;
    color: #fff;
    border-radius: 50px;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
/* next */
/* styles.css */
.food-search {
    background-color: #f9f9f9;
    padding: 20px;
}

.food-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.food-item {
    flex: 0 0 calc(33.33% - 20px);
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column;
}
/*  for however*/

/* Add a hover effect to the service containers */
.food-item {
    transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
}
.food-item:hover {
    background-color: #e5e5e5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transform: translateY(-17px); 
}
</style>


    <!-- FOOD SEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            <h1 class="text-center">Our Featured Products</h1>

            <?php
            $sql = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes'";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                echo '<div class="food-items">';
                $i = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-item">
                        <?php if ($image_name != "") { ?>
                            <img src="<?php echo $SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
                        <?php } else { ?>
                            <img src="placeholder-image.jpg" alt="Image Not Available">
                        <?php } ?>

                        <div class="food-item-details">
                            <h3 class="food-item-title"><?php echo $title; ?></h3>
                            <p class="food-item-description"><?php echo $description; ?></p>
                            <p class="food-item-price">Price: ₹<?php echo $price; ?></p>
                            <a href="<?php echo $SITEURL; ?>order.php?food_id=<?php echo $id; ?>" style="
    border-radius: 30%;
    margin-right: 20px;" class="btn btn-outline-secondary">Order Now</a>
                        </div>
                    </div>

                    <?php
                    $i++;
                    if ($i % 3 === 0) {
                        echo '</div><div class="food-items">';
                    }
                }
                echo '</div>';
            } else {
                echo "<p class='error'>No featured products available.</p>";
            }
            ?>
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>
</body>
</html>
