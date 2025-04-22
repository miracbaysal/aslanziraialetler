<style>
	html, body {
    margin: 0;
    padding: 0;
}

.top-header-area {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.topbar {
    margin-top: 0 !important;
}
</style>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<!-- Sol: Sosyal Medya -->
					<div class="col-md-6 col-12 text-md-left text-center">
						<div class="social-icons">
							<a href="https://www.facebook.com/aslanziraialetler/" target="_blank" style="color:#333; margin-right:10px;"><i class="fab fa-facebook-f"></i></a>
							<a href="#" target="_blank" style="color:#333;"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<!-- Sağ: Telefon -->
					<div class="col-md-6 col-12 text-md-right text-center">
						<span class="contact-info font-weight-bold">Bize Ulaşın: {{$comm->phone}}</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap pt-3">
						
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('anasayfa') }}">
								<img src="assets/img/logo.png" height="75" style="object-fit: contain;">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
								<li><a href="{{ route('products') }}">Ürünlerimiz</a></li>
								<li><a href="{{ route('about') }}">Hakkımızda</a></li>
								<li><a href="{{ route('contact') }}">İletişim</a></li>
								<li></li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	