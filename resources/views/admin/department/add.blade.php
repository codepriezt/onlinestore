@extends('admin.layouts.auth')
@section('page-content')
@include('admin.dashboard.main.components.navbar')
@include('admin.dashboard.main.components.left-sidebar')
@include('admin.dashboard.main.components.right-sidebar')
@include('admin.dashboard.main.components.navbar')
@include('admin.dashboard.main.components.chat')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Department
                    <small class="text-muted">department</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Department</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Add</a></li>
                    <li class="breadcrumb-item active">Department</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add/Department</strong> <small>Add</small> </h2>
                    </div>
                    
                    <div class="body">
                    <form method="post" action="{{route('add_department')}}" id="add_department" name="add_category" >
                    @csrf
                        <h2 class="card-inside-title">Department Name</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6 mb-2" >
                                <div class="form-group">
                                    <input type="text"  name ="department_name" class="form-control" placeholder="name" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <h2 class="card-inside-title">Department Description</h2>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize"
                                         name="description"
                                            placeholder="description" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <h2 class="card-inside-title">Department url</h2>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="category_url" name="url" required/>
                                </div>
                            </div>
                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">SUBMIT</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 @endsection
 
