<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets/img/logo.png')}}" rel="icon">
    <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/js/jquery.min.js')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="{{url('assets1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets1/css/style.css')}}">



    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

@include('newadmin.layout.navigation')
@include('newadmin.layout.sidebar')

<main id="main" class="main">
    @yield('content')
</main>

@include('newadmin.layout.footer')



<!-- Vendor JS Files -->
<script src="{{url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{url('assets/vendor/echarts/echarts.min.js')}}}"></script>
<script src="{{url('assets/vendor/quill/quill.min.js')}}}"></script>
<script src="{{url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>




<script src="assets1/js/jquery-3.5.1.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/js/jquery.slimscroll.min.js"></script>
<script src="assets1/js/select2.min.js"></script>
<script src="assets1/js/jquery.dataTables.min.js"></script>
<script src="assets1/js/dataTables.bootstrap4.min.js"></script>
<script src="assets1/js/moment.min.js"></script>
<script src="assets1/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets1/js/app.js"></script>




<script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>
