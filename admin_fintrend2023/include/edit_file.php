<?php

$connection = mysqli_connect('localhost', 'root', '', 'fintrend');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
if(isset($_POST['submit'])){
    $id = $_POST['file_id'];
    $name_az = $_POST['name_az'];
    $name_en = $_POST['name_en'];
    $name_ru = $_POST['name_ru'];

    $desc_az = $_POST['desc_az'];
    $desc_en = $_POST['desc_en'];
    $desc_ru = $_POST['desc_ru'];

    $query =    "UPDATE files SET ";
    $query .=   "name_az='{$name_az}', ";
    $query .=   "name_en='{$name_en}', ";
    $query .=   "name_ru='{$name_ru}', ";
    $query .=   "desc_az='{$desc_az}', ";
    $query .=   "desc_en='{$desc_en}', ";
    $query .=   "desc_ru='{$desc_ru}'  ";
    $query .=   " WHERE id = {$id}";


    $edit_file_query = mysqli_query($connection, $query);
   echo $query; 
   header('Location: ../admin.php?page=data');
}



?>