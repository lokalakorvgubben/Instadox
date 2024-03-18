<?php 

if (isset($_POST['submit']) && isset($_FILES['image'])) {
    include "database.php";

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $description = $_POST["description"];
    $user_id = $_SESSION["user_id"];
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    echo $description;

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO posts(user_id, description, post_image) VALUES('user_id','$description', '$new_img_name')";
                mysqli_query($conn, $sql);
                header("Location: index.php");
            }else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }

}else {
    header("Location: index.php");
}