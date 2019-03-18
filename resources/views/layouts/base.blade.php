<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Bootstrap fileupload css -->
    <link href="../plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style_dark.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="https://ssl.captcha.qq.com/TCaptcha.js"></script>

</head>
<body>
@yield('content')
@include('front._basic')
@stack('js')
</body>
</html>