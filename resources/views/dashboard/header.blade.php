
@section('header')

        <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GennadySX">
    <title>Expert - Личный кабинет</title>

    <!-- Bootstrap -->
    <link href="{{asset('tim/dash/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('tim/dash/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('tim/dash/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('tim/dash/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('tim/dash/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('tim/dash/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('tim/dash/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('tim/dash/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><img src="{{asset('tim/images/logo.png')}}" alt="" style="width: 45px; height: 45px; border-radius: 25px;"> <span>Yota</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('/uploads/users/'.Auth::user()->avatar)}}" alt="..." class="img-circle profile_img" >
                    </div>
                    <div class="profile_info">
                        @if(Auth::check())
                        <h2>{{{ Auth::user()->name}}} {{{ Auth::user()->surname}}}</h2>
                        <span>{{{ Auth::user()->roles->first()->display_name}}}</span>
                        @endif
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />


@endsection