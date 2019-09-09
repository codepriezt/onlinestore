<div class="product-wrapper">
                    <div class="row row-sm category-grid">
                        @if($product->count() == 0)
                        <h3> There are no product presently</h3>
                        @else
                        @foreach($product as $product)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="grid-product">
                                <figure class="product-image-container">
                                    <a href="{{route('singleProduct' , $product->slug)}}" class="product-image">
                                        <img src="{{asset('asset/images/products/product-1.jpg')}}" alt="product">
                                    </a>
                                    <a href="{{route('singleProduct' , $product->slug)}}" class="btn-quickview">Quick view</a>
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
                                        <a href="product.html">{{$product->name}}</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$129.00</span>
                                        <span class="product-price">{{$product->presentPrice()}}</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-xl-3 -->
                        @endforeach
                        @endif
                    </div><!-- End .row -->
                </div>

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
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->