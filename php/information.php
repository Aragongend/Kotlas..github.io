<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>КОТЛАССКИЙ МУНИЦИПАЛЬНЫЙ ОКРУГ</title>
  <link href="../css/vlast.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../img/kotlas.ico">

</head>
<body>


  <div class="wrapper">
    <header class="header">
      <nav class="header__menu">
        <div class="menu__img">
          <a class="menu__link" href="../index.html"><img class="menu__logo" src="../img/kotlas.png"></a>
          <a class="menu__link" href="../index.html"><h1 class="menu__h1">КОТЛАССКИЙ МУНИЦИПАЛЬНЫЙ ОКРУГ
            АРХАНГЕЛЬСКОЙ ОБЛАСТИ</h1></a>
        </div>
        <ul class="menu__list">
          <a class="menu__link" href="../php/vlast.html"><li class="menu__item">Власть <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/rayon.html"><li class="menu__item">Район <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/information.php"><li class="menu__item">Информация <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/poceleniy.html"><li class="menu__item">Поселения <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/documenty.html"><li class="menu__item">Документы <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/zakupki.html"><li class="menu__item">Закупки <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/uslugi.html"><li class="menu__item">Услуги <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/kontr.html"><li class="menu__item">Муниципальный контроль <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/obrasheniy.html"><li class="menu__item">Обращения <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          <a class="menu__link" href="../php/kontat.html"><li class="menu__item">Контакты <div>&#9675;
            &#9675;
            &#9675;
          </div></li></a>
          
        </ul>
      </nav>
      
    </header>
    <hr>
   
    <main class="main">
      <section class="vlast">
        <h1 class="vlast__title">
          Информация
        </h1>
        <div class="vlast__osn vlast_true">
          <?php
          $conn = new mysqli("localhost", "root", "root", "kotlas");
          
          $sql = "SELECT * FROM news";
          if($result = mysqli_query($conn, $sql)){
              foreach($result as $row){
                  echo '<div style="text-align:center;" class="news_">';
                  echo '<img style="width:10%; margin: auto;" src="../img/'.$row["image"].'">' ;
                  echo '<div>'. '<span>'. $row["data"].'</span>' .'<h4>'.$row["name"].'</h4>'.'<p>'.$row["text"].'</p>'.'</div>';
                  echo '</div>';
              }
          }
          
          
          
          ?>
        </div>
      
        
      </section>
    </main>
    <footer class="footer">
      <ul class="footer__list">
      <a class="menu__link" href="vlast.html"><li class="menu__item">Власть</li></a>
          <a class="menu__link" href="rayon.html"><li class="menu__item">Район</li></a>
          <a class="menu__link" href="information.php"><li class="menu__item">Информация</li></a>
          <a class="menu__link" href="poceleniy.html"><li class="menu__item">Поселения</li></a>
          <a class="menu__link" href="documenty.html"><li class="menu__item">Документы</li></a>
          <a class="menu__link" href="zakupki.html"><li class="menu__item">Закупки</li></a>
          <a class="menu__link" href="uslugi.html"><li class="menu__item">Услуги</li></a>
          <a class="menu__link" href="kontr.html"><li class="menu__item">Муниципальный контроль</li></a>
          <a class="menu__link" href="obrasheniy.html"><li class="menu__item">Обращения</li></a>
          <a class="menu__link" href="kontat.html"><li class="menu__item">Контакты</li></a>
          
      </ul>
      <p class="footer__podpes">КОТЛАССКИЙ МУНИЦИПАЛЬНЫЙ ОКРУГ
        АРХАНГЕЛЬСКОЙ ОБЛАСТИ</p>
      <p class="footer__year">2023 год</p>
      
    </footer>
  </div>
  <script>
    for(let i=1; i<=4; i++){
      document.getElementsByClassName("podmenu__link")[i-1].onclick=function(){
        document.getElementsByClassName("vlast_true")[0].classList.remove("vlast_true")

        document.getElementsByClassName("vlast__osn")[i].classList.add("vlast_true")


      }

    }
  </script>
</body>
</html>