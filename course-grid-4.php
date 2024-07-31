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
			<h1>ПРАВИЛА ПРИЁМА ДОКУМЕНТОВ</div>
	</div>
	<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-left">
            <div class="col-md-8 offset-md-2">
                <ol style="font-size: 20px;">
                    <li><a href="http://mtk-bks.by/_file/_doc/porpr23.pdf"><strong>Порядок приема в учреждения образования потребительской кооперации в 2023 году</strong></a></li>
                    <li><a href="http://mtk-bks.by/_file/_pdf/pravilapriema.pdf"><strong>Правила приема</strong></a></li>
										<li><strong> Учебные заведения Белкоопсоюза:</strong></a></li> 	 </ol>
										<ul style="font-size: 20px;">
											<li><a href="http://www.i-bteu.by/">УО «Белорусский торгово-экономический университет потребительской кооперации»</a></li>
											<li><a href="http://www.bartc.by/">УО «Барановичский технологический колледж» Белкоопсоюза</a></li>
											<li><a href="http://gtec-bks.by/">УО «Гомельский торгово-экономический колледж» Белкоопсоюза</a></li>
											<li><a href="https://gkeu.bks.by/">УО «Гродненский колледж экономики и управления» Белкоопсоюза</a></li>
											<li><a href="https://mtec.by/ru/">УО «Молодечненский торгово-экономический колледж» Белкоопсоюза</a></li>
											<li><a href="http://mogtk-bks.by/">Филиал УО «Белорусский торгово-экономический университет потребительской кооперации» «Могилевский торговый колледж»</a></li>
										</ul>
										
										
            </div>
        </div>
    </div>
</div>


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