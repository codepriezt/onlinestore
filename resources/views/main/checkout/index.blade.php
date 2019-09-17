@extends('layouts.app')
@section('extra-css')
<script scr="http://js.stripe.com/v3/"></script>
@endsection
@section('page-content')
@include('main.home.components.header')
@include('main.checkout.components.checkout')
@include('main.home.components.footer')
@include('main.product.components.mobile-view')
@endsection