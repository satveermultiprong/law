<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <main class="container-fluid mt-4 ">
        @yield('content')
    </main>

    
    @include('partials.footer')

    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>