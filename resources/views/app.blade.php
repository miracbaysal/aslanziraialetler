<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

        <title>Aslan Zirai Aletler</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        
</head>
<body>

    @include('layouts.header')


	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle"><span class="red-text">{{$about->aboutTitle}}</span></p>
								<h1>{{$about->description2}}</h1>
								<div class="hero-btns">
									<a href="{{route('products')}}" class="boxed-btn">Ürünlerimiz</a>
									<a href="{{route('contact')}}" class="bordered-btn">İletişim</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle"><span class="red-text">{{$about->aboutTitle}}</span></p>
								<h1>{{$about->description3}}</h1>
								<div class="hero-btns">
									<a href="{{route('products')}}" class="boxed-btn">Ürünlerimiz</a>
									<a href="{{route('contact')}}" class="bordered-btn">İletişim</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle"><span class="red-text">{{$about->aboutTitle}}</span></p>
								<h1>{{$about->description1}}</h1>
								<div class="hero-btns">
									<a href="{{route('products')}}" class="boxed-btn">Ürünlerimiz</a>
									<a href="{{route('contact')}}" class="bordered-btn">İletişim</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Nakliye</h3>
							<p>Türkiye'nin her yerine nakliye konusunda yardım.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Sınırsız Destek</h3>
							<p>Data detaylı bilgi için iletişime geçin</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fa-regular fa-face-smile"></i>
						</div>
						<div class="content">
							<h3>Müşteri Memnuniyeti</h3>
							<p>İstekleriniz doğrultusunda size özel üretim</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="red-text">Ürünlerimiz</span></h3>
						<p>Son derece kaliteli malzeme kullanımı ve müşteri memnuniyeti ile isteğe özel üretim</p>
					</div>
				</div>
			</div>
			<div class="row product-lists">
				@foreach ($product as $item)
					{{-- <div class="col-6 col-md-6 col-lg-4 mb-4 text-center mb-4 {{ $item->category->selflink }}">
						<div class="single-product-item">
							<div class="product-image">
								<a href="{{route('urundetay',$item->id)}}"><img src="dist/img/products/{{$item->productImage}}" alt="Ürün fotoğrafı"></a>
							</div>
							<h3>{{$item->productName}}</h3>
							<p class="product-description"> {{ Str::limit($item->productDescription, 50, '...') }} </p>
							<a href="{{route('urundetay',$item->id)}}" class="cart-btn"><i class="fas fa-info"></i> Ürün Detayları</a>
						</div>
					</div> --}}
					<div class="col-lg-4 col-md-6 text-center {{ $item->category->selflink }}">
						<div class="single-product-item">
							<div class="product-image">
								<a href="{{route('urundetay',$item->id)}}"><img src="dist/img/products/{{$item->productImage}}" alt="Ürün Resmi"></a>
							</div>
							<h3>{{$item->productName}}</h3>
							<p class="product-description text-left pl-4"> {{Str::limit($item->productDescription, 150, '...')}} </p>
							<a href="{{route('urundetay',$item->id)}}" class="cart-btn"><i class="fas fa-info"></i> Detayları gör</a>
						</div>
					</div>
				@endforeach
				<div class="col-lg-8 offset-lg-2 text-center">
					<a href="{{route('products')}}" class="cart-btn">Tümünü Gör </a>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="javascript:void(0)" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
							<i class="fas fa-play"></i>
						</a>
					</div>
				</div>
				<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg">
					  <div class="modal-content bg-transparent border-0">
						<div class="modal-body p-0">
						  <div class="ratio ratio-16x9">
							<video id="myVideo" controls>
								<source src="{{ asset('assets/videos/aslanzirai.mp4') }}" type="video/mp4">
								Tarayıcınız video etiketini desteklemiyor.
							  </video>
							  
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">1990'dan beri</p>
						<h2><span class="red-text">{{$about->aboutTitle}}</span></h2>
						<p>{{$about->aboutDescription}}</p>
						<a href="{{ route('about') }}" class="boxed-btn mt-4">Daha çok bilgi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<div class="banner-text-box"> <!-- 👈 Sarmalayıcı eklendi -->
				<h3>Satışlarımız son hız <br> ve uygun şekilde <br><span class="red-text">Devam etmekte...</span></h3>
				<div class="sale-percent"><span>Hemde <br> sizin</span>Özel<span>isteklerinizle</span></div>
			</div>
            <a href="{{ route('products') }}" class="cart-btn btn-lg">Ürünleri Gör</a>
        </div>
    </section>
	<!-- end shop banner -->




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
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
		<script>
			document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
				const video = document.getElementById('myVideo');
				video.pause();
				video.currentTime = 0;
				});
		</script>
    </body>
	
</html>
