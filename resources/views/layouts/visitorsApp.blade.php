<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? 'Weblon' }} | {{ config('app.name') }}</title>
    <meta content="{{ config('app.name') }}" name="description">
    <meta content="" name="keywords">

    @include('inc.headerLinks')

    @yield('head')
</head>

<body>

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.footerLinks')

    @yield('scripts')
</body>

</html>
