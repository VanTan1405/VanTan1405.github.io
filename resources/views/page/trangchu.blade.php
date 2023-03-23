@extends('master')
@section('content')
<style>
    /* *{margin: 0;padding: 0;}

body {
	font-family: sans-serif;
	background-color: #333;
	height: 100vh;
	overflow: hidden;
} */

.container1 {
	display: flex;
	width: 80%;
	height: 100%;
	margin: auto;
	justify-content: space-around;
	position: relative;
}

.container1 .cards {
	display: flex;
	align-items: center;
	width: 250px;
	height: 350px;
	background-color: #185399;
	margin: auto;
	position: relative;
	cursor: pointer;
	box-shadow: 0 0 10px #185399;
}

.cards .card h2{
	text-align: center;
	color: white;
}

.cards .card p {
	text-align: center;
	font-size: 14px;
	color: white;
	padding: 20px;
	box-sizing: border-box;
}

.cards .number {
	position: absolute;
	bottom: 0;
	width: 250px;
	height: 100%;
	background-color: white;
	transition: .5s all;
	text-align: center;
}

.cards .number h1{
	line-height: 350px;
	background-image: url(https://imgur.com/ergqH1F.png);
	background-size: cover;
	background-position: -60px center;
	color: white;
	font-size: 80px;
}

.cards:hover .number h1 {
	transition: .3s all;
	opacity: 0;
}

.cards:hover .number {
	transition: .4s all;
	height: 0;
	width: 0;
}
.anh{
	width: 100px;
	height: 100px;
}
.add-to-cart{
    background-color: #3a5c83;
    height: 35px;
    width: 40px;
    text-align: center;
    display: inline-block;
    margin-right: 10px;
}
</style>
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    @foreach($slide as $sl)
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" 
                                data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                            </div>
                        </div>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<br>
<br>
<h3 style="align-items: center; text-align: center; font-weight: bold; color: #1c1c1c">Sản phẩm bán chạy</h3>
<br><br>
<div class="container1" style="height: 82%;">
    <div class="cards">
        <div class="card">
{{-- <br><br> --}}
            <img src="source/image/product/banh kem sinh nhat.jpg" alt="" style="width: 100%;height: 355px;">
            <div class="number">
                <h1>1</h1>
            </div>
        </div>
    </div>

    <div class="cards">
        <div class="card">
            <img src="source/image/product/banhkem.jpg" alt="" style="width: 100%;height: 355px;">
            <div class="number">
                <h1>2</h1>
            </div>
        </div>
    </div>

    <div class="cards">
        <div class="card">
            <img src="source/image/product/strawberry-delight636102445035635173.jpg" alt="" style="width: 100%;height: 355px;">
            <div class="number">
                <h1>3</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4 style="align-items: center; text-align: center;padding-bottom: 10px; font-weight: bold; color: #1c1c1c; border-bottom: solid 2px #000 !important;">Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left" style="color: #f90">Tìm thấy {{count($new_product)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($new_product as $new)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($new->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body" style="margin-top: 12px; margin-bottom: 15px">
                                        <p class="single-item-title">{{$new->name}}</p>
                                        <p class="single-item-price" style="font-size: 18px;">
                                            <!-- Neu don gia KM = 0 thi chi in don gia -->
                                            @if($new->promotion_price==0)
                                            <span class="flash-sale">{{number_format($new->unit_price)}} đồng</span>
                                            <!-- <span class="flash-sale">{{$new->promotion_price}}</span> -->
                                            @else
                                            <span class="flash-del">{{number_format($new->unit_price)}} đồng</span>
                                            <span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
                                            @endif
                                        </p>
                                    </div>

                                    

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$new_product->links()}}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4 style="align-items: center; text-align: center;padding-bottom: 10px; font-weight: bold; color: #1c1c1c; border-bottom: solid 2px #000 !important;">Sản phẩm khuyến mãi</h4>
                        <div class="beta-products-details">
                            <p class="pull-left" style="color: #f90">Tìm thấy {{count($sanpham_khuyenmai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sanpham_khuyenmai as $spkm)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$spkm->id)}}">
                                            {{-- <img src="source/image/product/{{$new->image}}"> --}}
                                            <img src="source/image/product/{{$spkm->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body" style="margin-top: 12px;">
                                        <p class="single-item-title">{{$spkm->name}} đồng</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{$spkm->unit_price}} đồng</span>
                                            <span class="flash-sale">{{$spkm->promotion_price}} đồng</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption" style="margin-top: 12px; margin-bottom: 20px"> 
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$sanpham_khuyenmai->links()}}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
< @endsection