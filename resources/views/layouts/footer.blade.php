

<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Hakkımızda</h2>
						<p>{{$about->aboutDescription}}</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">İletişime Geçin</h2>
						<ul>
							<li>{{$comm->address}}</li>
							<li>{{$comm->email}}</li>
							<li>{{$comm->phone}}</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Sayfalar</h2>
						<ul>
							<li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
							<li><a href="{{ route('about') }}">Hakkımızda</a></li>
							<li><a href="{{ route('products') }}">Ürünler</a></li>
							<li><a href="{{ route('contact') }}">İletişim</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class=" text-center col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/aslanziraialetler/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
