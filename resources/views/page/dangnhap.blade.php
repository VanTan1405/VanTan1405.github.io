@extends('master')
@section('content')
<style>
    .forminp{
        width: 100px;
        height: 80px;
        padding: 0 15px;
        outline: none;
        box-shadow: none;
        border-radius: 4px;
        margin-bottom: 0;
        border: 1px solid transparent;
        background: #ededed;
        color: #333333;
    }
    .forminps{
        width: 55px;
        height: 38px;
        padding: 0 15px;
        outline: none;
        box-shadow: none;
        border-radius: 4px;
        margin-bottom: 0;
        border: 1px solid transparent;
        background: #ededed;
        color: #333333;
    }
    .btn{
        position: relative;
        display: inline-block;
        padding: 15px 28px;
        line-height: normal;
        border: 1px solid #000;
        text-transform: uppercase;
        font-size: 16px;
        text-align: center;
        font-weight: 400;
        font-style: normal;
        background-color: #000;
        color: #fff;
        border-radius: 4px;
        height: auto;
        /* width: 336px; */
        width: 85%
    }
    .hang4:after {
    content: "";
    background: #000;
    display: block;
    width: 60px;
    height: 4px;
    margin-top: 30px;
}
</style>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng nhập</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng nhập</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form action="{{route('login')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-sm-3"></div>
                @if(Session::has('flag'))
                <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                @endif
                <div class="col-sm-6">
                    <h4 class="hang4" style="font-weight: 700; padding-bottom: 30px" >Đăng nhập</h4>
                    <div class="space20">&nbsp;</div>

                    
                    <div class="form-block">
                        {{-- <label for="email">Email address*</label> --}}
                        <input type="email" name="email" style="height: 55px; width: 85%" required style="" class="forminp" placeholder="Nhập Email">
                    </div>
                    <div class="form-block">
                        {{-- <label for="phone">Password*</label> --}}
                        <input type="password" name="password" style="height: 55px; width: 85%" required class="forminps" placeholder="Nhập password ">
                    </div>
                    <a href="#"><b style="margin-left: 371px;">Quên mật khẩu?</b></a>
                    <div class="form-block">
                        <button type="submit"  class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection

