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
							<li class="active">Liên Hệ</li>
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
						<form class="billing-details" >
							<div class="section-title" >
								<h3 class="title">THÔNG TIN LIÊN HỆ</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Tên của bạn">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="number" name="phone" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<input type="submit" class="btn" style="border-radius:5px;background-color:#4AC4FA">
							</div>
						</form>
					</div>
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">ABOUT US</h3>
						</div>
						<div class="order-summary">
						<div class="order-products">
								<div class="order-col">
									<div><strong>Địa chỉ</strong></div>
									<div>141 Chiến Thắng , Tân Triều , Thanh Trì Hà Nội</div>
								</div>
								<div class="order-col">
									<div><strong>Điện thoại</strong></div>
									<div>0935 999 999</div>
								</div>
								<div class="order-col">
									<div><strong>Mail</strong></div>
									<div>sale@eshop.com</div>
								</div>
							</div>
						</div>

					</div>
				</div>

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
