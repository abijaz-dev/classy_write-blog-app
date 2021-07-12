<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Classy Write - @yield('title')</title>
</head>
<body>

@include('includes.navbar')
@include('includes.messages')
@yield('content')
@include('includes.footer')

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</script>
</body>
</html>