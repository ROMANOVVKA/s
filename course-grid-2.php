<!DOCTYPE html>
<html lang="rus">

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
			<h1>СПЕЦИАЛЬНОСТИ<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_7.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">МАРКЕТИНГ</a></h2>
							</div>
							<div class="course-desc">
								<p>Что делает Маркетолог?
									Исследует, какая продукция будет пользоваться большим спросом и почему, оценивает рынок конкретных товаров и услуг. Проводит тщательный мониторинг отрасли,организует работу интервьюеров, выясняющих предпочтения покупателей. Обрабатывает информацию с помощью специальных компьютерных программ. Составляет подробный отчет с цифрами, графиками, сравнительными характеристиками. Делает прогноз и разрабатывает рекомендации.</p>
							<p>Сколько нужно учиться?</p>
							<p>Дневное обучение:	
							  На основе общего базового образования (после 9 классов) - 2 года 10 мес.	</p>
								
								<p>На основе общего среднего образования (после 11 классов) - 1 год 10 мес.</p>
							
							<p>Заочное обучение:</p>
								На основе общего среднего образования - 2 года 8 мес.</p>
								</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
					
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_8.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">ПРОГРАММИРОВАНИЕ</a></h2>
							</div>
							<div class="blog-desc">
								<p>Программист — одна из самых молодых, постоянно развивающихся и востребованных специальностей. Если вы дружите с математикой, любите технические предметы и обладаете хорошим логическим мышлением, то, возможно, вам стоит рассмотреть для себя эту профессию. </p>
								<p>Сколько нужно учиться?</p>
								<p>Дневное обучение:	
									На основе общего базового образования (после 9 классов) - 3 года 10 мес.							
								</p>
								<P>ㅤ</P>
								<P>ㅤ</P>
								<P>ㅤ</P>
								<P>ㅤ</P>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">				
						</div>
					</div>
                </div><!-- end col -->	
            </div><!-- end row -->
			
			<hr class="hr3"> 
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_9.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">ТОВАРОВЕДЕНИЕ</a></h2>
							</div>
							<div class="course-desc">
								<p>Специалисты по коммерческой деятельности участвуют в организации и осуществлении  процессов  материально - технического обеспечения и сбыта продукции, реализации услуг,  проводят маркетинговые исследования и консультируют по этим вопросам.</p>
								<p>Сколько нужно учиться?</p>
								<p>Дневное обучение:	
									На основе общего базового образования (после 9 классов) - 2 года 10 мес.	</p>
									
									<p>На основе общего среднего образования (после 11 классов) - 1 год 10 мес.</p>
								
								<p>Заочное обучение:</p>
									На основе общего среднего образования - 2 года 8 мес.</p>
						
									<P>ㅤ</P>
									<P>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</P>
						
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
						</div>
					</div>
                </div><!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_10.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">ПРАВОВЕДЕНИЕ</a></h2>
							</div>
							<div class="course-desc">
								<p>Реальная ценность юридического образования заключается в развитии навыков анализа и доказывания, которые являются общими для всех юристов и делают юридическую степень подспорьем также для карьеры в области корпоративного управления, банковского дела, страхования, аудита, мира финансов и государственной службы, включая занятие выборных должностей. </p>
								<p>Сколько нужно учиться?</p>
								<p>Дневное обучение:	
									На основе общего базового образования (после 9 классов) - 2 года 10 мес.	</p>
									
									<p>На основе общего среднего образования (после 11 классов) - 1 год 10 мес.</p>
								
								<p>Заочное обучение:</p>
									На основе общего среднего образования - 2 года 8 мес.
								</p>
									<P>ㅤ</P>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
						</div>
					</div>
                </div><!-- end col -->
			</div><!-- end row -->
			
			<hr class="hr3"> 
			
            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_11.jpg" alt="" class="img-fluid">
						</div>		
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">ЛОГИСТИКА</a></h2>
							</div>
							<div class="course-desc">
								<p>В настоящее время логистика стала самостоятельным бизнесом, в котором задействованы тысячи сотрудников, а также она является неотъемлемой частью крупных компаний. Глобальные затраты на логистику составляют около 15% мирового ВВП, что составляет свыше семи триллионов долларов. Хотя логистика совсем недавно появилась на рынке страны, тем не менее, она пользуется огромным спросом у работодателей.</p>
								<p>Сколько нужно учиться?</p>
								<p>Дневное обучение:	
									На основе общего базового образования (после 9 классов) - 2 года 10 мес.	</p>
									
									<p>На основе общего среднего образования (после 11 классов) - 1 год 10 мес.</p>
								
								<p>Заочное обучение:</p>
									На основе общего среднего образования - 2 года 8 мес.</p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">

						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_12.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">ЭКОНОМИЧЕСКАЯ ДЕЯТЕЛЬНОСТЬ</a></h2>
							</div>
							<div class="course-desc">
								<p>Техник-экономист – это специалист в сфере экономической деятельности на предприятиях, в объединениях, учреждениях и организациях независимо от форм собственности и подчиненности.</p>
								<p>Сколько нужно учиться?</p>
								
								<p>Дневное обучение:	
									На основе общего базового образования (после 9 классов) - 2 года 10 мес.	</p>
									<P>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</P>
									<P>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</P>
									<P>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</P>
									<P>ㅤㅤㅤ</P>

							</div>	
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
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