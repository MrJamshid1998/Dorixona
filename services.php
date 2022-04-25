<!DOCTYPE html>
<html lang="en">
<head>
<title>Dorixona</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="index.html">Asosiy</a></li>
									<li><a href="services.php">Dori buyurtma berish</a></li>
									<li><a href="contact.html">Aloqa</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">Dori<span>xona</span></div>
										<div class="logo_box">+</div>
									</div>
									<div class="logo_sub">Dorixona savdosi</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Asosiy</a></li>
					<li class="menu_item menu_mm"><a href="services.php">Dori buyurtma berish</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Aloqa</a></li>
					<li class="menu_item menu_mm"><a href="news.html">Kirish</a></li>
				</ul>
			</div>
			<div class="menu_extra">
				<div class="menu_emergencies">Telefon: +998 90 123 45 67</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>Doriga</span> buyurtma berish</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Asosiy</a></li>
									<li>Doriga buyurtma berish</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Doriga buyurtma berish</h2></div>
				</div>
			</div>
			<div class="row services_row">
				<?php
					require_once('db.php');
				?>
				<!-- Service -->
				<div class="col-lg-12 form_col">
					<div class="services_form_container">
						<div class="row">
						<?php
							$result = mysqli_query($link, "SELECT * FROM dorilar");
							while($row = mysqli_fetch_array($result)){
						?>
						<div class="col-md-4 border p-2 text-center">
							<form action="doriSotish.php" method="post">
								<input type="hidden" name="dori_id" value="<?php echo $row[0]?>">
								<img width="300px" height="300px" src="<?php echo $row[4] ?>" alt="<?php echo $row[1]?>" />
								<h1><?php echo $row[1]?></h1>
								<h2>Narxi <?php echo $row[2]?></h2>
								<input type="hidden" name="narxi" value="<?php echo $row[2]?>">
								<p><?php echo $row[3]?></p>
								<input type="number" required name="soni" class="form-control" placeholder="Mahsulot sonini kiriting."/>
								<button type="submit" class="m-2 btn-lg w-75 btn btn-success">Sotish</button>
							</form>
						</div>
						<?php
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_container">
			<div class="container">
				<div class="row">
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo_container">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center" >
											<div class="logo_text">Dori<span>xona</span></div>
											<div class="logo_box">+</div>
										</div>
										<div class="logo_sub">Dorixona savdosi</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<h2 align="center">Yetkazib berish</h2>
								<p> <br /> Uyda o`tirgan holda biz bilan bog`lanib doringizni oling.</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+998 91 472 44 62</span></li>
								<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>bahodir.shoymardonov@gmail.com</span></li>
								<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Buxoro viloyati, Buxoro shahar, Markaziy dorixona.</span></li>
							</ul>
						</div>
					</div>

					<!-- Footer - Links -->
					<div class="col-lg-4 footer_col">
						<div class="footer_links footer_column">
							<div class="footer_title">Menu</div>
							<ul>
								<li><a href="index.html">Asosiy</a></li>
								<li><a href="services.php">Dori buyurtma berish</a></li>
								<li><a href="contact.html">Aloqa</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer - News -->
					<div class="col-lg-4 footer_col">
						<div class="footer_news footer_column">
							<div class="footer_title">Yangiliklar:</div>
								<iframe src="https://www.xmed.uz" width="100%" height="300px"frameborder="0"></iframe>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Barcha xizmatlar litsenziyalangan. <a href="https://bootstraptema.ru/stuff/templates_bootstrap/1" target="_blank">Bootstrap</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="dribbble.com"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="telegram.com"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
									<li><a href="linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>