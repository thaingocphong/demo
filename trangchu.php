<!DOCTYPE html>
<html lang="en">
<head>
<title>PTAir Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="PTair Booking, Flight,Booking,lmao" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


    <script>
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/png" href="images/lmao.ico"/>
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">

	
</head>
<body>
<?php
session_start();
?>
<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<ul class="d-lg-flex header-w3_pvt">
					<li>
						<span class="fa fa-phone"></span>
						<p class="d-inline">HotLine: 0123456712 </p>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					<li class="mr-lg-3">
						<span class=""><span class="fa fa-clock-o"></span>T2 - T6 : 8:00SA đến 9:00CH</span>
					</li>
					<li class="">
						<span class=""><span class="fa fa-clock-o"></span>T7 & CN : 9:00SA đến 6:00CH</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-3">
	<div class="container">
			<div id="logo">
				<h1> <a href="trangchu.php"><span class="fa fa-plane" aria-hidden="true"></span> PTAIR</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="trangchu.php">Trang chủ</a></li>
				<li class=""><a href="chuyenbay.php">Chuyến Bay</a></li>
				<?php
				if (isset($_SESSION["username"]))
					echo "<li class=''><a href='xemlscb.php'>Lịch sử đặt vé</a></li>";
				?>
			</ul>
			
			
			<?php
			if (isset($_SESSION["username"]))
			{
				echo "<div class='login-icon ml-2'>
				<a class='user' href='ticket.php'> Đặt Vé Ngay</a>
			</div>";
				echo "<a href='#'style='color:black'>"."Xin Chào ".'</a>'."<a href='#' style='color:yellow'><u>".$_SESSION["username"]."</a></u> '<a href = 'logout.php' style='color:red'>(logout)</a>";
			}else{
				echo "<div class='login-icon1 ml-2'>
					<a class='user' href='login.php'><span class='fas fa-user'></span>Đăng Nhập</a>
				</div>";
				echo "<div class='login-icon1 ml-2'>
					<a class='user' href='register.php'><span class='fas fa-user'></span>Đăng ký</a>
				</div>";
				}
			?>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->

<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<h2 class="heading text-center mb-sm-5 mb-4">Tin Tức Mới </h2>
				<div class="row">
					<div class="col-lg-6 p-0">
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="mt-md-4"><span>Vé máy bay giá rẻ </span> tháng 3</h3>
										<p class="w3ls_pvt-title my-3">Tháng 3 này là tháng kỷ niệm <b>10 năm</b> thành lập của công ty, chúng tôi trân trọng mời bạn cùng chia sẻ niềm vui
										này.Chúng tôi xin cảm ơn sự ủng hộ từ bạn khi đã tin tưởng công ty chúng tôi trong suốt
											thời gian qua</br>
										<i>Cùng tận hưởng chương trình khuyến mãi với rất nhiều ưu đãi </i></p>
										<h5>Giá vé chỉ từ 50.000đ</h5>
										<a href="#" class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="mt-md-4"><span>Chuyến bay đa dạng</span></h3>
										<p class="w3ls_pvt-title my-3">Chúng tôi cung cấp nhiều chuyến bay cùng với nhiều
										loại vé khác nhau đi các thành phố khác nhau trong nước. Cùng với đó có nhiều loại
										máy bay khác nhau mà chúng tôi vừa mới nhập về nhằm cung cấp dịch vụ mới nhất cho khách hàng.</p>
										<a href="#" class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
										
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="mt-md-4"><span>Khách hàng</span> thân thiết</h3>
										<p class="w3ls_pvt-title my-3">Cảm ơn bạn đã tin tưởng sử dụng dịch vụ của chúng tôi, để cảm ơn cho việc đó
										chúng tôi sẽ trao cơ hội cho các khách hàng thân thiết với hơn 20 lần sử dụng dịch vụ đặt vé có cơ hội
										trúng được một chuyến đi du lịch Hàn Quốc hoàn toàn miễn phí, cùng với đó là:<b style="color:red"></br> 3 giải Iphone XS Max</br>
										5 giải xe thể thao Winner</br>
										10 giải miễn phí 1 vé trong nước</br>
										và hơn 50 giải nhận được áo thun có in hình PTAIR cùng với lời cảm ơn</b>	</p>
										<a href="#" class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
										
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8">
						<div class="container">
							<div id="myCarousel" class="carousel slide border" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="images/vere.jpg" alt="ticket" style="height:400px">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/phongcanh.jpg" alt="phongcanh" style="height:400px">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/maybay.jpg" alt="plane" style="height:400px">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/1.jpg" alt="ticket" style="height:400px">
									</div>
								</div>
							</div>
						</div>
						<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4"></br>Về chúng tôi</h2>
		<div class="row">
			<div class="col-lg-8">
				<h4 class="about-left">Phục vụ cho khách hàng tốt là tiêu chí hàng đầu</h4>
				<p class="mt-sm-4 mt-3">Chúng tôi muốn giới thiệu cho bạn một chút về chúng tôi – chúng tôi là ai,
					chúng tôi làm gì và những gì là quan trọng đối với chúng tôi </br>
					Có thể, bạn biết đến chúng tôi như hãng hàng không nổi tiếng về cung cấp giá vé rẻ.
					 Nhưng bạn có biết rằng mỗi tuần chúng tôi thực hiện hơn 3,000 chuyến bay đến hơn 10 điểm đến – tại Việt Nam
					 hay chúng tôi đã giúp quyên góp được hơn 5 tỷ cho cộng đồng SOS Việt Nam?
				<b>Chúng tôi luôn để sự thoải mái, sự tin cậy của khách hàng làm đầu, mọi dịch vụ
				sinh ra đều phải tốt nhất cho khách hàng</b></p>
				<div class="row mt-4">
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-plane"></span>
							</span>
							<a href="#" style = "color:red">Tập Đoàn PTAIR</a>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-user-circle"></span>
							</span>
							<a href="#" style = "color:red">&nbsp&nbspCộng Đồng</a>
						</div>
					</div>
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-newspaper-o"></span>
							</span>
							<a href="#" style = "color:red">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTin Tức</a>
						</div>
					</div>
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-handshake-o"></span>
							</span>
							<a href="#" style = "color:red">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHợp Tác</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 dental">
				<img src="images/tooth.png" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->


<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3"><span class="fa fa-plane"></span> PTAIR</h4>
				<p class="mb-3">Khách hàng là thượng đế. Chữ tín lên hàng đầu</p>
				<h5>Được tin tưởng bởi<span> hơn 500 khách hàng</span> </h5>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3">Địa chỉ</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>K21 CNTT, TDT <span>LTWVUD</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +123456712 </p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">PTairsupport@tdt.com</a></p>
			</div>
			<div class="col-lg-2 col-sm-6 mb-sm-0 mb-4">
				<h4 class="mb-sm-4 mb-3">Xem thêm</h4>
				<ul>
					<li><a href="#">Quy định và điều khoản</a></li>
					<li class="my-2"><a href="#">Hỗ trợ</a></li>
					<li><a href="#">Đại lí</a></li>
					<li class="mt-2"><a href="#">Chính sách bảo mật</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-sm-4 mb-3">Hãy đặt niềm tin ở PTAIR</h4>
				<p class="mb-3">Nhập email để nhận thông báo mới</p>
				<form action="#" method="post" class="d-flex">
					<input type="email" id="email" name="EMAIL" placeholder="Nhập email vào đây" required="">
					<button type="submit" class="btn">Gửi</button>
				</form>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

</body>
</html>