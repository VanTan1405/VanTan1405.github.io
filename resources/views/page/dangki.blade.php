@extends('master')
@section('content')
<style>
    input{
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
        width: 60%;
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
            <h6 class="inner-title">Đăng kí</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng kí</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form action="{{route('signin')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-sm-3"></div>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                   
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <div class="col-sm-6">
                    <h4 class="hang4" style="padding-bottom: 20px">Đăng kí</h4>
                    <div class="space20">&nbsp;</div>

                    
                    <div class="form-block">
                        {{-- <label for="email">Email address*</label> --}}
                        <input placeholder="Nhập email" type="email" name="email" required>
                    </div>

                    <div class="form-block">
                        {{-- {{-- <label for="your_last_name">Fullname*</label> --}} 
                        <input placeholder="Nhập tên" type="text" name="fullname" required>
                    </div>

                    <div class="form-block">
                        {{-- {{-- <label for="adress">Address*</label> --}} 
                        <input placeholder="Nhập địa chỉ" type="text" name="adress"  required>
                    </div>


                    <div class="form-block">
                        {{-- {{-- <label for="phone">Phone*</label> --}} 
                        <input placeholder="Nhập số điện thoại" type="text" name="phone" required>
                    </div>
                    <div class="form-block">
                        {{-- {{-- <label for="phone">Password*</label> --}} 
                        <input placeholder="Nhập mật khẩu" type="password" name="password" required>
                    </div>
                    <div class="form-block">
                        {{-- {{-- <label for="phone">Re password*</label> --}} 
                        <input placeholder="Nhập lại mật khẩu" type="password" name="re_password" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
