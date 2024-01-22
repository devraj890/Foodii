<?php include('partials-front/menu.php'); ?>
</nav>
<style>
/* Reset some default styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Apply styles to the container */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Style the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Style table headers */
thead th {
    background-color: #333;
    color: white;
    padding: 10px;
}

/* Style table rows */
tbody tr {
    border-bottom: 1px solid #ccc;
}

/* Style alternating rows */
tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style table cells */
td {
    padding: 10px;
    text-align: center;
}
</style>
<?php
if (!isset($_SESSION)) {
    session_start();
}
$username = $_SESSION['username'];
$sql = "SELECT cid FROM tbl_user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Fetch a row as an associative array
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Access the 'cid' value from the associative array
    $cid = $row['cid'];
      // Fetch order details for the given 'cid'
    $sql1 = "SELECT id, food, qty, status FROM tbl_order WHERE cid = '$cid'";
    $result1 = mysqli_query($conn, $sql1);

    if (!$result1) {
        die("Query failed: " . mysqli_error($conn));
    }
} else {
    // No matching row found
    echo "No record found for this username.";
}

// Close the database connection
mysqli_close($conn);
?>

   <div class="container">
        <h1>Order Details</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Food</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                    <tr>
                        <td><?php echo $row1['id']; ?></td>
                        <td><?php echo $row1['food']; ?></td>
                        <td><?php echo $row1['qty']; ?></td>
                        <td><?php echo $row1['status']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

