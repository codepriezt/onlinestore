<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 22:14:08 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Compass Bootstrap4 Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('asset-admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/css/color_skins.css')}}">
</head>
<body class="theme-cyan authentication sidebar-collapse">




            @yield('page-content')




<!-- Jquery Core Js -->
<script src="{{asset('asset-admin/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('asset-admin/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 22:14:08 GMT -->
</html>
