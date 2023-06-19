<div class="add__new__file">

<form action="./include/upload.php" method="POST" class="add_file" enctype="multipart/form-data">
    <div class="add_name">
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p>Название AZ</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_az" id="name_az">
        </div>
      </div>
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p> Название EN</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_en" id="name_en">
        </div>
      </div>
      <div class="add_name__element">
        <div class="add_name__element_desc">
          <p> Название RU</p>
        </div>
        <div class="add_name__element_input">
          <input type="text" name="name_ru" id="name_ru">
        </div>
      </div>
    </div>


    <div class="add_desc">
      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание AZ</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_az" id="desc_az">
        </div>
      </div>

      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание EN</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_en" id="desc_en">
        </div>
      </div>
      <div class="add_desc__element">
        <div class="add_desc__element_desc">
          <p>Описание RU</p>
        </div>
        <div class="add_desc__element_input">
          <input type="text" name="desc_ru" id="desc_ru">
        </div>
      </div>

    </div>


    <div class="add__file">
      <div class="add__file__button">
          <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
    </div>



    <div class="upload__file">
        <div class="add__file__button">
            <button name="submit" type="submit">Upload</button>
        </div>
    </div>

  </form>
</div>