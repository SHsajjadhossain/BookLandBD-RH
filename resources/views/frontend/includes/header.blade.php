<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Use Minified Plugins Version For Fast Page Load -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend_assets/css/plugins.css') }}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend_assets/css/main.css') }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/image/favicon.ico') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
{{-- <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}"> --}}

@stack('custom-css')
