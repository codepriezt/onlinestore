@if(Cart::count() > 0)
<div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                            </h4>

     

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>{{ presentPrice(Cart::subtotal()) }}</td>
                                    </tr>

                                    <tr>
                                        <td>Tax</td>
                                        <td>{{  presentPrice(Cart::tax())  }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>{{ presentPrice(Cart::total())  }}</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="{{route('checkout.index')}}" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
                                <a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
                            </div><!-- End .checkout-methods -->
                        </div><!-- End .cart-summary -->
                        
                    </div><!-- End .col-lg-4 -->
                    @endif
                </div><!-- End .row -->
            </div><!-- End .container -->

            @if(Cart::instance('watchlist')->count() == 0)
              <h3>No items in the watchlist</h3>
            @else

            <div class="container">
                <h2 class="subtitle text-center">Watchlist</h2>
               
                <div class="top-selling-products owl-carousel owl-theme">
                    @foreach(Cart::instance('watchlist')->content() as $item)
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="{{route('singleProduct' , $item->model->slug)}}" class="product-image">
                                <img src="{{asset('asset/images/products/product-2.jpg')}}" alt="product">
                            </a>
                            <form action="{{route('watchlist.delete' , $item->rowId)}}" method="post">
                            {{ csrf_field()}}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn-quickview">Remove</a>
                            </form>

                            <form action="{{route('watchlist.add' , $item->rowId)}}" method = "post">
                            {{csrf_field()}}
                            <button type="submit" class="paction add-cart"><span>Add to Cart</span></button> 
                            </form>
                                  
                        </figure>
                        <div class="product-details product-price-inner">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">{{$item->model->name}}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">{{$item->model->presentPrice()}}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                   @endforeach
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->
            @endif
            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->