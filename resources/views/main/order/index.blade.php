@extends('layouts.app')
@section('extra-css')

@endsection
@section('page-content')
@include('main.home.components.header')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('shoppingCart')}}">Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>

                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <ul class="checkout-progress-bar">
                <li>
                        <span>Shipping</span>
                </li>
                <li>
                        <span>Billing Address</span>
                    </li>

                 <li class="active">

                        <span>Order</span>
                </li>
                       
                </ul>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section"> {{Cart::count()}} products in Cart</a>
                            </h4>

                            <div class="collapse" id="order-cart-section">
                                <table class="table table-mini-cart">
                                    <tbody>
                                        @foreach(Cart::content() as $item)
                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('asset/images/products/product-1.jpg')}}" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">{{$item->model->name}}</a>
                                                    </h2>

                                                    <span class="product-qty">{{$item->model->quantity}}</span>
                                                </div>
                                            </td>
                                            <td class="price-col">{{$item->model->presentPrice()}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>    
                                </table>
                            </div><!-- End #order-cart-section -->
                        </div><!-- End .order-summary -->

               

                       
                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title">Order:</h2>

                            <h4>Details</h4>
                            

                            <div id="new-checkout-address" class="show">
                                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                        <div class="row" style="margin-bottom:40px;">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                <div>
                                                    Lagos Eyo Print Tee Shirt
                                                    ₦ 2,950
                                                </div>
                                            </p>
                                            <input type="hidden" name="email" value="codepriezt@gmail.com"> {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                            <input type="hidden" name="quantity" value="3">
                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                            <p>
                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                            </button>
                                            </p>
                                        </div>
                                        </div>
                                </form>
                                                                
                            </div><!-- End #new-checkout-address -->

                        </div><!-- End .checkout-payment -->

                        <div class="checkout-discount">
                            <h4>
                                <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                            </h4>

                            <div class="collapse" id="checkout-discount-section">
                                <form action="#">
                                        <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                        <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                                </form>
                            </div><!-- End .collapse -->
                        </div><!-- End .checkout-discount -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->
@include('main.home.components.footer')
@include('main.product.components.mobile-view')
@endsection
