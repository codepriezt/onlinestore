<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Home & Decor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chairs</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="banner banner-cat mb-3" style="background-image: url'(asset/images/banners/banner-2.jpg)';">
                            <div class="banner-content container offset-1">
                                <h2 class="banner-subtitle">check out over <span>200+</span></h2>
                                <h1 class="banner-title">
                                    INCREDIBLE deals
                                </h1>
                                <a href="#" class="btn btn-dark">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <nav class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-sort">
                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div><!-- End .select-custom -->

                                    <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                                </div><!-- End .toolbox-item -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-item toolbox-show">
                                <label>Showing 1–9 of 60 results</label>
                            </div><!-- End .toolbox-item -->

                            <div class="layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div><!-- End .layout-modes -->
                        </nav>

                        <div class="row row-sm">
                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-1.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-sale">-20%</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$129.00</span>
                                            <span class="product-price">$99.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-2.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Gray armchair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$101.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-3.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Beanbag</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-4.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Table Lamp</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$39.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-5.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Lamp</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$43.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-5.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Blak Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$39.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-6.jpg"')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-sale">-20%</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$129.00</span>
                                            <span class="product-price">$1199.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-7.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Brown Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$20.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-8.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                        <span class="product-label label-sale">-20%</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Table Lamp</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$29.00</span>
                                            <span class="product-price">$19.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-9.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Gray armchair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$101.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-10.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$69.00</span>
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-11.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Gray armchair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$85.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-12.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-13.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-14.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$65.00</span>
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-15.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-16.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-sale">-20%</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Gray armchair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$149.00</span>
                                            <span class="product-price">$101.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-17.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-18.jp')}}g" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$55.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset('asset/images/products/product-1.jpg')}}" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick view</a>
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>
                                        <span class="product-label label-sale">-20%</span>
                                    </figure>
                                    <div class="product-details product-price-inner">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">White Chair</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$129.00</span>
                                            <span class="product-price">$1199.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-3 -->
                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Showing 1–9 of 60 results</label>
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><span>...</span></li>
                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->