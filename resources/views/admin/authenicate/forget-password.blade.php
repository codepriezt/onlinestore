@extends('admin.authenicate.layouts.app')
@section('page-content')
@include('admin.authenicate.components.navbar')
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{asset('asset-admin/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Forgot Password?</h5>
                        <span>Enter your e-mail address below to reset your password.</span>
                    </div>
                    <div class="content">
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SUBMIT</a>
                        <h6 class="m-t-20"><a href="#" class="link">Need Help?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('admin.authenicate.components.footer')
@endsection