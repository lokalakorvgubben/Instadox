<?php
session_start();
/*if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}*/
include "database.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="MainStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="UpdateFeed.js"></script>
</head>
<body>

    <?php

    if (isset($_SESSION["username"])) {
        ?>
        <h1>Hello <?php echo $_SESSION["username"]?>! Welcome to InstaDox</h1>
        <a href="logout.php" type="button" class="btn btn-outline-info" style="height: 50px; margin: 10px;color:black;position: absolute;padding: 11;right: 0px;margin-right: 200px;font-weight: 600;width: 75px;">Logout</a>
        <a href="post.php" type="button" class="btn btn-outline-info" style="height: 50px; margin: 10px;color:black;position: absolute;padding: 11;right: 0px;margin-right: 300px;font-weight: 600;width: 75px;">Post</a>  
        <?php
    }
    else{
        ?>
        <a href="login.php" type="button" class="btn btn-outline-info" style="height: 50px; margin: 10px;position: absolute;padding: 11;right: 0px;margin-right: 200px;font-weight: 600;width: 75px;">Login</a>  
        <?php
    }
    ?>
    <h1>kaboom</h1>
    <p>kaboom 2</p>
    <p>kaboom 3</p>
    <?php 
        $sql = "SELECT * FROM posts ORDER BY post_id DESC";
        $res = mysqli_query($conn,  $sql);
        $resCheck = mysqli_num_rows($res);

        if ($resCheck > 0) {
            while ($row = mysqli_fetch_assoc($res)) {  ?>

            <div class="cardWidth">
                <div class="card">
                    <?php echo "<a href='post_details.php?id=".$row['post_id']."'><img src='uploads/".$row['post_image']."' class='card-img-top' style='width: 198px; height: 310px;'></a>"; ?>
                    <?php echo "<div class='card-body'>"; ?>
                    <?php echo "<h5 class='card-title'>" . $row['description'] . "</h5>";?>
                </div>
            </div>

    <?php } }?>
    <label class="switch">
        <input type="checkbox" class="toggle-checkbox" id="checkbox">
        <div class="toggle-switch"></div>
    </label>

    <script src="DarkModeButton.js"></script>
</body>
</html>