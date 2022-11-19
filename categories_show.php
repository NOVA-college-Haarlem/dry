<?php


require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE id = $id LIMIT 1";

$result = mysqli_query($conn, $sql);

$category = mysqli_fetch_assoc($result);

echo $category['id'];
echo $category['name'];

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
                <p><?php echo $category['id'] ?></p>
                <p><?php echo $category['name'] ?></p>
            </section>
        </div>
    </div>
</body>

</html>

</html>