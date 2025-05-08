<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.modules.css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('client/assets/images/favicon.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="all">
    <title>@yield('title')</title>
</head>

<body class="cnt-home">
    @include('client.templates.header')

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container-fluid main-container" style="padding: 0px 50px;">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    @include('client.templates.sidebar')

                    @include('client.templates.widget')
                </div>

                @yield('content')

            </div>
            @include('client.templates.brands')
        </div>
    </div>
    
    @include('client.templates.footer')
    @include('client.modules.js')
</body>

</html>
