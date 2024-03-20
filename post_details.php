<?php
session_start();
/*if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}*/
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Dashboard!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php" class="btn btn-primary back-button">Back</a>
    <div class="container">

        <?php

        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE post_id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $post_id = $row['post_id'];

                echo '<div class="card mb-3">';
                echo '<div class="row g-0">';
                echo '<div class="cardText">';
                echo "<img src='uploads/".$row['post_image']."' class='card-img-top' alt='Movie image' style='height: 620px; width: 400px;'>";
                echo '</div>';
                echo '<div class="cardText">';
                echo '<div class="card-body text-start">';
                
                $usersql = "SELECT * from users WHERE ID = " . $row['user_id'];
        
                $userresult = mysqli_query($conn, $usersql);
                $user = mysqli_fetch_array($userresult, MYSQLI_ASSOC);
                echo "<h5 class='card-title'>" . $user["full_name"] . "</h5>";
                
                echo "<p class='card-text fs-3'>" . $row['description'] . "</p>";

                //comments
                ?>

                <form action="comment.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="comment" placeholder="Comment as <?php echo $user["full_name"]?>">
                    </div>
                    <input type="hidden" name="post_id" value="<?php echo $id ?>">
                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Post Comment" name="submit">
                    </div>
                </form>
                <?php


                //comments
                $commentsql = "SELECT * FROM comments ORDER BY comment_id DESC";
                $commentres = mysqli_query($conn,  $commentsql);
                $commentresCheck = mysqli_num_rows($commentres);        

                if ($commentresCheck > 0) {
                    while ($commentrow = mysqli_fetch_assoc($commentres)) {  ?>

                    <div class="cardWidth">
                        <div class="card">

                            <?php
                                $usersql = "SELECT * from users WHERE ID = " . $commentrow['user_id'];
                        
                                $userresult = mysqli_query($conn, $usersql);
                                $user = mysqli_fetch_array($userresult, MYSQLI_ASSOC);
                                echo "<h5 class='card-title'>" . $user["full_name"] . "</h5>";
                            ?>
                            
                            
                            <?php echo "<h4 class='card-title'>" . $commentrow['comment'] . "</h4>";?>
                            
                            
                            <?php /*echo "<h5 class='card-title'>" . $row['user_id'] . "</h5>";*/?>

                            <?php echo "</div>"; ?>
                        </div>
                    </div>
            <?php
                }
            }
                ?>

                    
                <?php


                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
        }
            
        } else {
            echo "No movie found";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>