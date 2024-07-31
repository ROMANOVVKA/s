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
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Минский филиал </strong> БТЭУ ПК</h2>
										<p class="lead">На рынке образовательных услуг с 1957 года </p>
											<a href="#end" class="hover-btn-new"><span>Наши контакты</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#med" class="hover-btn-new"><span>Читай больше</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Минский филиал <strong>БТЭУ ПК</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">С нами у вас будет образование! </p>
											<a href="#end" class="hover-btn-new"><span>Наши контакты</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#med" class="hover-btn-new"><span>Читай больше</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Выбирай нас, </strong>     БТЭУ ПК</h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
											<a href="#end" class="hover-btn-new"><span>Наши контакты</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#med" class="hover-btn-new"><span>Читай больше</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
            </div>
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <!-------------------------------------------------------------------------------------------------------------->
                        <a href="schedule.php" class="hover-btn-new orange"><span>Расписание</span></a>
                    </div>
                    <!-------------------------------------------------------------------------------------------------------------->
                </div>
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>ПОЧЕМУ МИНСКИЙ ФИЛИАЛ?</h2>
                        <p>64 года на рынке образовательных услуг!

                           <p>Высокие цели, смелое, профессиональное решение задач  и весомость результатов позволяют Минскому филиалу Белорусского торгово-экономического университета потребительской кооперации занимать топовое место в ряду учебных заведений страны.</p> 
                            
                           
                            
                            Тысячи выпускников говорят педагогам «Спасибо» за умелую организацию образовательной деятельности и прекрасную профессиональную подготовку.</p>

                        <p>Выбирая нас, вы выбираете для себя достойное будущее!</p>
                    </div>
                </div>
				
            </div>
        </div>
    </div>

    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div id="med">
                <div class="col-md-8 offset-md-2">
                    <h3>История Минского филиала БТЭУ ПК</h3>
                    </div>
            </div>
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>1957</h2>
								<p>1 октября начал работу Минский кооперативный техникум Белкоопсоюза с обучением на основе  неполного среднего (7 классов) и среднего образования. Директором назначен Попов Василий Иванович.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>1960-1968</h2>
								<p>на базе техникума осуществляли деятельность Республиканский заочный кооперативный техникум и Учебно-консультационный пункт для студентов-заочников Московского кооперативного института Центросоюза.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>1974 </h2>
								<p>введено в действие общежитие № 2 на 250 мест.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>1991 </h2>
								<p>после двух выпусков учащихся  ПТУ на основе базового образования (1987-1990 и 1988–1991 гг.) прекратилось обучение на основе базового образования в училище и в техникуме.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2000</h2>
								<p>Учебно-производственный комплекс реорганизован в Учреждение образования «Минский торговый колледж» Белкоопсоюза. Училище стало первым, колледж вторым уровнем образования.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2012 </h2>
								<p>колледж награжден очередным Почетным знаком Белкоопсоюза. вычислительный центр  преобразован в отдел информационных технологий. </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2016</h2>
								<p>колледж награжден пятым Почетным знаком Белкоопсоюза. учреждение образования «Минский торговый колледж» Белкоопсоюза присоединен к учреждению образования «БТЭУ ПК» в качестве обособленного подразделения.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2021</h2>
								<p>Открытие белорусско – российского креативного кластера. Целью создания креативного кластера является интеграция в сферах образования, науки и культуры молодежи Российской Федерации и Республики Беларусь, укрепление взаимоотношений, обмен опытом, реализация совместных инициатив</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		</div>
	</section>

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