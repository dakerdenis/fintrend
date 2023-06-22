<?php 

$connection = mysqli_connect('localhost', 'root', '', 'fintrend');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
if(isset($_GET['id'])){
    $file_id=$_GET['id'];
    $query_file = "SELECT * FROM files WHERE id = $file_id   ";
    $delete_from_folder = mysqli_query($connection, $query_file);
    while($row = mysqli_fetch_assoc($delete_from_folder)){
        $file_name = $row['file_name'];
        unlink($file_name);
    }




    $query = "DELETE FROM files WHERE files.id = {$file_id}";
    $delete_file = mysqli_query($connection, $query);
    header('Location: ../admin_fintrend2023/admin.php?page=data');

} else {
    header('Location: ../files.php');
}



?>