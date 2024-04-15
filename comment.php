<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
} 

if (isset($_POST['submit'])) {
    include "database.php";

    $comment = $_POST["comment"];
    $post_id = $_POST["post_id"];
    $user_id = $_SESSION["user_id"];

    echo $description;

    if ($comment > 0) {

        $sql = "INSERT INTO comments(user_id, comment, post_id) VALUES('$user_id','$comment', '$post_id')";
        mysqli_query($conn, $sql);
        header("Location: post_details.php?id=".$post_id."");
        //<a href='post_details.php?id=".$row['post_id']."'>

    }else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }

}else {
    header("Location: index.php");
}