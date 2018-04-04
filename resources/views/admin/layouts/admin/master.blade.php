<?php
$route = \Request::route()->getName();
use Rikkei\Recruitment\View\View;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('core::view.Rikkeisoft Career Website Admin') }} | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ View::autoVersion('css/admin/layout_admin.css') }}">
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Webvn</b></span>
        </a>

        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ Session('user')->avatar_url}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Session('user')->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ preg_replace('/\?sz\=50/', '', Session('user')->avatar_url)}}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Session('user')->name}}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">{{ trans('core::view.Profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('auth/disconnect', ['google']) }}" class="btn btn-default btn-flat">{{ trans('core::view.Sign out') }}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @include('layouts.admin.include.side_bar')
    <div class="content-wrapper">
        @if (session('message'))
            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-check"></i>
                {{ session('message') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa fa-times"></i>
                {{ session('error') }}
            </div>
        @endif
        @yield('css')
        @yield('header')
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->

<script>
var curRoute = '{{ $route }}';
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="{{ View::autoVersion('js/admin/main.js') }}"></script>
@yield('script')
</body>
</html>
