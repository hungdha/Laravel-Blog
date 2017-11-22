<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js')}}"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
        <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/css/ie9.css')}}" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css')}}" /><![endif]-->

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript"  >
          window.Laravel = '{{ csrf_token() }}'
        </script>
    </head>
    <body>    
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
    </body>
</html>