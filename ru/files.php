<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fintrend</title>

  <!--ico--->
  <link rel="shortcut icon" href="../imgs/ico.png" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Link Swiper's CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../style/swiper.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!---main styles-->
  <link rel="stylesheet" href="../style/contact.css" />

  <link rel="stylesheet" href="../style/burger.css" />

  <link rel="stylesheet" href="../style/style.css" />

  <link rel="stylesheet" href="../style/files.css">
</head>

<body>
  <!-- main container----->
  <div class="main_wrapper">
    <!-------->
    <div class="header__container">
      <div class="header__wrapper">
        <!---header img--->
        <div class="header__image">
          <a href="./index.html">
            <img src="../imgs/logo228.png" alt="" />
          </a>
        </div>
        <!----header navigation-->
        <div class="header__nav_wrapper">
          <div class="header__nav__element">
            <a href="./index.html#element2">О нас </a>
          </div>
          <div class="header__nav__element">
            <a href="./index.html#element1">Услуги</a>
          </div>

          <div class="header__nav__element">
            <a href="./index.html#element4">Связь</a>
          </div>
          <!---language---->
          <div class="header__nav__element header__nav__element_language">
            <div class="dropdown-container">
              <label for="openDropdown" class="dropdown">
                RU
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </label>

              <input type="checkbox" id="openDropdown" hidden />

              <div class="dropdown-menu">
                <a href="../files.php">AZ</a>
                <a href="../en/files.php">EN</a>
              </div>
            </div>
          </div>
        </div>
        <!----header mobile burger-->
        <div class="mobile__burger_block">
          <div class="burger-menu">
            <a href="" class="burger-menu_button">
              <spun class="burger-menu_lines"></spun>
            </a>
            <nav class="burger-menu_nav">
              <div class="burger_menu__img">
                <img src="../imgs/logo228.png" alt="" />
              </div>
              <div class="mobile__language">
                <a href="../files.php">AZ</a>
                <a href="../en/files.php">EN</a>
              </div>
              <div class="mobile__line"></div>
              <a href="./index.html#element2" class="burger-menu_link">О нас</a>
              <a href="./index.html#element1" class="burger-menu_link">Услуги</a>

              <a href="./index.html#element4" class="burger-menu_link">Контакты</a>
              <div class="burger_menu__all_rights">
                <p>Copyright © 2014-2023 «Fintrend NBCO»</p>
              </div>
            </nav>
            <div class="burger-menu_overlay"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="main__content">
      <div class="about__files__container">
        <div class="about__files__name">
          Файлы и сертификаты
        </div>
        <div class="about__files__wrapper">
        <?php
        $connection = mysqli_connect('localhost', 'denitwcz', 'Troya@9977A', 'denitwcz_kafe');
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
            $desc_en = $row['desc_en'];
            $desc_ru = $row['desc_ru'];

            $file_name = $row['file_name'];





          ?>
            <!---files element----->
            <div class="about__files__element">
              <div class="about__files__element__folder__icon">
                <div class="folder">
                  <div class="folder__back">
                    <div class="paper"></div>
                    <div class="paper"></div>
                    <div class="paper"></div>
                    <div class="folder__front"></div>
                    <div class="folder__front right"></div>
                  </div>
                </div>
              </div>

              <div class="about__files__element__desc">
                <p><?php echo $name_ru ?></p>
                <span><?php echo $desc_ru ?></span>
              </div>

              <div class="about__files__download__button">
                <a target="_blank" href="../files/<?php echo $file_name ?>">Скачать</a>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>

      <div id="element4" class="footer__container">
        <div class="footer__content">
          <div class="footer__content__wrapper">
            <!------footer logo-->
            <div class="footer__content__logo">
              <img src="../imgs/footer__logo.png" alt="">
            </div>
            <!---footer contact data--->
            <div class="footer__content__contact">
              <div class="footer__content__contact__wrapper">
                <div class="footer__contact__element_wrapper">
                  <div class="footer__contact__element">
                    <div class="footer__contact__element__img">
                      <img src="../imgs/phone.png" alt="">
                    </div>
                    <div class="footer__contact__element__data">
                      <p>+994 (51) 880 96 69</p>
                      <p>+994 (51) 619 59 40</p>
                    </div>
                  </div>
                  <!--div class="footer__contact__element">
                    <div class="footer__contact__element__img">
                      <img src="./imgs/telephone.png" alt="">
                    </div>
                    <div class="footer__contact__element__data">
                      <p>+994 (12) 564 48 18</p>
                      <p>+994 (12) 564 17 36</p>
                    </div>
                  </div-->
                </div>
                <div class="footer__contact__element_wrapper footer__contact__element_wrapper2">





                  <div class="footer__contact__element">
                    <div class="footer__contact__element__img">
                      <img src="../imgs/email.png" alt="">
                    </div>
                    <div class="footer__contact__element__data">
                      <p>support@fintrend.az</p>
                    </div>
                  </div>
                  <div class="footer__contact__element">
                    <div class="footer__contact__element__img">
                      <img src="../imgs/map.png" alt="">
                    </div>
                    <div class="footer__contact__element__data">
                      <p>
                        Баку, Сабаильский район, <br>
                        Бюняд Сардаров, дом 15А</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!---footer social--->
            <div class="footer__content__social">
              <div class="footer__content__social__wrapper">
                <div class="footer__content__social__img">
                  <a href="#">
                    <img src="../imgs/instagram.png" alt="" srcset="">
                  </a>
                </div>
                <div class="footer__content__social__img">
                  <a href="#">
                    <img src="../imgs/facebook.png" alt="" srcset="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer__rights">
          <p>Copyright © 2014—2023 «Fintrend NBCO»</p>
        </div>
      </div>



    </div>



    <script src="../js/script.js"></script>


</body>

</html>
<!----CREATED BY DENIS AKERSHTEYN
  ///////////////////////////////////
  https://github.com/dakerdenis/fintrend
  ///////////////////////////////////
  for connecting https://daker.website/ 
  -------->