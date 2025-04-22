@php
  use Illuminate\Support\Str;
@endphp  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Ürünler</title>

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

<style>
	@media (max-width: 576px) {
  .product-card {
    position: static !important;
    width: 100% !important;
  }

  .product-photo {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    display: block !important;
  }

  .product-image {
    height: 160px !important;
  }
}


</style>
</head>



<body>
	@include('layouts.header')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>İSTEĞE ÖZEL ÜRETİLEN</p>
						<h1>ÜRÜNLERİMİZ</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
		<div class="product-section mt-150 mb-150">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="product-filters">
							<ul>
								<li class="{{ request()->routeIs('products') ? 'active' : '' }}">
									<a href="{{ route('products') }}">Tüm Ürünler</a>
								</li>
								@foreach ($categories as $cat)
									<li class="{{ isset($category) && $category->id == $cat->id ? 'active' : '' }}">
										<a href="{{ route('kategori', $cat->selflink) }}">{{ $cat->categoryName }}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="row product-lists">
					@foreach ($product as $item)
						{{-- <div class="col-6 col-md-6 col-lg-4 text-center product-card {{ $item->category->selflink }}">
							<div class="single-product-item">
								<div class="product-image">
									<a href="{{route('urundetay',$item->id)}}"><img class="product-photo" src="dist/img/products/{{$item->productImage}}" alt="Ürün fotoğrafı"></a>
								</div>
								<h3>{{Str::limit($item->productName, 20, '...')}}</h3>
								<p class="product-description text-left pl-4"> {{Str::limit($item->productDescription, 50, '...')}} </p>
								<a href="{{route('urundetay',$item->id)}}" class="cart-btn"><i class="fas fa-info"></i> Ürün Detayları</a>
							</div>
						</div> --}}
						<div class="col-lg-4 col-md-6 text-center d-flex {{ $item->category->selflink }}">
							<div class="single-product-item w-100 d-flex flex-column">
								<div class="product-image">
									<a href="{{route('urundetay',$item->id)}}"><img src="dist/img/products/{{$item->productImage}}" alt="Ürün Resmi"></a>
								</div>
								<h3>{{$item->productName}}</h3>
								<p class="product-description text-left pl-4"> {{Str::limit($item->productDescription, 150, '...')}} </p>
								<a href="{{route('urundetay',$item->id)}}" class="cart-btn"><i class="fas fa-info"></i> Detayları gör</a>
							</div>
						</div>
					@endforeach
				</div>

				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="pagination-wrap">
							<ul>
								<!-- Sayfalama Bağlantıları -->
								<li>@if ($product->currentPage() > 1)<a href="{{ $product->previousPageUrl() }}">Geri</a>@endif</li>
								
								@for ($i = 1; $i <= $product->lastPage(); $i++)
									<li><a class="{{ $i == $product->currentPage() ? 'active' : '' }}" href="{{ $product->url($i) }}">{{ $i }}</a></li>
								@endfor
								
								<li>@if ($product->hasMorePages())<a href="{{ $product->nextPageUrl() }}">İleri</a>@endif</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- end products -->


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
	<script>
		function limitProductCards() {
			const productCards = document.querySelectorAll(".product-lists > .product-card");
	
			const isMobile = window.innerWidth < 576;
			const maxItems = isMobile ? 10 : 9;
	
			productCards.forEach((card, index) => {
				card.style.display = index < maxItems ? "block" : "none";
			});
		}
	
		// Sayfa yüklenince çalıştır
		window.addEventListener("load", limitProductCards);
	
		// Ekran boyutu değiştiğinde tekrar uygula
		window.addEventListener("resize", limitProductCards);
		
		
	</script>
</body>
</html>