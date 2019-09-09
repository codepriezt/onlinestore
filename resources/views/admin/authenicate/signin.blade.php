@extends('admin.authenicate.layouts.app')
@section('page-content')
@include('admin.authenicate.components.navbar')
<div class="page-header">
    <div class="page-header-image" style="background-image:url(../asset-admin/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{asset('asset/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Enter User Name">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SIGN IN</a>
                        <h6 class="m-t-20"><a href="{{route('forget-password')}}" class="link">Forgot Password?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>

@include('admin.authenicate.components.footer')
@endsection
