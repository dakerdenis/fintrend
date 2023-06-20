<?php 

$connection = mysqli_connect('localhost', 'root', '', 'fintrend');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
if(isset($_GET['id'])){
    $file_id=$_GET['id'];


    $query = "DELETE FROM files WHERE `files`.`id` = {$file_id}";

    header('Location: ../admin.php?page=data');

}



?>