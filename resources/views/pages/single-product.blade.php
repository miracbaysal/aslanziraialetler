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
        <title>Ürünlerimiz</title>
    
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
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
@include('layouts.header')
	<!-- end header -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>DAHA YAKINDAN GÖREBİLMENİZ İÇİN</p>
						<h1>Ürün Detayları</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="dist/img/products/{{$product->productImage}}" alt="Ürün Resmi">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{$product->productName}}</h3>
						<p class="single-product-pricing">{{$product->productPrice}}</p>
						<p>{{$product->productDescription}}</p>
						<div class="single-product-form">
							<p><strong>KATEGORİ: </strong>{{$product->category->categoryName}}</p>
						</div>
						<h4>Sosyal Medya:</h4>
						<ul class="product-share">
							<li><a href="https://www.facebook.com/aslanziraialetler/"><i class="fab fa-facebook-f"></i> Facebook</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3> Benzer <span class="red-text">Ürünler</span></h3>
						<p>Görüntülemekte olduğunuz ürünüzüme benzer ürünlerimiz:</p>
					</div>
				</div>
			</div>
			<div class="row">
                @foreach($relatedProducts as $item)
                            <div class="col-lg-4 col-md-6 text-center">
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
			</div>
		</div>
	</div>
	<!-- end more products -->

	{{-- <!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel --> --}}

	<!-- footer -->
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

</body>
</html>