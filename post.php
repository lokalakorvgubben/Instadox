<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Post Something!</title>
</head>
<body>
    <div class="container">
        <h1>Hey <?php echo $_SESSION["username"]?>! What would you like to post?</h1>

        <form action="uploadpost.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Your description">
            </div>

            <div class="form-group">
                <input type="file" class="form-control" name="image" placeholder="Short Description">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Post!" name="submit">
            </div>

    </div>
</body>
</html>