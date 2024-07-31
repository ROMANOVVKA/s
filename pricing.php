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
						<li class="nav-item"><a class="nav-link" href="teachers.php">ПРЕДМЕТНЫ КОМИССИИ</a></li>
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
			<h1>ПРИКАЗЫ ПО СТОИМОСТИ ОБУЧЕНИЯ<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="pricing-box" class="section wb">
        <div class="container">

                    <div class="table-title">
                        <h3>Годовая стоимость платного обучения по дневной форме получения среднего специального образования в зависимости от сроков обучения</h3>
                        </div>
                        <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-left">Наименование товара (работы, услуги) </th>
                        <th class="text-left">Годовая стоимость обучения с 01.04.2024, рублей</th>
                        <th class="text-left">Стоимость обучения на 2023-2024 учебный год, рублей </th>
                        <th class="text-left">по сроку в договоре (по 01.09.2023)</th>
                        <th class="text-left">по 10.09.2023</th>
                        <th class="text-left">по 10.01.2024</th>
                        <th class="text-left">по 10.04.2024</th>
                        <th class="text-left">доплата по 15.05.2024</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                        <td class="text-left">12 месяцев (поступление 2023 г., ССО на базе ОБО, ОСО)</td>
                        <td class="text-left">3540,00</td>
                        <td class="text-left">3323,00</td>
                        <td class="text-left">1267,20</td>
                        <td class="text-left"></td>
                        <td class="text-left">950,40</td>
                        <td class="text-left">950,40</td>
                        <td class="text-left">155,00</td>
                        </tr>
                        <tr>
                        <td class="text-left">12 месяцев (переводные 2,3 курс, ССО на базе ОБО)</td>
                        <td class="text-left">3540,00</td>
                        <td class="text-left">3323,00</td>
                        <td class="text-left"></td>
                        <td class="text-left">1267,20</td>
                        <td class="text-left">950,40</td>
                        <td class="text-left">950,40</td>
                        <td class="text-left">155,00</td>
                        </tr>
                        <tr>
                        <td class="text-left">10 месяцев (выпуск 2024 г., ССО на базе ОБО)</td>
                        <td class="text-left">3160,00</td>
                        <td class="text-left">2943,00</td>
                        <td class="text-left"></td>
                        <td class="text-left">1140,00</td>
                        <td class="text-left">855,00</td>
                        <td class="text-left">855,00</td>
                        <td class="text-left">93,00</td>
                        </tr>
                        <tr>
                        <td class="text-left">10 месяцев (выпуск 2024 г., ССО на базе ОСО) </td>
                        <td class="text-left">3210,00</td>
                        <td class="text-left">2993,00</td>
                        <td class="text-left"></td>
                        <td class="text-left">1160,00</td>
                        <td class="text-left">870,00</td>
                        <td class="text-left">870,00</td>
                        <td class="text-left">93,00</td>
                        </tr>
                        </tbody>
                        </table>
                   


                    <div class="table-title">
                        <P>ㅤ</P>
						<P>ㅤ</P>
                        <h3>Годовая стоимость платного обучения по заочной форме получения среднего специального образования в зависимости от сроков обучения</h3>
                        </div>
                        <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-left">Наименование товара (работы, услуги) </th>
                        <th class="text-left">Годовая стоимость обучения с 01.04.2024, рублей</th>
                        <th class="text-left">Стоимость обучения на 2023-2024 учебный год, рублей </th>
                        <th class="text-left">по сроку в договоре (по 01.09.2023)</th>
                        <th class="text-left">по 10.09.2023</th>
                        <th class="text-left">по 10.01.2024</th>
                        <th class="text-left">доплата по 15.05.2024</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                        <td class="text-left">12 месяцев (поступление 2023 г., ССО на базе ОСО)</td>
                        <td class="text-left">1140,00</td>
                        <td class="text-left">1070,00</td>
                        <td class="text-left">510,00</td>
                        <td class="text-left">ㅤ</td>
                        <td class="text-left">510,00</td>
                        <td class="text-left">50,00</td>
                        </tr>
                        <tr>
                            <td class="text-left">12 месяцев (переводные 2 курс, ССО на базе ОСО)</td>
                            <td class="text-left">1140,00</td>
                            <td class="text-left">1070,00</td>
                            <td class="text-left">ㅤ</td>
                            <td class="text-left">510,00</td>
                            <td class="text-left">510,00</td>
                            <td class="text-left">50,00</td>
                            </tr>
                        <tr>
                        <td class="text-left">8 месяцев (выпуск апрель 2024 г., ССО)</td>
                        <td class="text-left">832,00</td>
                        <td class="text-left">760,25</td>
                        <td class="text-left">ㅤ</td>
                        <td class="text-left">750,00</td>
                        <td class="text-left">ㅤ</td>
                        <td class="text-left">ㅤ</td>
                        </tr>
                        <tr>
                        <td class="text-left">7 месяцев (выпуск март 2024 г., ССО)</td>
                        <td class="text-left">826,00</td>
                        <td class="text-left">739,90</td>
                        <td class="text-left">ㅤ</td>
                        <td class="text-left">1140,00</td>
                        <td class="text-left">855,00</td>
                        <td class="text-left">93,00</td>
                        </tr>
                       
                        </tbody>
                        </table>
                    </div>


                    <div class="table-title">
                        <P>ㅤ</P>
						<P>ㅤ</P>
                        <h3>Стоимость платного обучения по дневной форме получения среднего специального образования для иностранных обучающихся</h3>
                        </div>
                        <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-left">Наименование товара (работы, услуги) </th>
                        <th class="text-left">Стоимость обучения на 2023-2024 учебный год(долл. США)</th>
                        <th class="text-left">по сроку в договоре 15.10.2023 г.(долл. США)</th>
                        <th class="text-left">по 10.01.2024 г.(долл. США)</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                        <td class="text-left">12 месяцев(поступление 2023 г., переводные курсы, ССО на базе ОБО, ОСО)</td>
                        <td class="text-left">1 100,00</td>
                        <td class="text-left">550,00</td>
                        <td class="text-left">550,00</td>
                        </tr>
                       
                       
                        </tbody>
                        </table>
                    </div>


                    <div class="table-title">
                        <P>ㅤ</P>
						<P>ㅤ</P>
                        <h3>Стоимость платного обучения по заочной форме получения среднего специального образования для иностранных обучающихся</h3>
                        </div>
                        <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-left">Наименование товара (работы, услуги) </th>
                        <th class="text-left">Стоимость обучения на 2023-2024 учебный год(долл. США)</th>
                        <th class="text-left">по сроку в договоре 15.10.2023 г.(долл. США)</th>
                        <th class="text-left">по 10.01.2024 г.(долл. США)</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                        <td class="text-left">12 месяцев (поступление 2021г, переводные курсы, выпуск, ССО на базе ОБО, ОСО)</td>
                        <td class="text-left">550,00</td>
                        <td class="text-left">275,00</td>
                        <td class="text-left">275,00</td>
                        </tr>
                        
                        </tbody>
                        </table>
                    </div>
                    <P>ㅤ</P>
                    <P>ㅤ</P>
            </div>
		</div>

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="row">
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