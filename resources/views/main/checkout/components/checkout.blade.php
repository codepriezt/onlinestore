

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
                <li class="active">
                        <span>Billing Address</span>
                    </li>
                    <li>
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

                        <div class="checkout-info-box">
                            <h3 class="step-title">Ship To:
                                <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                            </h3>

                            <address>
                                Desmond Mason <br>
                                123 Street Name, City, USA <br>
                                Los Angeles, California 03100 <br>
                                United States <br>
                                (123) 456-7890
                            </address>
                        </div><!-- End .checkout-info-box -->

                       
                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title">Payment Method:</h2>

                            <h4>Check / Money order</h4>
                            
                            <div class="form-group-custom-control">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                                    <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div id="checkout-shipping-address">
                                <address>
                                    Desmond Mason <br>
                                    123 Street Name, City, USA <br>
                                    Los Angeles, California 03100 <br>
                                    United States <br>
                                    (123) 456-7890
                                </address>
                            </div><!-- End #checkout-shipping-address -->

                            <div id="new-checkout-address" class="show">
                                <form action="{{route('checkout.store')}}" method="post">
                                {{csrf_field()}}
                                    <div class="form-group required-field">
                                        <label>First Name </label>
                                        <input type="text" class="form-control"  name="first_name" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Last Name </label>
                                        <input type="text" class="form-control" name="last_name" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>City </label>
                                        <input type="text" class="form-control" name="city" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>State </label>
                                        <input type="text" class="form-control" name="state" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Country </label>
                                        <input type="text" class="form-control" name="country" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Postal Code </label>
                                        <input type="text" class="form-control" name="postal_code" required>
                                    </div><!-- End .form-group -->


                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" name="phone" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    
                                
                            </div><!-- End #new-checkout-address -->


                            <div class="clearfix">
                                <button type="submit" class="btn btn-primary float-right">Place Order</button>
                            </div><!-- End .clearfix -->
                            </form>
                        </div><!-- End .checkout-payment -->

                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->