<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Toastr css  alert 全局提示样式-->
    <link href="{{asset('plugins/jquery-toastr/jquery.toast.min.css')}}" rel="stylesheet" />
    <!-- App css -->
    @stack('css')
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style_dark.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
@include('layouts.side-menu')
<!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Top Bar Start -->
    @include('layouts.top-bar')
    <!-- Top Bar End -->
        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{asset('plugins/jquery-knob/excanvas.js')}}"></script>
<![endif]-->
<script src="{{asset('plugins/jquery-knob/jquery.knob.js')}}"></script>
<!-- Toastr js 全局提示 -->
<script src="{{asset('plugins/jquery-toastr/jquery.toast.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/jquery.toastr.js')}}" type="text/javascript"></script>
@include('share._alert')
<!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>
@stack('js')
</body>
</html>