<?php

$connection = mysqli_connect('localhost', 'root', '', 'files');
if(isset($_POST['submit'])){
    $id = $_POST['file_id'];
    $name_az = $_POST['name_az'];
    $name_en = $_POST['name_en'];
    $name_ru = $_POST['name_ru'];

    $desc_az = $_POST['desc_az'];
    $desc_en = $_POST['desc_en'];
    $desc_ru = $_POST['desc_ru'];

    $query = "UPDATE `files` SET `name_az`='$name_az',`name_en`='$name_az',`name_ru`='$name_az',`desc_az`='$name_az',`desc_en`='$name_az',`desc_ru`='$name_az' WHERE id = $id";

    

}



?>