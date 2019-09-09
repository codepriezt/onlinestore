<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Departments
                <small class="text-muted">Welcome to Cp Online Store</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Cp Onlne Store</a></li>
                    <li class="breadcrumb-item"><a href="ec-dashboard.html">eCommerce</a></li>
                    <li class="breadcrumb-item active"> View Department</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Department Name</th>
                                    <th data-breakpoints="sm xs">Description</th>
                                    <th data-breakpoints="xs">Url</th>
                                    <th data-breakpoints="xs md">Stock</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($department->count() == 0)
                              <h4>There is no department available</h4>
                              @else
                              @foreach($department as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td><img src="{{asset('asset-admin/images/ecommerce/1.png')}}" width="48" alt="Product img"></td>
                                    <td><h5>{{$department->name}}</h5></td>
                                    <td><span class="text-muted">{{$department->description}}</span></td>
                                    <td>{{$department->url}}</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                                @endif  
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">                            
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

