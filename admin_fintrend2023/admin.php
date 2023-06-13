<?php
session_start();
if (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: ./index.php');
    exit();
}






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <link rel="stylesheet" href="./style/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div class="main__wrapper">
        <?php include './include/header.php' ?>



        <div class="main__content__wrapper">
            <?php if($_GET['page']='data'){
                include './include/data.php';
            } else if($_GET[])
            else{
                include './include/data.php';
            }            
             ?>
        </div>


        

    </div>
</body>

</html>