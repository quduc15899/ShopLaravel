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
							<li class="active">GIỎ HÀNG</li>
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

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Nhập thông tin của bạn</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Điện thoại">
							</div>
						</div>
						<div class="order-notes">
							<textarea class="input" placeholder="Ghi chú"></textarea>
						</div>
					</div>
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Giỏ hàng của bạn</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Sản phẩm</strong></div>
								<div><strong>Tiền</strong></div>
							</div>
							<div class="order-products">
								@foreach($carts as $cart)
								<div class="order-col">
									<div>{{$cart->cart_name}}</div>
									<div>{{number_format($cart->cart_price)}}</div>
								</div>
								@endforeach
							</div>
							<div class="order-col">
								<div>Phí Ship</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>Tổng cộng</strong></div>
								<div><strong class="order-total">{{number_format($cart_tinh_tien)}} VND</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label>
									<span></span>
									Thanh toán  ngay khi mua hàng
								</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label>
									<span></span>
									Thanh toán qua thẻ
								</label>
							</div>
						</div>
						<a href="{{'/'}}" class="primary-btn order-submit">Thanh toán</a>
					</div>
					<!-- /Order Details -->
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
