<?php


?>
<div class="main__content__desc__navigation">
                <div class="main__content__desc">
                    <p>Список файлов</p>
                </div>

                <div class="main__content__add_file">
                    <a href="./admin.php?page=add">Добавить файл</a>
                </div>

            </div>


            <div class="main__content__list">


            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'fintrend');
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "";
            $query = "SELECT * FROM files";
            $select__files = mysqli_query($connection, $query);



            while ($row = mysqli_fetch_assoc($select__files)) {
                $file_id = $row['id'];
                $name_az = $row['name_az'];
                $name_en = $row['name_en'];
                $name_ru = $row['name_ru'];

                $desc_az = $row['desc_az'];
                $desc_en = $row['desc_az'];
                $desc_ru = $row['desc_az'];

                $file_name = $row['file_name'];





                ?>
                        <!-------->
                        <div class="main__content__list_element">
                            <div class="element__image__desc">
                                <a href="./include/uploads/<?php echo $file_name;?>" class="element__image">
                                    <img src="./style/imgs/file.png" alt="">
                                </a>
                                <div class="element__desc">
                                    <p><?php echo $file_name; ?></p>
                                </div>
                            </div>


                            <!---->
                            <div class="element__main__content">
                                <div class="element__main__content_desc">
                                    <div class="element__main__content_desc_lang">
                                        <?php echo $name_az; ?>
                                    </div>
                                    <div class="element__main__content_desc_text">
                                    <?php echo $desc_az; ?>
                                    </div>
                                </div>
                                <div class="element__main__content_desc">
                                <div class="element__main__content_desc_lang">
                                        <?php echo $name_en; ?>
                                    </div>
                                    <div class="element__main__content_desc_text">
                                    <?php echo $desc_en; ?>
                                    </div>
                                </div>
                                <div class="element__main__content_desc">
                                <div class="element__main__content_desc_lang">
                                <?php echo $name_ru; ?>
                                    </div>
                                    <div class="element__main__content_desc_text">
                                    <?php echo $desc_ru; ?>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="element__settings_delete">
                                <div class="element__settings">
                                    <a href="./admin.php?page=edit&id=<?php echo $file_id;?>">
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

                <?php } ?>


            </div>