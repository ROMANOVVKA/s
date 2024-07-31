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


</head>
<body class="host_version"> 


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

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
			<h1>НОВОСТИ<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
            </div><!-- end title -->
            
					<div class="row"> 
						<div class="col-lg-4 col-md-6 col-12">
							 <div class="blog-item">
				<div class="image-blog">
					<img src="images/blog_4.jpg" alt="" class="img-fluid">
				</div>
				<div class="meta-info-blog">
					<span><i class="fa fa-calendar"></i> <a href="#"> 28.02.2024</a> </span>
				</div>
				<div class="blog-title">
					<h2><a href="#" title="">ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ</a></h2>
				</div>
				<div class="blog-desc">
					<p>2 МЕСТО! 2 этап республиканской олимпиады среди учащихся учреждений среднего специального образования потребительской кооперации и филиалов УО "Белорусский торгово-экономический университет потребительской кооперации" по специальности "Программное обеспечение информационных технологий". Состав команды: Салата Иван Сергеевич, Бузюк Яна Дмитриевна, Романович Анастасия Андреевна, Нехайчик Юлия Дмитриевна, Бурачевский Александр Владимирович.</p>
				</div>
			</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_2.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">16.03.2024</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">День открытых дверей в Минском филиале</a></h2>
						</div>
						<div class="blog-desc">
							<p>16 марта в Минском филиале УО «Белорусский торгово-экономический университет потребительской кооперации» стартовало проведение профориентационного мероприятия «День открытых дверей». В преддверии весенних каникул гостями Минского филиала стали учащиеся 9-11 классов школ г.Минска, г.Осиповичи, г.Солигорска, г.Борисова, г.Славгорода, г.Вилейка, г.Лиды, аг.Раубичи и Боровлян – около 160 чел.

								В соответствии с программой Дня открытых дверей открыли мероприятие заместитель директора по учебно-производственной работе Семёнова И.Е. и заместитель ответственного секретаря приёмной комиссии Хващевская Т.В., которые подробно изложили  информацию о специальностях,  внеурочной деятельности, культурно массовых и спортивных мероприятиях, условиях поступления и правилах приема на 2024 год. Гостям филиала представилась возможность поучаствовать в весеннем празднике «МаслоуФест» с со старинными забавами, аквагриммом, куклами-мотанками, завязывании морских узлов, танцами, стихами и другими праздничными активностями. Продемонстрирован видеофильм об учебном заведении. </p>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_3.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">14.03.2024 </a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">День Конституции Республики Беларусь.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Ежегодно 15 марта мы отмечаем государственный праздник - День Конституции Республики Беларусь.
Привлечь внимание к основному закону страны была призвана диалоговая площадка, которая состоялась в Минском филиале БТЭУ ПК в преддверье празднования 30-летия Конституции. 
								Спикерами  площадки стали:
								
							<P>ОЛЕГ ФЁДОРОВИЧ ЛЕВШУНОВ;</P>
							<P>ВАЛЕРИЙ НИКОЛАЕВИЧ МАРИНИЧЕВ;</P>
								<P>ВАЛЕНТИН  МИХАЙЛОВИЧ СЕМЕНЯКО; </P>
								<P>МАРИНА НИКОЛАЕВНА КУЗЬМИЧ;</P>
								<P>Приятным моментом встречи стало исполнение Мариной Николаевной песни "Васiльковае  неба". </p>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3"> 

						<hr class="invis"> 
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_1.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">25.03.24</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">Участие в заседании Совета Заводского районного г. Минска объединения профсоюзов</a></h2>
						</div>
						<div class="blog-desc">
							<p>25.03.24   директор филиала Левшунов Олег Федорович и председатель первичной профсоюзной организации сотрудников Кузнецова Елена Анатольевна  приняли участие в заседании Совета Заводского районного г. Минска объединения профсоюзов.

								Одним из вопросов Совета являлось награждение профсоюзных активистов  и призеров районного  смотра - конкурса на лучшую первичную профсоюзную организацию Заводского района г. Минска.
			 
			 Директор филиала Левшунов Олег Федорович был награжден грамотой за значительный личный вклад в развитие и укрепление профсоюзного движения. </p>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_5.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">08.02.24</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">Открытый диалог по вопросам изменений в Избирательном кодексе Республики Беларусь и электоральной компании 25 февраля 2024 года</a></h2>
						</div>
						<div class="blog-desc">
							<p>08 февраля 2024 в Минском филиале УО «Белорусский торгово-экономический университет потребительской кооперации» состоялся открытый диалог представителей студенчества, преподавателей предметной (цикловой) комиссии правоведения и общественных деятелей по вопросам изменений в Избирательном кодексе Республики Беларусь и электоральной компании 25 февраля 2024 года. Предметом обсуждения стали Законы «Об изменении Избирательного кодекса Республики Беларусь» и «О Всебелорусском народном собрании».
								 Тема, вынесенная на мероприятие, сегодня чрезвычайно важна.
				</p>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_6.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">17.11.2023</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">ПОСЕЩЕНИЕ ВЫСТАВКИ «ПРОДЭКСПО-2023»</a></h2>
						</div>
						<div class="blog-desc">
							<p>15 ноября 2023 года учащиеся групп 21М и 31МБ вместе с преподавателями Красовской О.А. и Ковалевской Н.Н., куратором группы 31МБ Липской Т.А. под руководством заместителя директора по учебно-производственной работе Семёновой И.Е. провели выездное практикоориентированное учебное занятие на базе 29-й Международной специализированной оптовой выставке-ярмарке «ПродЭкспо-2023».
Учащиеся изучили ассортимент товаров предприятий пищевой промышленности Республики Беларусь, России, Вьетнама. Узбекистана, Туркменистана, посетили презентацию продукции ОАО «Молочный Мир» и Института биохимии биологически активных соединений НАН Беларуси, СОАО «Коммунарка», СП ОАО «Спартак», ОАО «Красный пищевик», ОАО «Кондитерская фабрика «Слодыч», ОАО «Минский маргариновый завод», ОАО «Городейский сахарный комбинат», УП «Стародорожский плодовоовощной завод» ОАО «Слуцкий сахарорафинадный комбинат»</p>
						</div>
					</div>
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

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>