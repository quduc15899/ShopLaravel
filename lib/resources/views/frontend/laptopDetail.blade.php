@include('frontend.master_header')
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{asset('/')}}">Home</a></li>
							<li class="active">Chi tiết sản phẩm</li>
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('lib/storage/app/laptop/'.$laptop->lt_image)}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$laptop->lt_name}}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">@if($laptop->lt_promotion != 0){{number_format(($laptop->lt_price)-($laptop->lt_price / $laptop->lt_promotion) )}} @else {{number_format($laptop->lt_price)}}  @endif VND  <del class="product-old-price">{{number_format($laptop->lt_price)}} VND</del></h3>
								<span class="product-available">@if($laptop->lt_status == 0) Còn hàng @else Hết hàng @endif</span>
							</div>
							<p>{!! $laptop->lt_description !!}</p>

							<div class="add-to-cart">
								<a href="{{asset('/mua-hang/'.$laptop->product.'/'.$laptop->lt_slug	)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
							</div>
							<ul class="product-links">
								<li>Loại sản phẩm:</li>
								<li><a href="{{asset('laptop/'.$laptop->lt_type_slug)}}">{{$laptop->lt_type}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
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
