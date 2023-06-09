<div id="header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href=""><i class="fa fa-home"></i>  10/9 Đường số 11 Bình Thọ, Thủ Đức</a></li>
					<li><a href=""><i class="fa fa-phone"></i> 0799 465 582 </a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					{{-- <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li> --}}
					{{-- kiem tra dnag nhap --}}
					@if(Auth::check())
					<li><a href="">Chào bạn {{Auth::user()->full_name}}</a></li>
					<li><a href="{{route('logout')}}">Đăng xuất</a></li>
					@else
					<li><a href="{{route('signin')}}" style="font-family: bold; font-size: 15px; color: blue" >
						<img src="source/image/slide/user copy.png" alt="" style="padding-top: 10px">
					</a></li>
					<li><a href="{{route('login')}}" style="font-family: bold; font-size: 15px; color: blue">
						<img src="source/image/slide/1.png" alt="" style="padding-top: 10px">
					</a></li>
					@endif
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="index.html" id="logo"><img src="source/image/slide/logo.jpg" width="150px" alt="" height="80px"></a>
			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="{{route('search')}}" style="position: relative;
					width: 443px;
					display: inline-block;
					margin-right: 250px;
					border-color: coral">
						<input style="border-radius: 14px; padding: 0 43px; border-color: coral" type="text" value="" name="key" id="key" placeholder="Nhập từ khóa..." />
						<button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					{{-- @if (Session::has('cart')) --}}
					<div class="cart">
						<div class="beta-select"><i class="fa fa-shopping-cart"></i>Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif)<i class="fa fa-chevron-down"></i></div>
						@if(Session::has('cart'))
						<div class="beta-dropdown cart-body">
							{{-- LOI 7/3 --}}
							{{-- Kiem tra co gio hang hay khong --}}
							{{-- @if(Session::has('cart')) --}}
							@foreach($product_cart as $product)	
							<div class="cart-item">
								<a class="cart-item-delete" href="{{route('xoagiohang', $product['item']['id'])}}"><i class="fa fa-times"></i></a>
								<div class="media">
									<a class="pull-left" href="#"><img src="source//image/product/{{$product['item']['image']}}" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">{{$product['item']['name']}}</span>
										<span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}} @endif</span></span>
									</div>
								</div>
							</div>
							@endforeach
			
							<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}} @endif Đồng </span></div>
								<div class="clearfix"></div>

								<div class="center">
									<div class="space10">&nbsp;</div>
									<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .cart -->
					@endif
				</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #b2b2b2; font-family: bold;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
					<li><a href="#">Loại sản phẩm</a>
						<ul class="sub-menu">
							@foreach($loai_sp as $loai)
							<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
					<li><a href="{{route('lienhe')}}">Liên hệ</a></li>

					{{-- <li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
							<img class="YOUR_FB_CSS_STYLING_CLASS" src="source/image/slide/face.png" width="22px" height="22px" alt="Share on Facebook">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
							<img class="YOUR_FB_CSS_STYLING_CLASS" src="source/image/slide/tikrpks.png" width="22px" height="22px" alt="Share on Facebook">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
							<img class="YOUR_FB_CSS_STYLING_CLASS" src="source/image/slide/telegram.png" width="22px" height="22px" alt="Share on Facebook">
						</a>
					</li> --}}
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->