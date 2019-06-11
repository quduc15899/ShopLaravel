@include('frontend.master_header')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/poster1.png" alt="">
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/poster2.png" alt="">
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/poster5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<a href="{{asset('/camera')}}"><h3 class="title">CAMERA</h3></a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										@foreach($cm_new_updates as $cm)
										<div class="product">
											<div class="product-img">
												<img src="{{asset('/lib/storage/app/camera/'.$cm->cm_image)}}" alt="">
												<div class="product-label">
													<span class="sale">{{$cm->cm_promotion}}%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{$cm->cm_type}}</p>
												<h3 class="product-name"><a href="{{asset('/camera/chi-tiet/'.$cm->cm_slug)}}">{{$cm->cm_name}}</a></h3>
												<h4 class="product-price">@if($cm->cm_promotion != 0){{number_format(($cm->cm_price)-($cm->cm_price / $cm->cm_promotion) )}} @else {{number_format($cm->cm_price)}}  @endif VND  <del class="product-old-price">{{number_format($cm->cm_price)}} VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<a href="{{asset('/mua-hang/'.$cm->product.'/'.$cm->cm_slug	)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
											</div>
										</div>
										@endforeach
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>01</h3>
										<span>Ngày</span>
									</div>
								</li>
								<li>
									<div>
										<h3>13</h3>
										<span>Giờ</span>
									</div>
								</li>
								<li>
									<div>
										<h3>32</h3>
										<span>Phút</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Giây</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Laptop cho tuần lễ vàng</h2>
							<p>Giảm giá lên tới 50% </p>
							<a class="primary-btn cta-btn" href="{{asset('/laptop')}}">Mua Sắm ngay</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<a href="{{asset('/laptop')}}"><h3 class="title">LAPTOP</h3></a>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										@foreach($lt_new_updates as $lt)
										<div class="product">
											<div class="product-img">
												<img src="{{asset('/lib/storage/app/laptop/'.$lt->lt_image)}}" alt="">
												<div class="product-label">
													<span class="sale">{{$lt->lt_promotion}}%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{$lt->lt_type}}</p>
												<h3 class="product-name"><a href="{{asset('/laptop/chi-tiet/'.$lt->lt_slug)}}">{{$lt->lt_name}}</a></h3>
												<h4 class="product-price">@if($lt->lt_promotion != 0){{number_format(($lt->lt_price)-($lt->lt_price / $lt->lt_promotion) )}} @else {{number_format($lt->lt_price)}}  @endif VND  <del class="product-old-price">{{number_format($lt->lt_price)}} VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<a href="{{asset('mua-hang/'.$lt->product.'/'.$lt->lt_slug	)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
											</div>
										</div>
										@endforeach
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title">
							<a href="{{asset('/computer')}}"><h3 class="title">MÁY TÍNH ĐỂ BÀN</h3></a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab3" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-3">
										@foreach($cp_new_updates as $cp)
										<div class="product">
											<div class="product-img">
												<img src="{{asset('/lib/storage/app/computer/'.$cp->cp_image)}}" alt="">
												<div class="product-label">
													<span class="sale">{{$cp->cp_promotion}}%</span>
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
												<a href="{{asset('mua-hang/'.$cp->product.'/'.$cp->cp_slug	)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
											</div>
										</div>
										@endforeach
									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
