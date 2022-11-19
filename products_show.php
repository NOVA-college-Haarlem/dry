<?php


require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

$result = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($result);

mysqli_free_result($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procuct Details</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product Details</h2>
            </div>
            <section class="card-body">
                <p><?php echo $product['id'] ?></p>
                <p><?php echo $product['name'] ?></p>
                <p><?php echo $product['price'] ?></p>
                <p><?php echo $product['category'] ?></p>
            </section>
        </div>
    </div>
</body>

</html>