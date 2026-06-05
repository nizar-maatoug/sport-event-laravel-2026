
<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Gestion Event Sportif' }}</title>
    <meta name="description" content="{{ $description ?? 'Application de gestion des événements sportifs' }}">
</head>
<body>
    <h1>Gestion Event Sportif</h1>
    <hr>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>
