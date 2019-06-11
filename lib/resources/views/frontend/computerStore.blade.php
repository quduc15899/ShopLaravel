@include('frontend.master_header')
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{asset('/')}}">Trang chủ</a></li>
							<li class="active">Computer</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">LOẠI SẢN PHẨM</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<a href="{{asset('/computer')}}">
									<label>
										<span></span>
										Tất cả
									</label>
									</a>
								</div>

								<div class="input-checkbox">
									<a href="{{asset('/computer/dell')}}">
									<label>
										<span></span>
										Dell
									</label>
									</a>
								</div>
								<div class="input-checkbox">
									<a href="{{asset('/computer/hp')}}">
									<label>
										<span></span>
										hp
									</label>
									</a>
								</div>
							</div>
						</div>
						<div class="aside">
							<h3 class="aside-title">BANNER QUẢNG CÁO</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="" alt="">
								</div>

							</div>
						</div>
					</div>
					<div id="store" class="col-md-9">
						<div class="row">
							@foreach($computers as $cp)
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset('/lib/storage/app/computer/'.$cp->cp_image)}}" alt="">
										<div class="product-label">
											<span class="sale">-{{$cp->cp_promotion}}%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{$cp->cp_type}}</p>
										<h3 class="product-name"><a href="{{asset('/computer/chi-tiet/'.$cp->cp_slug)}}">{{$cp->cp_name}}</a></h3>
										<h4 class="product-price">@if($cp->cp_promotion != 0){{number_format(($cp->cp_price)-($cp->cp_price / $cp->cp_promotion) )}} @else {{number_format($cp->cp_price)}}  @endif VND  <del class="product-old-price">{{number_format($cp->cp_price)}} VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<div class="add-to-cart">
										<a href="{{asset('/mua-hang/'.$cp->product.'/'.$cp->cp_slug	)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>

		</div>
@include('frontend.master_footer')

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
