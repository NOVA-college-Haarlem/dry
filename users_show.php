<?php


require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);


mysqli_free_result($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>User Details</h2>
            </div>
            <section class="card-body">
                <p><?php echo $user['id'] ?></p>
                <p><?php echo $user['firstname'] ?></p>
                <p><?php echo $user['lastname'] ?></p>
                <p><?php echo $user['email'] ?></p>
            </section>
        </div>
    </div>
</body>

</html>