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
            <div class="main__content__desc__navigation">
                <div class="main__content__desc">
                    <p>Список файлов</p>
                </div>

                <div class="main__content__add_file">
                    <a href="./new_file.php">Добавить файл</a>
                </div>

            </div>


            <div class="main__content__list">
                <!-------->
                <div class="main__content__list_element">
                    <div class="element__image__desc">
                        <div class="element__image">
                            <img src="./style/imgs/file.png" alt="">
                        </div>
                        <div class="element__desc">
                            <p>File_name</p>
                        </div>
                    </div>


                    <!---->
                    <div class="element__main__content">
                        <div class="element__main__content_desc">
                            <div class="element__main__content_desc_lang">
                                File Name AZ
                            </div>
                            <div class="element__main__content_desc_text">
                                File description AZ lore File description AZ loreFile description AZ lore File description AZ lore File description AZ lore
                            </div>
                        </div>
                        <div class="element__main__content_desc">
                        <div class="element__main__content_desc_lang">
                                File Name EN
                            </div>
                            <div class="element__main__content_desc_text">
                            File description EN lore description EN lore description EN loredescription EN loredescription EN lore
                            </div>
                        </div>
                        <div class="element__main__content_desc">
                        <div class="element__main__content_desc_lang">
                                File Name RU
                            </div>
                            <div class="element__main__content_desc_text">
                            File description RU lore description RU loredescription RU loredescription RU loredescription RU loredescription RU lore
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="element__settings_delete">
                        <div class="element__settings">
                            <a href="#">
                                <img src="./style/imgs/settings.png" alt="">
                            </a>
                        </div>
                        <div class="element__delete">
                            <a href="#">
                                <img src="./style/imgs/delete.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</body>

</html>