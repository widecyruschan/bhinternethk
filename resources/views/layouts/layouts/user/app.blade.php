<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Eventmie Pro - Eventmie Pro Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="jPn1pIU4QrIwYzCAD50Fqkx2tCxNtXijaWWBE1D4"/>
    <meta name="assets-path" content="{{ asset('admin/voyager-assets') }}"/>
    <link rel="shortcut icon" href="{{ asset('storage/settings/August2019/Lcp6sngWhfOz3sPRLKLx.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/voyager-assets?path=css/app.css') }}">

    <!-- Few Dynamic Styles -->
    <style>
        .voyager .side-menu .navbar-header {
            background:#1b89ef;
            border-color:#1b89ef;
        }
        .widget .btn-primary{
            border-color:#1b89ef;
        }
        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#1b89ef;
        }
        .voyager .breadcrumb a{
            color:#1b89ef;
        }
         .dd-placeholder {
             flex: 1;
             width: 100%;
             min-width: 200px;
             max-width: 250px;
         }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets?path=css/voyager.css') }}">
    @yield('page_css')
</head>

<body class="voyager">

<div id="voyager-loader" style="left: 125px; display: none;">
    <img src="https://eventmie.test/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">
</div>

<div class="app-container expanded no-animation" style="">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
        @include('layouts.user.header')
        @include('layouts.user.sidebar')

        <div class="container-fluid">
            <div class="side-body padding-top">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @yield('modals')
</div>

<script src="{{ asset('admin/voyager-assets?path=js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/Classes/Crud.js') }}"></script>
<script src="{{ asset('js/Classes/OpenChat.js') }}"></script>
<script src="{{ asset('js/Classes/PusherMulti.js') }}"></script>
<script>
    window.config = {
        asset: "{{ asset('') }}",
        storage: "{{ asset('storage') }}" + "/"
    }
</script>
@yield('page_js')
</body>
</html>
