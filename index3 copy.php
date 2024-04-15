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

    <div class="MainBody">  
       
        
        <div class="Header">
            <?php
            if (isset($_SESSION["user"])) {
                ?>
                <a href="logout.php" type="button" class="btn btn-Login">Logout</a>  
                <?php
            }
            else{
                ?>
                <a href="login.php" type="button" class="btn btn-Login">Login</a>  
                <?php
            }
            ?>

            
            <div class="LogoName">
                <img src="Assets/insta.png" width="25%">
            </div>
            <div class="LogoImg">
                <img src="Assets/Doxx.png" width="25%">
            </div>

            

        </div>

        <div class="MainFeed">
            <h1>kaboom</h1>
            <p>kaboom 2</p>
            <p>kaboom 3</p>
            
        </div>

        <div class="MainFeedLeft"></div>
        <div class="MainFeedRight"></div>

    </div>
</body>
</html>