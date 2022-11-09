<?php

include 'Connection.php';


if (isset($_POST['save']) && isset($_FILES['image'])) {

    // echo "<pre>";
    // print_r($_FILES['image']);
    // echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
    $img_error = $_FILES['image']['error'];

    // Check for errors 
    if ($img_error === 0) {

        // Limit the size of uploading images 
        if ($img_size > 1250000) {
            $msg1 = "Sorry file is too large";
             header("Location: Index.php?$msg1");

        }else {
            // Image extention recognation 
            $image_path = pathinfo($img_name, PATHINFO_EXTENSION);
            $image_path_lc = strtolower($image_path);
            // echo $image_path_lc;

            // Allowed image extentions 
            $allowed_extention = array("jpg", "png", "jpeg");

            // Try to match the one accepted one with the entered one
            if(in_array($image_path_lc, $allowed_extention)){
                $img_NewName = uniqid("CHRONOS-", true).".".$image_path_lc; // Change image name 
                $img_NewPath = 'Upload_images/'.$img_NewName; // Image movement to the precied one
                move_uploaded_file($img_tmp_name, $img_NewPath); 

                
                // Insertion Databases
                $Sql = "INSERT INTO ch_images(name, image) VALUES('Image_Name', '$img_NewName')";
                $query = mysqli_query($connection, $Sql);
                
                if($query == true){
                    // header("Location : Index.php");
                }
                //.....................................................
                


            }else {
                $msg2 = "Unknown error has emerge";
                header("Location: Index.php?$msg2");

            }


        }


    }else {
        $msg = "Unknown error has emerge";
        header("Location: Index.php?$msg");
    }






}



?>