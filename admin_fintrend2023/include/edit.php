<?php

    $file_id_get = $_GET['id'];

    $connection = mysqli_connect('localhost', 'denitwcz', 'Troya@9977A', 'denitwcz_kafe');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "";
    $query = "SELECT * FROM files WHERE id = $file_id_get   ";
    $select__files = mysqli_query($connection, $query);



    while ($row = mysqli_fetch_assoc($select__files)) {
        $file_id = $row['id'];
        $name_az = $row['name_az'];
        $name_en = $row['name_en'];
        $name_ru = $row['name_ru'];

        $desc_az = $row['desc_az'];
        $desc_en = $row['desc_en'];
        $desc_ru = $row['desc_ru'];

        $file_name = $row['file_name'];



    }

?>
<div class="add__new__file">
<a class="main__link" href="./admin.php?page=data"> На главную</a>
<form action="./include/edit_file.php" method="POST" class="add_file" enctype="multipart/form-data">
   <div class="file_edit"> Редактирование файла</div>
    <div class="add_name">
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p>Название AZ</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_az" value="<?php echo $name_az; ?>" id="name_az">
        </div>
      </div>
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p> Название EN</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_en" value="<?php echo $name_en; ?>" id="name_en">
        </div>
      </div>
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p> Название RU</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_ru" value="<?php echo $name_ru; ?>" id="name_ru">
        </div>
      </div>
    </div>


    <div class="add_desc">
      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание AZ</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_az" value="<?php echo $desc_az; ?>" id="desc_az">
        </div>
      </div>

      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание EN</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_en" value="<?php echo $desc_en; ?>" id="desc_en">
        </div>
      </div>
      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание RU</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_ru" value="<?php echo $desc_ru; ?>" id="desc_ru">
        </div>
      </div>

    </div>



    <div class="upload__file">
        <div class="add__file__button">
            <button name="submit" type="submit">Update</button>
        </div>
    </div>
    <input style="display: none; visibility: hidden;" type="text" name="file_id" value="<?php echo $file_id; ?>" id="file_id">
  </form>
</div>