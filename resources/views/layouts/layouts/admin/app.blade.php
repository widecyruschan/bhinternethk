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
        /**
* Modals ($modals)
*/

        /* 1. Ensure this sits above everything when visible */
        .modal {
            position: absolute;
            z-index: 10000; /* 1 */
            top: 0;
            left: 0;
            visibility: hidden;
            width: 100%;
            height: 100%;
        }

        .modal.is-visible {
            visibility: visible;
        }

        .modal-overlay {
            position: fixed;
            z-index: 10;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: hsla(0, 0%, 0%, 0.5);
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s linear 0.3s, opacity 0.3s;
        }

        .modal.is-visible .modal-overlay {
            opacity: 1;
            visibility: visible;
            transition-delay: 0s;
        }

        .modal-wrapper {
            position: absolute;
            z-index: 9999;
            top: 6em;
            left: 50%;
            width: 32em;
            margin-left: -16em;
            background-color: #fff;
            box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
        }

        .modal-transition {
            transition: all 0.3s 0.12s;
            transform: translateY(-10%);
            opacity: 0;
        }

        .modal.is-visible .modal-transition {
            transform: translateY(0);
            opacity: 1;
        }

        .modal-header,
        .modal-content {
            padding: 1em;
        }

        .modal-header {
            position: relative;
            background-color: #fff;
            box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.06);
            border-bottom: 1px solid #e8e8e8;
        }

        .modal-close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 1em;
            color: #aaa;
            background: none;
            border: 0;
        }

        .modal-close:hover {
            color: #777;
        }

        .modal-heading {
            font-size: 1.125em;
            margin: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .modal-content > *:first-child {
            margin-top: 0;
        }

        .modal-content > *:last-child {
            margin-bottom: 0;
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
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar')

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
