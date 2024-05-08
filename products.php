<?php
require_once 'config.php';

$sql = "SELECT DISTINCT COUNT(did) as idCount FROM doughnut";
$all_product = $conn->query($sql);
$row = $all_product->fetch_assoc();
$count = $row["idCount"];

$rows = round(($count ) / 3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./css/products.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@200;300;400&display=swap');
    </style>
</head>

<body>

    <?php
    require_once 'navbar.php';
    ?>

    <div class="products heading">
        <h1>Our Products</h1>
    </div>
    <?php
    $start = 0;
    while ($rows > 0) {
        $sql = "SELECT * FROM doughnut LIMIT $start,3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    ?>
            <div class="row">

                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="card">
                        <div class="image">
                            <img src="./Images/doughnuts/<?php echo $row["dlocation"]; ?>.jpg" alt="">
                        </div>
                        <div class="caption">
                            <h3 class="product_name heading"><?php echo $row["dname"]; ?></h3>
                            <p class="ddescription text"><?php echo $row["ddescription"]; ?></p>

                            <h3 class="price heading"><b>$<?php echo $row["dprice"]; ?></b></h3>
                        </div>
                        <button class="heading"> Add to cart</button>
                    </div>
                <?php
                }
                ?>
            </div>
    <?php
            // } else {
            //     echo "<script>alert('No records found');</script>";
            // }

            $start += 3;
            $rows -= 1;
        }
    }
    ?>
    <?php
    require_once 'footer.php';
    ?>

</body>

</html>