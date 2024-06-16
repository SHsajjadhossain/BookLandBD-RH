<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Use Minified Plugins Version For Fast Page Load -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend_assets/css/plugins.css') }}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend_assets/css/main.css') }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/image/favicon.ico') }}">

@stack('custom-css')
