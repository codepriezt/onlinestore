<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 22:04:41 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Compass Bootstrap4 Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('asset-admin/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset-admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('asset-admin/plugins/morrisjs/morris.min.css')}}" />
<link rel="stylesheet" href="{{asset('asset-admin/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset-admin/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('asset-admin/css/main.css')}}">
<link rel="stylesheet" href="{{asset('asset-admin/css/color_skins.css')}}">
<link rel="stylesheet" href="{{asset('asset-admin/css/ecommerce.css')}}">

</head>
<body class="theme-orange">


    @yield('page-content')


 <!-- Jquery Core Js --> 
<script src="{{asset('asset-admin/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{asset('asset-admin/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('asset-admin/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('asset-admin/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('asset-admin/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{asset('asset-admin/bundles/flotscripts.bundle.js')}}"></script> <!-- flot charts Plugin Js --> 
<script src="{{asset('asset-admin/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('asset-admin/bundles/footable.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('asset-admin/js/pages/tables/footable.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('asset-admin/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('asset-admin/js/pages/charts/jquery-knob.min.js')}}"></script>
@yield('script-section')
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 22:06:39 GMT -->
</html>   