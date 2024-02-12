<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="MainStyle.css">
</head>
<body>
    <?php
    if (isset($_SESSION["user"])) {
        ?>
        <a href="logout.php" type="button" class="btn btn-outline-info" style="height: 50px; margin: 10px;color:aliceblue;position: absolute;padding: 11;right: 0px;margin-right: 200px;font-weight: 600;width: 75px;">Logout</a>  
        <?php
    }
    else{
        ?>
        <a href="login.php" type="button" class="btn btn-outline-info" style="height: 50px; margin: 10px;color:black;position: absolute;padding: 11;right: 0px;margin-right: 200px;font-weight: 600;width: 75px;">Login</a>  
        <?php
    }
    ?>
    <h1>kaboom</h1>
    <p>kaboom 2</p>
    <p>kaboom 3</p>
</body>
</html>