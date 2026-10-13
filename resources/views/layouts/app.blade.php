<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-paper font-sans text-ink antialiased">

    @include('partials.navbar')

    <main class="flex flex-1 flex-col">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
