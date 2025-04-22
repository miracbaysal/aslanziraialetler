<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>İletişim</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	@include('layouts.header')

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>7/24 DESTEK</p>
						<h1>İLETİŞİME GEÇİN</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Sorunuz mu var?</h2>
						<p>Sorunuz hakkında bize bir mesaj bırakmak için lütfen aşağıdaki alanı doldurun. En kısa zamanda size geri dönüş yapalım.</p>
						<p><h6><span class="red-text">Hatırlatma:</span></h6> Size sorunsuz şekilde ulaşabilmemiz için lütfen Telefon numaranızı doğru girdiğinizden emin olun.</p>
					</div>
				 	<div id="form_status"></div>
					{{-- HATA MESAJLARI --}}
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
					<div class="contact-form">
						<form action="{{route('admin.mesajlar.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
							<p>
								<input type="text" placeholder="İsim" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Telefon" name="phone" id="phone">
								<input type="text" placeholder="Konu" name="subject" id="subject">
							</p>
							<p>
								<textarea name="message" id="Mesaj" cols="30" rows="10" placeholder="Mesajınız"></textarea>
							</p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p>
								<input type="submit" value="Gönder">
							</p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Adres</h4>
							<p>{{$comm->address}}</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Çalışma saatleri</h4>
							<p>{{$comm->workingHours}} </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> İletişim</h4>
							<p>
								Telefon: <a href="tel:{{$comm->phone}}">{{$comm->phone}}</a><br>
								E-mail: <a href="mailto:{{$comm->email}}">{{$comm->email}}</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Yerimizi Bulun</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe 
			src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2999.457046081741!2d36.737877568669674!3d41.25538352811856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE1JzE5LjQiTiAzNsKwNDQnMjIuMiJF!5e0!3m2!1str!2str!4v1744833122402!5m2!1str!2str" 
			width="600" 
			height="450" 
			style="border:0;" 
			allowfullscreen="" 
			loading="lazy" 
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	</div>
	<!-- end google map section -->


	@include('layouts.footer')
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>
</html>