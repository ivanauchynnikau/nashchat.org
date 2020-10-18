<?php
$data = $_POST;
if(isset($data['feedback_submit'])) {

  if(empty($data['security'])) {

    $warnings = array();

    if(empty($data['name'])) {
        $warnings[] = "Заполните имя";
    } else {
        $name = strip_tags($data['name']);
    }
    if(empty($data['email'])) {
        $warnings[] = "Заполните имя";
    } else {
        $email = strip_tags($data['email']);
    }
    if(empty($data['country'])) {
        $warnings[] = "Заполните страну";
    } else {
        $country = strip_tags($data['country']);
    }
    if(empty($data['text'])) {
        $warnings[] = "Заполните текст";
    } else {
        $text = strip_tags($data['text']);
    }
    if(empty($warnings)) {

        $to = "hotvipdesign@gmail.com"; // Почта для принимания обратной связи
        $from = "info@nashchat.org"; // Почта с которой отправляется письмо
        $subject = 'Обратная связь с NashChat.org'; 
        $message = 'Имя: '.$name."\r\n".'Страна: '.$country."\r\n".'Email: '.$email."\r\n".'Сообщение: '.$text."\r\n"; 
        

        // формируем расширенные заголовки
        $headers = "From:" . $from;
                
        mail($to, $subject, $message, $headers);
        header("Refresh:0");
    }

  } else {
    header("Refresh:0");
  }

}
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>НашЧат-чат-объявления для русскоговорящих за границей</title>
  </head>
  <body>

    <div class="header-bg">
      
      <div class="container header">
        
        <div class="header-logo">
          <a href="#"><img src="assets/img/logo.svg" alt="Наш чат"></a>
        </div>

        <nav class="nav">
          <a class="nav-link active" href="#main">Главная</a>
          <a class="nav-link" href="#shop-section">О приложении</a>
          <a class="nav-link" href="#feedback-section">Контакты</a>
        </nav>

        <div class="menu-collapse">
          <i class="fa fa-bars" data-toggle="collapse" href="#mobile-menu" role="button" aria-expanded="false"></i>
        </div>

      </div>

    </div>
    <div class="collapse" id="mobile-menu">
      <div class="mobile-menu">
        <a href="#main" class="active">Главная</a>
        <a href="#shop-section">О приложении</a>
        <a href="#feedback-section">Контакты</a>
        
      </div>
    </div>

    <div class="container">
      
      <div id="main" class="row main-section">
        
        <div class="col-lg-7 col-md-7 col-12 order-2  order-sm-1 offset-lg-1 text-center text-lg-none">
          <img src="assets/img/app-main.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-4 col-md-5 col-12 order-1 order-sm-2 text-center text-sm-left">
          <p class="title">Найди своих за границей!</p>
          <span class="desc"><b>НашЧат</b> - облачное приложение - мессенджер для подачи объявлений и общения русскоговорящих за границей</span>

          <div class="buttons">
            <a href="">
              <img class="btn-appstore" src="assets/img/appstore.svg" alt="Загрузить в App Store">
            </a>
            <a href="">
              <img class="btn-googleplay" src="assets/img/google.svg" alt="Загрузить в Google play">
            </a>
          </div>

        </div>

      </div>

    </div>

    <div id="shop-section" class="shop-section">
        
      <div class="container">
        
        <div class="row align-items-center">
          
          <div class="col-lg-4 offset-lg-2 col-md-6 mt-21 order-2 order-md-1 text-center text-lg-none">
            <img src="assets/img/app-shop.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 offset-lg-1 col-md-6 order-1 order-md-2">
            
            <p class="why-us">
              Почему мы?
            </p>
            <p class="title">Продукты</p>
            <p class="desc">Возможность найти <b>русские магазины</b> в вашем городе и видеть актуальный ассортимент с ценами</p>

          </div>

        </div>

      </div>

    </div>

    <div class="sell-section">
        
      <div class="container">
        
        <div class="row align-items-center">
          
          <div class="col-lg-4 offset-lg-2 col-md-6">
            
            <p class="why-us">
              Почему мы?
            </p>
            <p class="title">Объявления</p>
            <p class="desc">Возможность <b>купить</b> или <b>продать любую вещь</b> без лишних хлопот в виде чата</p>

          </div>

          <div class="col-lg-4 offset-lg-1 col-md-6 mt-21 text-center text-lg-none">
            <img src="assets/img/app-cat.png" class="img-fluid" alt="">
          </div>

          

        </div>

      </div>

    </div>

    <div class="dating-section">
        
      <div class="container">
        
        <div class="row align-items-center">
          
          <div class="col-lg-4 offset-lg-2 col-md-6 mt-21 order-2 order-md-1 text-center text-lg-none">
            <img src="assets/img/app-city.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 offset-lg-1 col-md-6 order-1 order-md-2">
            
            <p class="why-us">
              Почему мы?
            </p>
            <p class="title">Знакомства</p>
            <p class="desc">Возможность найти <b>русскоговорящих соотечественников</b> за границей в вашем городе и в любой стране</p>

          </div>

        </div>

      </div>

    </div>

    <div id="feedback-section" class="feedback-section">
      
      <div class="container">
        
        <div class="row">
          
          <div class="col-lg-6 col-md-7 order-2 order-md-1 mt-5 mt-md-0 mb-5 mt-mb-0">
            
            <form method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email адрес</label>
                  <input type="email" name="email" class="form-control" required id="email" placeholder="Ваш Email?">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Имя</label>
                  <input type="text" name="name" class="form-control" required id="name" placeholder="Ваше имя?">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="country">Страна проживания</label>
                  <input type="text" name="country" class="form-control" required id="country" placeholder="Ваша страна?">
                </div>
                <input type="text" name="security" class="form-control" hidden>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="country">Сообщение</label>
                  <textarea class="form-control" name="text" id="country" required rows="5" placeholder="Ваше сообщение"></textarea>
                </div>
              </div>
              
              <button type="submit" name="feedback_submit" class="btn btn-main">Отправить</button>
            </form>

          </div>

          <div class="col-lg-4 offset-lg-1 col-md-5 order-1 order-md-2 mt-5 mt-md-0">
            
            <p class="mini-title">Связь с нами</p>
            <p class="text">Остались вопросы или есть предложение? Оставьте свою заявку и мы обязательно вам ответим.</p>
            <hr>
            <p class="mini-title">Контакты</p>
            <p class="feedback-link">Телефон: +41787177282</p>
            <p class="feedback-link">Почта: me@nashchat.org</p>
            <div class="socials">
              <a href=""><div class="social-item"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
              <a href=""><div class="social-item"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
              <a href=""><div class="social-item"><i class="fa fa-vk" aria-hidden="true"></i></div></a>
            </div>

            

          </div>

        </div>

      </div>

    </div>

    <div class="container">
      
      <div class="footer">
      
        <div class="row">
          
          <div class="col-lg-3 col-md-12 col-sm-12 text-center text-lg-left">
            
            <div class="logo">
              <img src="assets/img/logo.svg" alt="">
            </div>
            <small>© 2019 НашЧат</small>
            <hr>

          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            
            <nav class="nav flex-column">
              <p class="nav-link title">Нашчат</p>
              <a class="nav-link" href="#main">Главная</a>
              <a class="nav-link" href="#shop-section">О приложении</a>
              <a class="nav-link" href="#feedback-section">Контакты</a>
            </nav>

          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            
            <nav class="nav flex-column">
              <p class="nav-link title">Загрузки</p>
              <a class="nav-link" href="#">iPhone и iPad</a>
              <a class="nav-link" href="#">Android</a>
            </nav>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            
            <nav class="nav flex-column">
              <p class="nav-link title">Компания</p>
              <a class="nav-link" href="#">Условия и Политики</a>
              <a class="nav-link" href="#">Условия использования</a>
              <a class="nav-link" href="#">Политика конфиденциальности</a>
            </nav>

          </div>

        </div>

      </div>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
       
      $(document).ready(function(){
        $("body").on("click","a", function (event) {
          //отменяем стандартную обработку нажатия по ссылке
          event.preventDefault();

          //забираем идентификатор бока с атрибута href
          var id  = $(this).attr('href'),

          //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
          
          //анимируем переход на расстояние - top за 1500 мс
          $('body,html').animate({scrollTop: top}, 1500);
        });
      });
    </script>
  </body>
</html>