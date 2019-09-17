<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav>
            @if(Cart::count() == 0)

            <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 40px;">
                 Empty cart - products you add to cart will be display here.
            <div class="text-center">
                <a href="{{ route('home')}}" class="btn btn-primary btn-lg text-white">Start Shopping</a>
            </div>
           </div> 

           @if(session('success'))
                        @alert([
                            'type' => 'success', 
                            'title' => 'Success!', 
                            'message' => session('success')
                        ])
                        @endalert
                    @endif
           
         @else  
              
              <h2>{{Cart::count()}} item(s) in the Shoppin Cart</h2>
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Product</th>
                                        <th class="price-col">Price</th>
                                        <th class="qty-col">Qty</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach(Cart::content() as $item)
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="{{route('singleProduct' , $item->model->slug)}}" class="product-image">
                                                    <img src="{{asset('asset/images/products/product-4.jpg')}}" alt="product">
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a href="{{route('singleProduct' , $item->model->slug)}}">{{$item->model->name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$item->model->presentPrice()}}</td>
                                        <td>
                                            <input class="vertical-quantity form-control" type="text">
                                        </td>
                                       
                                    </tr>
                                    
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <!-- <a href="#" class="btn-move">Move to Wishlist</a> -->
                                                <form action="{{route('cart.watchlist' , $item->rowId)}}" method="post">
                                                {{ csrf_field()}}
                                                <button type="submit" class="btn-move">Move to watchlist</button>
                                                </form>
                                                </div><!-- End .float-left -->
                                            
                                            <div class="float-right"> 
                                            <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                            <form action="{{ route('cart.delete' ,$item->rowId) }}" method ="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button type="submit"  class="btn-remove"><span class="sr-only">Remove</span></button>
                                            </form>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>

                                @if(Cart::count() > 0)
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                            </div><!-- End .float-left -->

                                            <div class="float-right">
                                                <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                                @endif
                            </table>
                        </div><!-- End .cart-table-container -->

                           @if(Cart::count() > 0) 
                        <div class="cart-discount">
                            <h4>Apply Discount Code</h4>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                                    </div>
                                </div><!-- End .input-group -->
                            </form>
                        </div><!-- End .cart-discount -->
                        @endif
                    </div><!-- End .col-lg-8 -->
