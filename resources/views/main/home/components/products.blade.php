        <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="subtitle">SHOP LIVING ROOM</h3>
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{asset('asset/images/banners/banner-living.jpg')}}" alt="banner">
                            </a>
                            <div class="banner-meta">
                                <a href="#">LIVING ROOM </a>

                                <span class="banner-price">Starting at <span>$999</span></span>
                            </div><!-- End .banner-meta -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <h3 class="subtitle">SHOP DINING ROOM</h3>
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{asset('asset/images/banners/banner-dining.jpg')}}" alt="banner">
                            </a>
                            <div class="banner-meta">
                                <a href="#">DINING ROOM </a>

                                <span class="banner-price">Starting at <span>$859</span></span>
                            </div><!-- End .banner-meta -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <h3 class="subtitle">SHOP BEDROOM</h3>
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{asset('asset/images/banners/banner-bedroom.jpg')}}" alt="banner">
                            </a>
                            <div class="banner-meta">
                                <a href="#">BEDROOM</a>

                                <span class="banner-price">Starting at <span>$888</span></span>
                            </div><!-- End .banner-meta -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- margin -->         

            <div class="container">
                <h2 class="subtitle text-center">Top Selling Items</h2>
               
                <div class="top-selling-products owl-carousel owl-theme">
                @if($product->count() == 0)
                    <h3> No product is avaiable at the moment</h3>
                @else
                @foreach($product as $product)
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="{{route('singleProduct' , $product->slug)}}" class="product-image">
                                <img src="{{asset('asset/images/products/product-2.jpg')}}" alt="product">
                            </a>
                            <a href="{{route('singleProduct' , $product->slug)}}" class="btn-quickview">Quick view</a>
                            <form action="{{route('cart.add')}}" method = "post">
                            {{csrf_field()}}
                            <input type = "hidden" name ="id" value="{{$product->id}}">
                            <input type = "hidden" name ="name" value="{{$product->name}}">
                            <input type = "hidden" name ="price" value="{{$product->price}}">
                            <input type = "hidden" name ="weight" value="{{$product->weight}}">
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
                                <a href="product.html">{{$product->name}}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">{{$product->presentPrice()}}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                    @endforeach
                    @endif
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->



<!-- Partners--->

<div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/1.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/2.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/3.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/4.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/5.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/2.png')}}" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="{{asset('asset/images/logos/1.png')}}" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->
        </main><!-- End .main -->






