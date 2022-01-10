<!DOCTYPE html>
<html>
<head>
    @include('includes.meta')
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>@yield('title') | Landing Page</title>

    <link ref="apple-touch-icon" href="">
    <link ref="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>
<body>

    @include('includes.header')
        @yield('content')
    @include('includes.script')

    @stack('after-script')

    @include('includes.footer')
    
</body>
</html>