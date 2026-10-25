<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | PT Surya Nusantara Energi</title>
    <meta name="description" content="@yield('description', 'PT Surya Nusantara Energi — instalasi panel surya, konsultasi efisiensi energi, dan smart metering untuk Indonesia.')">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
