<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')}}
    <!-- Font Awesome -->
    {{Html::style('bower_components/font-awesome/css/font-awesome.min.css')}}
    <!-- Ionicons -->
    {{Html::style('bower_components/Ionicons/css/ionicons.min.css')}}
    <!-- Theme style -->
    {{Html::style('dist/css/AdminLTE.min.css')}}

    {{Html::style('dist/css/skins/skin-black-light.min.css')}}
    <!-- Theme style -->
   <!-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">  -->

    <link media="all" type="text/css" rel="stylesheet" href="http://mis.project-conceptangles.com/dist/css/skins/skin-black-light.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
 <body class="hold-transition skin-black-light layout-top-nav">


 <!-- <body class="hold-transition skin-black-light sidebar-mini"> -->

<div class="wrapper">

    <header class="main-header">
        @include('layouts.Components.navbar')
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <main class="py-4">
                    @yield('content')
                </main>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <!--<b>Version</b> 2.4.0-->
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">VIT</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>

