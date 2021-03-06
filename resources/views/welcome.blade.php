<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<title>UJIKOM 2019</title>
  <link href="{{ asset('images/logo.png') }}" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
        <img class="img-fluid mb-5 d-block mx-auto" src="images/smk.png" alt="">
					<h1 class="wow fadeIn" data-wow-duration="4s">Sarana Prasarana <br> SMK</h1>
					<p class="text-white">
						kamu bisa meminjam dan mengetahui sarana prasarana yang dimiliki Sekolah mu. bahkan kamu pun boleh memberikan 
						atau menambah fasilitas yang dimiliki sekolah.
					</p>

					<div class="input-wrap">
            @if( auth()->check() )
            <a href="signout" class="primary-btn">LOGOUT</a>
            @else
            <a href="signin" class="primary-btn">LOGIN</a>
            @endif
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- End Banner Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>