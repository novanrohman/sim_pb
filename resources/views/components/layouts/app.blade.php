<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Novan Rohman">
    <title>{{ $title ?? 'Sistem Presensi' }}</title>
    <!-- Custom fonts for this template-->

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- icon web -->
    <link rel="icon" href="{{ asset('assets/logo/logo.png') }}" type="image/x-icon">

    {{--Style SB Admin--}}
    {{--    <link href="{{asset('assets/sb-admin/css/datatables.min.css')}}" rel="stylesheet"/>--}}

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="{{asset('assets/sb-admin/css/styles.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{--Script SB Admin--}}
    <script src="{{asset('assets/sb-admin/js/simple-datatables.min.js')}}"
            crossorigin="anonymous"></script>
    <script src="{{asset('assets/sb-admin/js/datatables-simple-demo.js')}}"></script>


    @livewireStyles


</head>

<body class="sb-nav-fixed">
{{ $slot }}

@livewireScripts
{{--SB Admin--}}
<script src="{{asset('assets/sb-admin/js/bootstrap.bundle.min.js')}}"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/sb-admin/js/scripts.js')}}"></script>
<script src="{{asset('assets/sb-admin/js/chart.min.js')}}"></script>


</body>
