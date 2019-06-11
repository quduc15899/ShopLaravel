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
							<li class="active">Tìm kiếm</li>
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
					<div id="store" class="col-md-12">
						<div class="row">
							@foreach($items as $cm)
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="@if($cate=='camera')  {{asset('/lib/storage/app/camera/'.$cm->cm_image)}}
										@elseif($cate=='laptop')  {{asset('/lib/storage/app/laptop/'.$cm->lt_image)}}
										 @elseif($cate=='computer') {{asset('/lib/storage/app/computer/'.$cm->cp_image)}} @endif" alt="">
										<div class="product-label">
											<span class="sale">- @if($cate=='camera'){{ $cm->cm_promotion}}
											@elseif($cate=='laptop') {{$cm->lt_promotion}}
											@elseif($cate=='computer') {{$cm->cp_promotion}}
											@endif  %</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">@if($cate=='camera') {{$cm->cm_type}}@elseif($cate=='laptop') {{$cm->lt_type}}
										@elseif($cate=='computer') {{$cm->cp_type}}
										@endif</p>
										<h3 class="product-name"><a href="@if($cate=='camera') {{asset('/camera/chi-tiet/'.$cm->cm_slug)}}
										@elseif($cate=='laptop') {{asset('/laptop/chi-tiet/'.$cm->lt_slug)}}
										@elseif($cate=='computer') {{asset('/computer/chi-tiet/'.$cm->cp_slug)}}
										@endif
											">@if($cate=='camera') {{$cm->cm_name}} @elseif($cate=='laptop') {{$cm->lt_name}}
										@elseif($cate=='computer'){{ $cm->cp_name}}
										@endif</a></h3>
										<h4 class="product-price"> @if($cate=='camera')
											@if($cm->cm_promotion != 0){{number_format(($cm->cm_price)-($cm->cm_price / $cm->cm_promotion) )}} @else {{number_format($cm->cm_price)}}  @endif
											@elseif($cate=='laptop') @if($cm->lt_promotion != 0){{number_format(($cm->lt_price)-($cm->lt_price / $cm->lt_promotion) )}} @else {{number_format($cm->lt_price)}}  @endif
											@elseif($cate=='computer') @if($cm->cp_promotion != 0){{number_format(($cm->cp_price)-($cm->cp_price / $cm->cp_promotion) )}} @else {{number_format($cm->cp_price)}}  @endif
											@endif
										 VND  <del class="product-old-price">@if($cate=='camera') {{number_format($cm->cm_price)}}
										 @elseif($cate=='laptop') {{number_format($cm->lt_price)}}
										 @elseif($cate=='computer') {{number_format($cm->cp_price)}}
										@endif VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<div class="add-to-cart">
										<a href="@if($cate=='camera') {{asset('/mua-hang/'.$cm->product.'/'.$cm->cm_slug)}}
										@elseif($cate=='laptop') {{asset('/mua-hang/'.$cm->product.'/'.$cm->lt_slug)}}
										@elseif($cate=='computer') {{asset('/mua-hang/'.$cm->product.'/'.$cm->cp_slug)}}
										@endif"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
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
