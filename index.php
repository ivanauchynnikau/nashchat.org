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

        $to = "ivanauchynnikau@gmail.com"; // test
//         $to = "hotvipdesign@gmail.com"; // Почта для принимания обратной связи
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
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>НашЧат - чат-объявления для русскоговорящих за границей</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="НашЧат- пространство для общения и полезной информации для русских и всех русскоговорящих за границей. В нашем приложении мы предлагаем помощь, советы, объявления, поиск и предложение работы, знакомства в Европе и на всех континентах. Ищете русские магазины, русские школы, Российские Посольства и Консульства, православные храмы в Германии, Франции, Англии, США, Швейцарии и по всему миру? Вы найдёте адрес у нас! Здесь вы найдёте даже бесплатные вещи в дар от соотечественников. Наше приложение уникально- это кладезь действительно необходимой информации для русского туриста или иммигранта.">
<meta name="keywords" content="общение, и всех русскоговорящих за границейб помощь, советы, объявления, поиск и предложение работы, знакомства в Европе">

<meta property="og:type" content="website">
<meta property="og:site_name" content="nashchat.org">
<meta property="og:title" content="nashchat.org">
<meta property="og:description" content="">
<meta property="og:url" content="nashchat.org">
<meta property="og:locale" content="ru_RU">
<meta property="og:image" content="/images/favicon/social_img.png">
<meta property="og:image:width" content="640">
<meta property="og:image:height" content="360">

<meta name="twitter:title" content="nashchat.org">
<meta name="twitter:description" content="НашЧат- пространство для общения и полезной информации для русских и всех русскоговорящих за границей. В нашем приложении мы предлагаем помощь, советы, объявления, поиск и предложение работы, знакомства в Европе и на всех континентах. Ищете русские магазины, русские школы, Российские Посольства и Консульства, православные храмы в Германии, Франции, Англии, США, Швейцарии и по всему миру? Вы найдёте адрес у нас! Здесь вы найдёте даже бесплатные вещи в дар от соотечественников. Наше приложение уникально- это кладезь действительно необходимой информации для русского туриста или иммигранта.">
<meta name="twitter:image:src" content="images/favicon/social_img.png">
<meta name="twitter:url" content="nashchat.org">
<meta name="twitter:domain" content="nashchat.org">
<meta name="twitter:site" content="nashchat.org">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/images/favicon/site.webmanifest">
<link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link href="main.css" rel="stylesheet"></head>
<body>
<div class="wrapper">
	<main class="content">
		<header class="header">
	<div class="container">
		<div class="header__content">
			<div class="header__logo">
				<a href="/" class="header__logo-link">
					<img class="header__logo-img" src="images/common/logo.svg" alt="">
				</a>
			</div>
			<div class="header__nav-wrapper">
				<button class="header__nav-burger"
								data-selector="header-burger-btn"
				>
					<span></span>
				</button>
				<nav class="header__nav"
						 data-selector="header-nav"
				>
					<a data-selector="link-nav-item" class="header__nav-item" href="/#about-us">О нас</a>
					<a data-selector="link-nav-item" class="header__nav-item" href="/#how-it-works">Как это работает</a>
					<a data-selector="link-nav-item" class="header__nav-item" href="/#categories">Категории</a>
					<a data-selector="link-nav-item" class="header__nav-item" href="/#contacts">Контакты</a>
				</nav>
			</div>
		</div>
	</div>
</header>

		<section class="main-section">
  <div class="container">
		<div class="main-section__content">
			<div class="main-section__left">
				<h1 class="main-section__title">
					Найди своих за границей!
				</h1>
				<h2 class="main-section__subtitle">
					НашЧат - облачное приложение - мессенджер для подачи объявлений и
					общения русскоговорящих за границей
				</h2>
				<div class="main-section__btns">
					<div class="main-section__btns-text">
						 уже скоро в:
					</div>
					<!-- TODO add link -->
					<a class="main-section__btns-link" href="#">
						<img src="images/common/apple.png" alt="apple store button">
					</a>
					<!-- TODO add link -->
					<a class="main-section__btns-link" href="#">
						<img src="images/common/google.png" alt="apple play button">
					</a>
				</div>
			</div>
			<div class="main-section__right">
				<img
					class="main-section__right-img"
					src="images/common/main_section_img.png"
					alt=""
				/>
			</div>
		</div>
  </div>
</section>
		<section
				id="about-us"
				class="who-we-are"
>
  <div class="container">
		<div class="section-title">
			<div class="section-title__title">
				Кто мы
			</div>
			<div class="section-title__ghost">
				О НАС
			</div>
		</div>
		<div class="who-we-are__content">
			<div class="who-we-are__left">
				<img
					class="who-we-are__left-img"
					src="images/common/who_we_are_phones.png"
					alt=""
				/>
			</div>
			<div class="who-we-are__right">
				<div class="who-we-are__text">
					<span class="_bold">НашЧат -</span>
					<br>
					это уникальный сервис, объединяющий русскоговорящих <span class="_light">людей из разных стран</span>
				</div>
			</div>
			<div class="who-we-are__text _bottom">
				Мы вложили в проект свою душу,
				<span class="_light">чтобы согреть вашу...</span>
			</div>
		</div>
  </div>
</section>
		<section
				id="how-it-works"
				class="enjoy-us"
>
  <div class="container">
		<div class="enjoy-us__content">
			<div class="section-title">
				<div class="section-title__title">
					Присоединяйся
				</div>
				<div class="section-title__ghost">
					КАК РАБОТАЕТ
				</div>
			</div>
			<div class="enjoy-us__list">
				<div class="enjoy-us__list-item">
					<div class="enjoy-us__list-item-num">
						1
					</div>
					<div class="enjoy-us__list-item-title">
						Скачай
					</div>
					<div class="enjoy-us__list-item-buttons">
						<!-- TODO add link -->
						<a href="#" target="_blank" class="enjoy-us__list-item-button">
							<img src="images/common/google.png"
									 alt="" class="enjoy-us__list-item-button-img">
						</a>
						<!-- TODO add link -->
						<a href="#" target="_blank" class="enjoy-us__list-item-button">
							<img src="images/common/apple.png"
									 alt="" class="enjoy-us__list-item-button-img">
						</a>
					</div>
				</div>
				<div class="enjoy-us__list-item">
					<div class="enjoy-us__list-item-num">
						2
					</div>
					<div class="enjoy-us__list-item-title">
						Зарегистрируйся
					</div>
					<img class="enjoy-us__list-item-img _two"
							 src="images/common/enjoy_2.png" alt="">
				</div>
				<div class="enjoy-us__list-item">
					<div class="enjoy-us__list-item-num">
						3
					</div>
					<div class="enjoy-us__list-item-title">
						Пользуйся!
					</div>
					<img class="enjoy-us__list-item-img _three"
							 src="images/common/enjoy_3.svg" alt="">
				</div>
			</div>
		</div>
  </div>
</section>
		<section
				id="categories"
				class="what-we-have"
>
  <div class="container">
		<div class="what-we-have__content">
			<div class="section-title">
				<div class="section-title__title">
					Что у нас есть
				</div>
				<div class="section-title__ghost">
					КАТЕГОРИИ
				</div>
			</div>
			<div class="what-we-have__list">
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.731079 7.71428C0.731079 3.53733 4.11716 0.151245 8.2941 0.151245H29.7227C33.8996 0.151245 37.2857 3.53733 37.2857 7.71427V29.1428C37.2857 33.3198 33.8996 36.7059 29.7227 36.7059H8.29411C4.11717 36.7059 0.731079 33.3198 0.731079 29.1428V7.71428Z" fill="#FFC700"/>
							<path d="M8.2941 0.466371H29.7227C33.7256 0.466371 36.9706 3.71137 36.9706 7.71427V29.1428C36.9706 33.1457 33.7256 36.3907 29.7227 36.3907H8.29411C4.29121 36.3907 1.04621 33.1457 1.04621 29.1428V7.71428C1.04621 3.71137 4.2912 0.466371 8.2941 0.466371Z" stroke="#E3B203" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M17.8003 22.485H17.7387C17.4347 22.485 17.1431 22.3643 16.9281 22.1493C16.7131 21.9343 16.5923 21.6427 16.5923 21.3387C16.5923 21.0183 16.4651 20.711 16.2385 20.4845C16.012 20.2579 15.7047 20.1307 15.3843 20.1307C15.064 20.1307 14.7567 20.2579 14.5302 20.4845C14.3036 20.711 14.1764 21.0183 14.1764 21.3387C14.1764 22.2834 14.5517 23.1895 15.2198 23.8576C15.8878 24.5257 16.7939 24.901 17.7387 24.901H17.8003V26.109C17.8003 26.4294 17.9276 26.7366 18.1541 26.9632C18.3807 27.1897 18.6879 27.317 19.0083 27.317C19.3287 27.317 19.6359 27.1897 19.8625 26.9632C20.089 26.7366 20.2163 26.4294 20.2163 26.109V24.901C21.1774 24.901 22.0992 24.5192 22.7788 23.8396C23.4584 23.1599 23.8402 22.2382 23.8402 21.277C23.8402 20.3159 23.4584 19.3942 22.7788 18.7145C22.0992 18.0349 21.1774 17.6531 20.2163 17.6531V15.2371H20.2429C20.8952 15.2371 21.4243 15.7662 21.4243 16.4185C21.4243 16.7389 21.5515 17.0462 21.7781 17.2727C22.0046 17.4993 22.3119 17.6265 22.6322 17.6265C22.9526 17.6265 23.2599 17.4993 23.4864 17.2727C23.713 17.0462 23.8402 16.7389 23.8402 16.4185C23.8402 15.4645 23.4612 14.5495 22.7866 13.8748C22.1119 13.2002 21.1969 12.8212 20.2429 12.8212H20.2163V11.6132C20.2163 11.2928 20.089 10.9856 19.8625 10.759C19.6359 10.5325 19.3287 10.4052 19.0083 10.4052C18.6879 10.4052 18.3807 10.5325 18.1541 10.759C17.9276 10.9856 17.8003 11.2928 17.8003 11.6132V12.8212C16.8392 12.8212 15.9174 13.203 15.2378 13.8826C14.5582 14.5622 14.1764 15.484 14.1764 16.4451C14.1764 17.4062 14.5582 18.328 15.2378 19.0076C15.9174 19.6873 16.8392 20.0691 17.8003 20.0691V22.485ZM20.2163 22.485V20.0691C20.5367 20.0691 20.8439 20.1963 21.0705 20.4229C21.297 20.6494 21.4243 20.9567 21.4243 21.277C21.4243 21.5974 21.297 21.9047 21.0705 22.1312C20.8439 22.3578 20.5367 22.485 20.2163 22.485ZM17.8003 15.2371V17.6531C17.4799 17.6531 17.1727 17.5258 16.9461 17.2993C16.7196 17.0727 16.5923 16.7655 16.5923 16.4451C16.5923 16.1247 16.7196 15.8175 16.9461 15.5909C17.1727 15.3644 17.4799 15.2371 17.8003 15.2371V15.2371ZM19.0083 30.9409C12.3366 30.9409 6.92847 25.5328 6.92847 18.8611C6.92847 12.1894 12.3366 6.78125 19.0083 6.78125C25.68 6.78125 31.0881 12.1894 31.0881 18.8611C31.0881 25.5328 25.68 30.9409 19.0083 30.9409Z" fill="white"/>
						</svg>
						Продам
					</div>
					<div class="what-we-have__list-item-text">
						Продай тому, кому нужнее.
					</div>
					<img src="images/common/what_we_have_1.svg"
							 alt="" class="what-we-have__list-item-img"
							 style="bottom: 50px;"
					>
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.260498 7.71428C0.260498 3.53733 3.64658 0.151245 7.82352 0.151245H29.2521C33.429 0.151245 36.8151 3.53733 36.8151 7.71427V29.1428C36.8151 33.3198 33.429 36.7059 29.2521 36.7059H7.82353C3.64659 36.7059 0.260498 33.3198 0.260498 29.1428V7.71428Z" fill="#D373E8"/>
							<path d="M7.82352 0.466371H29.2521C33.255 0.466371 36.5 3.71137 36.5 7.71427V29.1428C36.5 33.1457 33.255 36.3907 29.2521 36.3907H7.82353C3.82063 36.3907 0.575624 33.1457 0.575624 29.1428V7.71428C0.575624 3.71137 3.82062 0.466371 7.82352 0.466371Z" stroke="#BC4CD5" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M10.3053 27.3628C10.3053 27.7768 10.6397 28.1112 11.0537 28.1112H17.7427V19.3172H10.3053V27.3628ZM19.3331 28.1112H26.0222C26.4361 28.1112 26.7706 27.7768 26.7706 27.3628V19.3172H19.3331V28.1112ZM27.1448 13.704H23.6927C24.0108 13.2035 24.1979 12.6095 24.1979 11.9733C24.1979 10.1935 22.7501 8.74573 20.9703 8.74573C20.002 8.74573 19.1296 9.17607 18.5379 9.85433C17.9462 9.17607 17.0738 8.74573 16.1055 8.74573C14.3257 8.74573 12.878 10.1935 12.878 11.9733C12.878 12.6095 13.0627 13.2035 13.3831 13.704H9.93104C9.51707 13.704 9.18262 14.0385 9.18262 14.4525V17.7268H17.7427V13.704H19.3331V17.7268H27.8932V14.4525C27.8932 14.0385 27.5588 13.704 27.1448 13.704ZM17.7427 13.6105H16.1055C15.2028 13.6105 14.4684 12.8761 14.4684 11.9733C14.4684 11.0705 15.2028 10.3361 16.1055 10.3361C17.0083 10.3361 17.7427 11.0705 17.7427 11.9733V13.6105ZM20.9703 13.6105H19.3331V11.9733C19.3331 11.0705 20.0675 10.3361 20.9703 10.3361C21.8731 10.3361 22.6075 11.0705 22.6075 11.9733C22.6075 12.8761 21.8731 13.6105 20.9703 13.6105Z" fill="white"/>
						</svg>
						Отдам
					</div>
					<div class="what-we-have__list-item-text">
						Сделай доброе дело, и добро вернётся к тебе!
					</div>
					<img src="images/common/what_we_have_2.svg"
							 alt="" class="what-we-have__list-item-img"
							 style="bottom: 55px;"
					>
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.790039 7.71428C0.790039 3.53733 4.17612 0.151245 8.35306 0.151245H29.7816C33.9586 0.151245 37.3447 3.53733 37.3447 7.71427V29.1428C37.3447 33.3198 33.9586 36.7059 29.7816 36.7059H8.35307C4.17613 36.7059 0.790039 33.3198 0.790039 29.1428V7.71428Z" fill="#416ED2"/>
							<path d="M8.35306 0.466371H29.7816C33.7845 0.466371 37.0295 3.71137 37.0295 7.71427V29.1428C37.0295 33.1457 33.7845 36.3907 29.7816 36.3907H8.35307C4.35017 36.3907 1.10517 33.1457 1.10517 29.1428V7.71428C1.10517 3.71137 4.35016 0.466371 8.35306 0.466371Z" stroke="#3158AC" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M21.8077 10.958C21.3486 10.9613 20.8929 10.9837 20.4114 11.1127C19.887 11.2551 19.3893 11.4822 18.9382 11.7852C18.3045 11.413 17.6907 11.1069 17.1026 11.035C16.3722 10.9448 15.6939 10.9936 14.9055 11.0101C13.9708 11.0292 13.3611 11.5065 12.3718 11.8886C11.3833 12.2691 10.1102 12.6381 8.31353 12.6381H7.48633V20.5999L7.95204 20.8324L9.47659 21.5827L14.9055 27.6312L14.9312 27.6568C15.5516 28.2706 16.3887 28.4228 17.1282 28.3806C17.8686 28.3393 18.5634 28.1225 19.1185 27.7867C20.3403 27.0497 23.6681 24.736 23.6681 24.736L23.7459 24.6839L23.798 24.6326C24.1917 24.2413 24.3895 23.764 24.5218 23.2627L27.7008 21.6596L30.079 20.8589L30.6481 20.6769V12.6381H29.8209C28.4304 12.6476 27.0515 12.384 25.7626 11.8622C24.7733 11.4759 24.1727 11.0035 23.2281 10.9837C22.7235 10.9737 22.2652 10.9547 21.8069 10.958H21.8077ZM21.8326 12.6124C22.2048 12.6091 22.6349 12.629 23.1776 12.6381C23.2645 12.6414 24.0594 12.9805 25.1679 13.414C26.1051 13.7821 27.4071 14.1089 28.9937 14.2147V19.4882L27.0804 20.135H27.0291L26.977 20.1599L24.4705 21.4271C24.3375 21.0433 24.1262 20.6912 23.8501 20.3931L23.798 20.3154L20.2824 15.999L19.7654 15.3521L19.1185 15.8691L16.8958 17.6791C16.1497 18.1961 15.545 18.0472 14.9312 17.7568C14.7533 17.6725 14.7633 17.6468 14.621 17.55L18.3955 14.4215L18.4468 14.3702C19.5677 13.2585 20.2567 12.8738 20.8507 12.7158C21.1485 12.6348 21.462 12.6157 21.8334 12.6124H21.8326ZM16.0694 12.6381C16.3454 12.6277 16.6218 12.6362 16.8966 12.6637C17.1133 12.6894 17.359 12.8738 17.5691 12.9483C17.4848 13.026 17.4236 13.0707 17.3359 13.1551L17.2846 13.2072L12.7606 16.9544L12.0624 17.5236L12.6828 18.1696C12.6828 18.1696 13.2809 18.8165 14.2082 19.2557C15.1355 19.695 16.5674 19.944 17.8529 19.0489L17.905 18.9968L19.5073 17.6791L22.558 21.4271L22.5837 21.4793L22.6093 21.5041C23.1553 22.0442 23.1429 22.8938 22.6093 23.4439C22.6027 23.4497 22.6159 23.4629 22.6093 23.4687C22.6027 23.4728 22.4935 23.5373 22.4803 23.5473L21.3941 22.0732L20.0499 23.0559L21.1104 24.4771C20.6803 24.7682 20.4867 24.9204 20.0243 25.2273L18.9133 23.7276L17.5683 24.7103L18.6288 26.1315C18.5345 26.1894 18.3409 26.3192 18.2665 26.3647C18.0051 26.5227 17.5005 26.7006 17.0513 26.7262C16.6286 26.7494 16.3052 26.6518 16.1472 26.5194L16.1215 26.4938L10.5892 20.3675L10.4858 20.2376L9.14074 19.5659V14.2147C10.7207 14.1113 12.0327 13.7978 12.9666 13.4396C14.0717 13.0161 14.8609 12.667 14.9568 12.6637L16.0686 12.6381H16.0694Z" fill="white"/>
						</svg>
						Знакомства
					</div>
					<div class="what-we-have__list-item-text">
						Одиноко? Не скучай- рядом те, кому ты нужен.
					</div>
					<img src="images/common/what_we_have_3.svg"
							 alt="" class="what-we-have__list-item-img"
							 style="bottom: 70px;"
					>
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.731079 7.59672C0.731079 3.41978 4.11716 0.0336914 8.2941 0.0336914H29.7227C33.8996 0.0336914 37.2857 3.41977 37.2857 7.59672V29.0253C37.2857 33.2022 33.8996 36.5883 29.7227 36.5883H8.29411C4.11717 36.5883 0.731079 33.2022 0.731079 29.0253V7.59672Z" fill="#00B9FF"/>
							<path d="M8.2941 0.348817H29.7227C33.7256 0.348817 36.9706 3.59381 36.9706 7.59672V29.0253C36.9706 33.0282 33.7256 36.2732 29.7227 36.2732H8.29411C4.29121 36.2732 1.04621 33.0282 1.04621 29.0253V7.59672C1.04621 3.59382 4.2912 0.348817 8.2941 0.348817Z" stroke="#04A5E2" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M13.4937 20.5178H15.6995V22.7237H13.4937V20.5178Z" fill="white"/>
							<path d="M26.7291 7.28162H17.9056C17.3205 7.28162 16.7594 7.51402 16.3458 7.9277C15.9321 8.34139 15.6997 8.90246 15.6997 9.4875V16.1051H11.2879C10.0714 16.1051 9.08203 17.0945 9.08203 18.311V28.2375C9.08203 28.53 9.19823 28.8106 9.40508 29.0174C9.61192 29.2242 9.89245 29.3404 10.185 29.3404H27.832C28.1245 29.3404 28.4051 29.2242 28.6119 29.0174C28.8188 28.8106 28.935 28.53 28.935 28.2375V9.4875C28.935 8.90246 28.7026 8.34139 28.2889 7.9277C27.8752 7.51402 27.3141 7.28162 26.7291 7.28162ZM11.2879 27.1346V18.311H17.9056V27.1346H11.2879ZM21.2144 13.8993H19.0085V11.6934H21.2144V13.8993ZM25.6261 22.7228H23.4203V20.5169H25.6261V22.7228ZM25.6261 18.311H23.4203V16.1051H25.6261V18.311ZM25.6261 13.8993H23.4203V11.6934H25.6261V13.8993Z" fill="white"/>
						</svg>
						Недвижимость
					</div>
					<div class="what-we-have__list-item-text">
						Рыба ищет, где глубже, человек- где лучше.
					</div>
					<img src="images/common/what_we_have_4.svg"
							 alt="" class="what-we-have__list-item-img">
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.260498 7.59672C0.260498 3.41978 3.64658 0.0336914 7.82352 0.0336914H29.2521C33.429 0.0336914 36.8151 3.41977 36.8151 7.59672V29.0253C36.8151 33.2022 33.429 36.5883 29.2521 36.5883H7.82353C3.64659 36.5883 0.260498 33.2022 0.260498 29.0253V7.59672Z" fill="#F99909"/>
							<path d="M7.82352 0.348817H29.2521C33.255 0.348817 36.5 3.59381 36.5 7.59672V29.0253C36.5 33.0282 33.255 36.2732 29.2521 36.2732H7.82353C3.82063 36.2732 0.575624 33.0282 0.575624 29.0253V7.59672C0.575624 3.59382 3.82062 0.348817 7.82352 0.348817Z" stroke="#DA8301" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M15.2115 15.004L15.5107 12.4341L11.4727 8.29206C12.3401 7.86879 13.3271 7.59668 14.374 7.59668C17.9933 7.59668 20.9246 10.5294 20.9246 14.2179C20.9246 14.7622 20.8348 15.3668 20.7152 15.9111L28.1631 23.4091C29.5091 24.7999 29.6287 26.9163 28.4024 28.1559C27.176 29.3955 25.0523 29.3048 23.6764 27.914L16.408 20.5066C15.7499 20.7183 15.0919 20.8694 14.374 20.8694C10.7548 20.8694 7.82349 17.8763 7.82349 14.2179C7.82349 13.19 8.03286 12.283 8.42171 11.4062L12.5794 15.6692L15.2115 15.004Z" fill="white"/>
						</svg>
						Услуги
					</div>
					<div class="what-we-have__list-item-text">
						О твоих талантах должны узнать другие!
					</div>
					<img src="images/common/what_we_have_5.svg"
							 alt="" class="what-we-have__list-item-img"
							 style="bottom: 40px;"
					>
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.790039 8.11772C0.790039 3.94078 4.17612 0.554688 8.35306 0.554688H29.7816C33.9586 0.554688 37.3447 3.94077 37.3447 8.11771V29.5463C37.3447 33.7232 33.9586 37.1093 29.7816 37.1093H8.35307C4.17613 37.1093 0.790039 33.7232 0.790039 29.5463V8.11772Z" fill="#1ABA00"/>
							<path d="M8.35306 0.869814H29.7816C33.7845 0.869814 37.0295 4.11481 37.0295 8.11771V29.5463C37.0295 33.5492 33.7845 36.7942 29.7816 36.7942H8.35307C4.35017 36.7942 1.10517 33.5492 1.10517 29.5463V8.11772C1.10517 4.11481 4.35016 0.869814 8.35306 0.869814Z" stroke="#1AA903" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M14.0777 24.8195C12.98 24.8195 12.0919 25.7176 12.0919 26.8153C12.0919 27.913 12.98 28.8111 14.0777 28.8111C15.1754 28.8111 16.0735 27.913 16.0735 26.8153C16.0735 25.7176 15.1754 24.8195 14.0777 24.8195ZM9.08823 10.8489H10.0861L13.6786 18.423L12.3314 20.8579C11.6029 22.1951 12.5609 23.8216 14.0777 23.8216H25.0546C25.6035 23.8216 26.0525 23.3726 26.0525 22.8237C26.0525 22.2749 25.6035 21.8258 25.0546 21.8258H14.0777L15.1754 19.83H22.6098C23.3582 19.83 24.0168 19.4209 24.3561 18.8022L27.9286 12.3258C28.0127 12.1746 28.0558 12.004 28.0537 11.8309C28.0517 11.6579 28.0044 11.4884 27.9167 11.3392C27.829 11.19 27.7039 11.0663 27.5537 10.9803C27.4035 10.8943 27.2335 10.849 27.0604 10.8489H12.2915L11.6229 9.42195C11.5427 9.25162 11.4156 9.10766 11.2566 9.00692C11.0975 8.90619 10.9131 8.85285 10.7248 8.85315H9.08823C8.53939 8.85315 8.09033 9.30221 8.09033 9.85105C8.09033 10.3999 8.53939 10.8489 9.08823 10.8489ZM24.0567 24.8195C22.959 24.8195 22.0709 25.7176 22.0709 26.8153C22.0709 27.913 22.959 28.8111 24.0567 28.8111C25.1544 28.8111 26.0525 27.913 26.0525 26.8153C26.0525 25.7176 25.1544 24.8195 24.0567 24.8195Z" fill="white"/>
						</svg>
						Русские магазины
					</div>
					<div class="what-we-have__list-item-text">
						Кто соскучился по гречке и пельменям?
					</div>
					<img src="images/common/what_we_have_6.svg"
							 alt="" class="what-we-have__list-item-img">
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.731079 8.21855C0.731079 4.04161 4.11716 0.655518 8.2941 0.655518H29.7227C33.8996 0.655518 37.2857 4.0416 37.2857 8.21854V29.6471C37.2857 33.8241 33.8996 37.2101 29.7227 37.2101H8.29411C4.11717 37.2101 0.731079 33.8241 0.731079 29.6471V8.21855Z" fill="#00477F"/>
							<path d="M8.2941 0.970644H29.7227C33.7256 0.970644 36.9706 4.21564 36.9706 8.21854V29.6471C36.9706 33.65 33.7256 36.895 29.7227 36.895H8.29411C4.29121 36.895 1.04621 33.65 1.04621 29.6471V8.21855C1.04621 4.21564 4.2912 0.970644 8.2941 0.970644Z" stroke="#00355F" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M27.8319 11.2122V26.6534H10.1849V11.2122H27.8319ZM27.8319 9.00635H10.1849C8.96062 9.00635 7.979 9.98797 7.979 11.2122V26.6534C7.979 27.8777 8.96062 28.8593 10.1849 28.8593H27.8319C29.0562 28.8593 30.0378 27.8777 30.0378 26.6534V11.2122C30.0378 9.98797 29.0562 9.00635 27.8319 9.00635ZM25.6261 22.2416H12.3908V24.4475H25.6261V22.2416ZM16.8025 13.4181H12.3908V20.0358H16.8025V13.4181ZM19.0084 15.624H25.6261V13.4181H19.0084V15.624ZM25.6261 17.8299H19.0084V20.0358H25.6261V17.8299Z" fill="white"/>
						</svg>
						Новости
					</div>
					<div class="what-we-have__list-item-text">
						Мы расскажем, когда в твой город приедут «РукиВверх» и другие артисты.
					</div>
					<img src="images/common/what_we_have_7.svg"
							 alt="" class="what-we-have__list-item-img">
				</div>
				<div class="what-we-have__list-item">
					<div class="what-we-have__list-item-title">
						<svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.260498 8.21855C0.260498 4.04161 3.64658 0.655518 7.82352 0.655518H29.2521C33.429 0.655518 36.8151 4.0416 36.8151 8.21854V29.6471C36.8151 33.8241 33.429 37.2101 29.2521 37.2101H7.82353C3.64659 37.2101 0.260498 33.8241 0.260498 29.6471V8.21855Z" fill="#8280FF"/>
							<path d="M7.82352 0.970644H29.2521C33.255 0.970644 36.5 4.21564 36.5 8.21854V29.6471C36.5 33.65 33.255 36.895 29.2521 36.895H7.82353C3.82063 36.895 0.575624 33.65 0.575624 29.6471V8.21855C0.575624 4.21564 3.82062 0.970644 7.82352 0.970644Z" stroke="#4E4BCB" stroke-opacity="0.5" stroke-width="0.630252"/>
							<path d="M22.3615 25.4604L22.1112 26.4837C21.3603 26.7801 20.7604 27.0056 20.3138 27.1607C19.8666 27.3163 19.347 27.3937 18.755 27.3937C17.846 27.3937 17.1389 27.171 16.6345 26.7287C16.1302 26.2846 15.878 25.7218 15.878 25.0391C15.878 24.7748 15.8963 24.503 15.9343 24.226C15.9727 23.9488 16.0337 23.6365 16.1172 23.2874L17.0557 19.9658C17.1392 19.6477 17.2101 19.3463 17.267 19.0613C17.3246 18.7781 17.3524 18.5175 17.3524 18.2829C17.3524 17.8587 17.2646 17.562 17.0897 17.3952C16.9149 17.2289 16.5812 17.1444 16.0859 17.1444C15.8433 17.1444 15.594 17.1833 15.3398 17.2584C15.0845 17.3339 14.8663 17.4068 14.6831 17.4745L14.9341 16.4505C15.5488 16.2002 16.1365 15.9858 16.6986 15.8079C17.2607 15.6295 17.7919 15.5403 18.2942 15.5403C19.1971 15.5403 19.8937 15.7585 20.383 16.1949C20.8722 16.6316 21.1167 17.1977 21.1167 17.8954C21.1167 18.0397 21.1007 18.294 21.0661 18.6575C21.0324 19.0218 20.9696 19.3556 20.8781 19.6593L19.9437 22.9676C19.8671 23.2333 19.7982 23.5371 19.7383 23.8789C19.6765 24.2185 19.647 24.478 19.647 24.652C19.647 25.0913 19.7449 25.3912 19.9413 25.5507C20.1391 25.7101 20.4798 25.7894 20.9637 25.7894C21.1909 25.7894 21.4494 25.7491 21.7366 25.6699C22.0231 25.5908 22.232 25.5213 22.3615 25.4604ZM22.5985 11.5711C22.5985 12.1475 22.3813 12.6398 21.9447 13.0445C21.5093 13.4508 20.9846 13.654 20.3708 13.654C19.755 13.654 19.229 13.4508 18.7886 13.0445C18.349 12.6396 18.1287 12.1475 18.1287 11.5711C18.1287 10.9958 18.349 10.5027 18.7886 10.0928C19.2282 9.68356 19.7552 9.479 20.3708 9.479C20.9844 9.479 21.5093 9.68404 21.9447 10.0928C22.3816 10.5027 22.5985 10.996 22.5985 11.5711Z" fill="white"/>
						</svg>
						Полезная информация
					</div>
					<div class="what-we-have__list-item-text">
						Будь в курсе происходящего - будет что обсудить!
					</div>
					<img src="images/common/what_we_have_8.svg"
							 alt="" class="what-we-have__list-item-img">
				</div>
			</div>
		</div>
  </div>
</section>
		<section
				id="contacts"
				class="contact-us"
>
  <div class="container">
		<div class="section-title">
			<div class="section-title__title">
				Связаться с нами
			</div>
			<div class="section-title__ghost">
				КОНТАКТЫ
			</div>
		</div>
		<div class="contact-us__content">
			<div class="contact-us__contacts">
				<div class="contact-us__contacts-top">
					<div class="contact-us__contacts-text">
						Телефон: <a href="tel:+41787177282">+41787177282</a>
					</div>
					<div class="contact-us__contacts-text">
						Почта: <a href="mailto:me@nashchat.org">me@nashchat.org</a>
					</div>
					<div class="contact-us__social">
						<a href="https://www.google.com/"
							 target="_blank"
							 class="contact-us__social-link">
							<img
								class="contact-us__social-img"
								src="images/common/instagram.svg"
								alt=""
							/>
						</a>
						<a href="https://www.google.com/"
							 target="_blank"
							 class="contact-us__social-link">
							<img
								class="contact-us__social-img"
								src="images/common/facebook.svg"
								alt=""
							/>
						</a>
						<a href="https://www.google.com/"
							 target="_blank"
							 class="contact-us__social-link">
							<img
								class="contact-us__social-img"
								src="images/common/vk.svg"
								alt=""
							/>
						</a>
					</div>
				</div>
			</div>
			<div class="contact-us__form">
				<div class="contact-us__title">
					Остались вопросы или есть предложение?
				</div>
				<div class="contact-us__subtitle">
					Оставьте свою заявку, и мы обязательно вам ответим
				</div>
				<form method="POST" class="form">
					<div class="form__line">
						<div class="form__col">
							<div class="form__item">
								<label
												for="email"
												class="form__label"
								>
									Email адрес
								</label>
								<input
												placeholder="Email адрес"
												required
												type="email"
												name="email"
												id="email"
												class="form__input"/>
							</div>
						</div>
						<div class="form__col">
							<div class="form__item">
								<label
												for="name"
												class="form__label"
								>
									Имя
								</label>
								<input
												placeholder="Имя"
												required
												name="name"
												id="name"
												class="form__input"/>
							</div>
						</div>
					</div>
					<div class="form__line">
						<div class="form__col">
							<div class="form__item">
								<label
												class="form__label"
												for="country"
								>
									Страна проживания
								</label>
								<input
												placeholder="Страна проживания"
												required
												name="country"
												id="country"
												class="form__input"
								/>
							</div>
						</div>
					</div>
					<div class="form__item">
						<label
										for="text"
										class="form__label"
						>
							Сообщение
						</label>
						<textarea
										required
										placeholder="Сообщение"
										class="form__textarea"
										name="text"
										id="text" cols="30" rows="10"
						></textarea>
					</div>
					<div class="contact-us__btn">
						<button type="submit" name="feedback_submit" class="form__button">Отправить</button>
					</div>
				</form>
			</div>
		</div>
  </div>
</section>
		<section class="seo-section">
  <div class="container">
		<div class="seo-section__text">
			НашЧат- пространство для общения и полезной информации для русских и всех русскоговорящих
			за границей. В нашем приложении мы предлагаем помощь, советы, объявления, поиск и предложение
			работы, знакомства в Европе и на всех континентах. Ищете русские магазины, русские школы,
			Российские Посольства и Консульства, православные храмы в Германии, Франции, Англии, США,
			Швейцарии и по всему миру? Вы найдёте адрес у нас! Здесь вы найдёте даже бесплатные вещи в
			дар от соотечественников. Наше приложение уникально- это кладезь действительно необходимой
			информации для русского туриста или иммигранта.
		</div>
  </div>
</section>
	</main>
	<footer class="footer">
  <div class="container">
		<div class="footer__content">
			<div class="footer__left">
				<a href="/" class="footer__logo-link">
					<img class="footer__logo" src="images/common/logo.svg" alt="">
				</a>
				<a href="" class="footer__link">+41787177282</a>
				<a href="" class="footer__link">me@nashchat.org</a>
			</div>
			<div class="footer__right">
				<div class="footer__col">
					<div class="footer__title">НашЧат</div>
					<a data-selector="link-nav-item" href="/#about-us" class="footer__link">О нас</a>
					<a data-selector="link-nav-item" href="/#how-it-works" class="footer__link">Как работает</a>
					<a data-selector="link-nav-item" href="/#categories" class="footer__link">Категории</a>
					<a data-selector="link-nav-item" href="/#contacts" class="footer__link">Контакты</a>
				</div>
				<div class="footer__col">
					<div class="footer__title">Загрузки</div>
					<!-- TODO add link -->
					<a href="#" class="footer__link">iPhone и iPad</a>
					<!-- TODO add link -->
					<a href="#" class="footer__link">Android</a>
				</div>
				<div class="footer__col _third">
					<div class="footer__title">Документы</div>
					<a href="/terms-of-use.html" class="footer__link">Условия и Политика</a>
					<a href="/terms-of-use.html" class="footer__link">Условия использования</a>
					<a href="/terms-of-use.html" class="footer__link">Политика конфиденциальности</a>
				</div>
			</div>
			<div class="footer__copyright">© <script>document.write(new Date().getFullYear())</script> НашЧат</div>
		</div>
  </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="main.js"></script></body>
</html>


