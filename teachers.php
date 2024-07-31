<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
		 <title>Минский филиал БТЭУ ПК </title>  
		 <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
		Markup
		
		
		<!DOCTYPE html>
		<html>
		<head>
			<title>Исправленный код</title>
			<!-- Подключите Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		</head>
		<body>
		
		<!-- Start header -->
		<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">ГЛАВНАЯ</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">АБИТУРИЕНТАМ </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">СПЕЦИАЛЬНОСТИ </a>
								<a class="dropdown-item" href="course-grid-3.php">ХОЧУ ПОСТУПИТЬ В МФ БТЭУ ПК </a>
								<a class="dropdown-item" href="course-grid-4.php">ПРАВИЛА ПРИЁМА ДОКУМЕНТОВ </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">МЕРОПРИЯТИЯ </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">НОВОСТИ</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">ПРЕДМЕТНЫЕ КОМИССИИ</a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.php">О СТОИМОСТИ</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">КОНТАКТЫ</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
            <?php
                session_start();
                if(isset($_SESSION['username'])) {
                    // User is logged in, display "Log Out" button
                    echo '<li><a class="hover-btn-new log orange" href="logout.php"><span>ВЫЙТИ</span></a></li>';
                } else {
                    // User is not logged in, display "Log In" button
                    echo '<li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login" onclick="window.location.href=\'setting.php\'"><span>ВОЙДИ СЕЙЧАС</span></a></li>';
                }
            ?>
        </ul>
				
				</div>
			</div>
		</nav>
	</header>
		<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Предметные (цикловые) комиссии<span class="m_1"></span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
		<div id="med" style="text-align: center;">
			<div class="col-md-8 offset-md-2">
					<h3  style="font-weight: bold; color: #0000ff; font-size: 24px; text-transform: uppercase;">Предметная комиссия естественно-математического цикла и программного обеспечения</h3>
			</div>
	</div>
	
	

      <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-01.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Подгорная
								Виктория
								Витальевна</h3>
							<span class="post">Председатель предметной комиссии. Математика, теория вероятности и математическая статистика </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-02.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Бадай
								Ирина
								Николаевна</h3>
							<span class="post"> Черчение, Основы инженерной графики </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-03.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Биргер
								Александр
								Георгиевич</h3>
							<span class="post">Математика, физика 
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-04.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Гришкевич
								Дарья
								Леонидовна  </h3>
							<span class="post">Химия, защита населения и территорий от ЧС, охрана окружающей среды и энергосбережение </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-05.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Климкина
								Екатерина
								Григорьевна</h3>
							<span class="post">Информационные технологии, учебная практика по информационным технологиям </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-06.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Койпыш
								Сергей
								Константинович</h3>
							<span class="post">Информатика, астрономия, информационные технологии, учебная практика по информационным технологиям </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-07.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Кузнецова
								Елена
								Анатольевна</h3>
							<span class="post">Обществоведение, основы социально-гуманитарных наук, основы права, правовое обеспечение коммерческой деятельности  </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-08.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Лысак
								Валентина
								Михайловна</h3>
							<span class="post">Информационные технологии, учебная практика по информационным технологиям </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-09.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Масловская
								Александра
								Магомедовна</h3>
							<span class="post">Биология, медицинская подготовка </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-10.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Тарабонда
								Татьяна
								Альбертовна</h3>
							<span class="post">Математика </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-11.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Тишкова
								Елена
								Александровна</h3>
							<span class="post">Охрана окружающей среды и энергосбережение   </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-12.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Шутько
								Елена
								Иосифовна</h3>
							<span class="post">Информатика, ОАИП, АЛОВТ, ИПО, ТРО, ОЯП, КПиЯП, БД и СУБД, ТРПП, тестирование ПО, ЗКИ, ПССИП, Учебная практика по разработке и сопровождению ПО</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-13.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Саванович
								Виктор
								Андреевич</h3>
							<span class="post">Тестирование ПО, конструирование программ и языки программирования, защита компьютерной информации  </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-14.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Дрозд
								Александр
								Викторович</h3>
							<span class="post">Тестирование ПО, конструирование программ и языки программирования, защита компьютерной информации </span>
						</div>
					</div>
				</div>




				<div class="col-md-8 offset-md-2">
					<h4  style="font-weight: bold; color: blue; font-size: 24px; text-transform: uppercase;">
						<p>ㅤ</p>
						<p>ㅤ</p>
						Предметная комиссия правоведения
					</h4>
			</div>
	</div>
	
	

        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-15.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Акенчиц 
								Екатерина 
								Викторовна</h3>
							<span class="post">Председатель предметной комиссии. Трудовое право, Социальное и медицинское право, Судебная практика по трудовым делам, Оформление кадровой документации, Порядок оформления документов для назначения пенсий, Осуществляет руководство учебной, технологической и преддипломной практикой</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-16.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Васильева  
								Юлия 
								Александровна</h3>
							<span class="post">Актуальные проблемы гражданского права, Документационное обеспечение управление организацией, Гражданское право, Логика, Экологическое право, Этика и психология профессиональной деятельности юриста, Основы интеллектуальной собственности, Финансовое право, Налоговое право, Хозяйственный процесс </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-17.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Ворошкевич
								Станислав
								Анатольевич</h3>
							<span class="post">Общая теория права, Конституционное право, Хозяйственное право, Информационное право, Уголовное право, Уголовный процесс, Документационное обеспечение управление организацией 
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-18.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Кононович
								Людмила
								Валерьевна </h3>
							<span class="post">Актуальные проблемы гражданского права, Гражданское право, Гражданский процесс, Исполнительное производство, История государства и права зарубежных стран, Таможенное право, Международное публичное право, История государства и права зарубежных стран, История, государства и права Беларуси </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-19.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Соловьёв
								Евгений
								Александрович</h3>
							<span class="post">Уголовное право  
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-20.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Шкленский
								Роман
								Александрович</h3>
							<span class="post">Административно-деликтное и процессуально-исполнительное право, Административное право, Документационное обеспечение управление организацией, Юридическая служба в организации, Оформление кадровой документации, Правовое обеспечение коммерческой деятельности, Таможенное право, Осуществляет руководство учебной, технологической и преддипломной практикой </span>
						</div>
					</div>
				</div>



				<div class="col-md-8 offset-md-2" style="text-align: center;">
					<h4 style="font-weight: bold; color: blue; font-size: 24px; text-transform: uppercase;">
							<p>ㅤ</p>
							<p>ㅤ</p>
							Предметная комиссия маркетинга, экономики и коммерческой деятельности
					</h4>
			</div>
			
	</div>
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-21.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Улезло 
								Елена 
								Станиславовна</h3>
							<span class="post">Председатель предметной комиссии. Финансы организации, экономика организации, ценообразование, бухгалтерский учет</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-22.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Аверина 
								Юлия 
								Андреевна</h3>
							<span class="post">Основы менеджмента, основы маркетинга, маркетинг по видам экономической деятельности, международный маркетинг </span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-23.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Едвин
								Алеся
								Васильевна</h3>
							<span class="post">Экономика организации, основы экономики, анализ хозяйственной деятельности, финансы организации, документационное обеспечение управления и деловая документация, коммерческая деятельность  
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-24.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Ефименко
								Инна
								Александровна	 </h3>
							<span class="post"> Маркетинг </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-25.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Ковалевская
								Наталья
								Николаевна</h3>
							<span class="post"> Маркетинг, основы маркетинга, маркетинг по видам экономической деятельности, интернет – маркетинг, учебная практика по маркетингу технологическая и преддипломная практика, основы менеджмента, мерчендайзинг    
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-26.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Кушнер
								Галина
								Ивановна</h3>
							<span class="post"> Основы социально-гуманитарных наук, психология и этика деловых отношений, основы менеджмента, </span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-27.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Мужиченко
								Инна
								Николаевна</h3>
							<span class="post">Бухгалтерский учет, основы экономики, экономика организации, финансы организации </span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-28.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Ходанёнок
								Светлана
								Антоновна</h3>
							<span class="post">Экономика организации, основы экономики </span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-29.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Чернюк
								Елена
								Марьяновна</h3>
							<span class="post">Введение в специальность, финансы организации </span>
						</div>
					</div>
				</div>

				<div class="col-md-8 offset-md-2" style="text-align: center;">
					<h4  style="font-weight: bold; color: blue; font-size: 24px; text-transform: uppercase;">
						<p>ㅤ</p>
						<p>ㅤ</p>
						Предметная комиссия торговой деятельности</h4>
			</div>
	</div>
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-30.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Сакерина
								Алеся
								Владимировна</h3>
							<span class="post">Председатель предметной комиссии. Торговое оборудование, учебная практика на получение профессии рабочего «продавец» 
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-31.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Бирук
								Ирина
								Викторовна</h3>
							<span class="post">Товароведение продовольственных товаров, товароведение
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-32.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Бурчиц
								Мария
								Васильевна</h3>
							<span class="post">Логистика, логистика складирования, транспортная логистика
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-33.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Дащинская
								Ольга
								Вячеславовна </h3>
							<span class="post"> Организация и технология торговли, учебная практика по организации и технологии торговли  </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-34.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Семёнова
								Инна
								Евгеньевна</h3>
							<span class="post">Товароведение продовольственных товаров, товароведение, учебная практика на получение профессии рабочего «продавец»    
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-35.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Корякина
								Татьяна
								Константиновна</h3>
							<span class="post">Товароведение непродовольственных товаров, товароведение, учебная практика на получение профессии рабочего «продавец»  </span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-36.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Лютыч
								Ксения
								Дмитриевна</h3>
							<span class="post">Маркетинг</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-37.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Свитящук
								Елена
								Юрьевна</h3>
							<span class="post">Товароведение непродовольственных товаров</span>
						</div>
					</div>
				</div>
				<div class="col-md-8 offset-md-2" style="text-align: center;">
					<h4  style="font-weight: bold; color: blue; font-size: 24px; text-transform: uppercase;">
						<p>ㅤ</p>
						<p>ㅤ</p>
						Предметная комиссия физической культуры и здоровья, допризывной подготовки</h4>
			</div>
	</div>
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-38.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Стасюк
								Максим
								Юрьевич</h3>
							<span class="post">Председатель предметной комиссии. Физическая культура 
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-39.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Гаевский
								Владимир
								Евгеньевич	</h3>
							<span class="post">Физическая культура
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-40.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Капыш
								Алла
								Леонидовна</h3>
							<span class="post">Физическая культура
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-41.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Ляхов
								Фёдор
								Фёдорович</h3>
							<span class="post">Физическая культура</span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-42.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Протько
								Константин
								Васильевич</h3>
							<span class="post">Физическая культура
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-43.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Пшонка
								Василий
								Иванович</h3>
							<span class="post">Физическая культура </span>
						</div>
					</div>
				</div>
				<div class="col-md-8 offset-md-2" style="text-align: center;">
					<h4  style="font-weight: bold; color: blue; font-size: 24px; text-transform: uppercase;">
						<p>ㅤ</p>
						<p>ㅤ</p>
						Предметная  социально-гуманитарного цикла</h4>
			</div>
	</div>
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-44.png">
							<div class="social">
								
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Семеняко 
								Валентина 
								Александровна</h3>
							<span class="post">Председатель предметной комиссии. Белорусский язык, белорусская литература, белорусский язык (профессиональная лексика)
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-45.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Бойко
								Людмила
								Николаевна</h3>
							<span class="post">Русский язык, русская литература, культура речи юриста
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-46.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Гуськова
								Ирина
								Гаврииловна</h3>
							<span class="post">География, всемирная история, история Беларуси, основы кооперативного движения 

							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-47.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Липская
								Тамара
								Анатольевна</h3>
							<span class="post">Иностранный язык (немецкий), иностранный язык делового общения, иностарнный язык (профессиональная лексика) </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-48.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Лойко
								Наталья
								Антоновна</h3>
							<span class="post">Иностранный язык (английский), иностранный язык делового общения, иностранный язык (профессиональная лексика) 
							</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-49.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Лямзина
								Кристина
								Андреевна</h3>
							<span class="post">Иностранный язык (английский), иностранный язык делового общения, иностранный язык (профессиональная лексика) </span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-50.png">
							<div class="social">
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Панкевич
								Валерия
								Юрьевна</h3>
							<span class="post">История Беларуси, всемирная история </span>
						</div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	

    
		<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
			<div class="container">
					<div class="section-title text-center">
							<h3>Учебно-программная документация</h3>
							<p>Перечень образовательных стандартов</p>
							<a href="http://mtk-bks.by/_file/metod_kabinet/perechen_obraz_standartov(new).pdf" style="font-size: larger;">НАЖИМАЙ НА ССЫЛКУ ЧТОБЫ УЗНАТЬ ПЕРЕЧЕНЬ ОБРАЗОВАТЕЛЬНЫХ СТАНДАРТОВ</a>
					</div><!-- end title -->
				
			</div>
	</div>
									</div><!-- end carousel -->
							</div><!-- end col -->
					</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<div class="parallax section dbcolor">
		<div class="container">
			<div class="row logos justify-content-center"> <!-- Add 'justify-content-center' class to center align the logos -->
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
		</div><!-- end section -->
    

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <div id="end">
                            <h3>Присоединяйся к нам!</h3> </div>
                        </div>
                        <p>На рынке образовательных услуг с 1957 года</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/mfbteupk/?locale=id_ID"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://vk.com/bteupk_minsk?ysclid=lu0yivsl3896114665"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/mf_bteu_pk/?ysclid=lu0yjj0f7p636811679"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>						
                    </div>
                </div>

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Наши контакты</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">mail@mtk-bks.by</a></li>
                            <li><a href="#">www.mtkbks.com</a></li>
                            <li>Адрес: 220107, пр-т Партизанский, 73, г. Минск, Республика Беларусь</li>
                            <li>8(017) 378-72-42</li>
                        </ul>
                    </div>
                </div>
				
            </div>
        </div>
				<td class="mp">
					<div class="map" style="width: 100%;">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ec76266afca5487e4ff622e8896fed937436404cf8cf82e794342579f61d4b0&amp;width=100%&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</td>
				
				
    </footer>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Сайт разработан учащейся Романович А.А. &copy; 2024 </p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>

	</body>
</html>