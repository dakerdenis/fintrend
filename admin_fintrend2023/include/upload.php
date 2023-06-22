<?php
$target_dir = "../../files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $name_az = $_POST['name_az'];
    $name_en = $_POST['name_en'];
    $name_ru = $_POST['name_ru'];

    $desc_az = $_POST['desc_az'];
    $desc_en = $_POST['desc_en'];
    $desc_ru = $_POST['desc_ru'];


    $file_name = basename($_FILES["fileToUpload"]["name"]);


    $query = "INSERT INTO `files` ( `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `file_name`) ";
    $query .="VALUES ('{$name_az}', '{$name_en}', '{$name_ru}', '{$desc_az}', '{$desc_en}', '{$desc_ru}', '{$file_name}');";
    $connection = mysqli_connect('localhost', 'denitwcz', 'Troya@9977A', 'denitwcz_kafe');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $files = mysqli_query($connection, $query);
    if(!$files){
        die("QUERY FAILED ." . mysqli_error($connection));
    } else {
        echo "SUCCESS";
    }


    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        exit();
    }



    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "pdf"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            header("Location: ../admin.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
}
?>