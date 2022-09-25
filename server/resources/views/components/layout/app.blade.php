<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div>
        <nav class="navbar bg-primary">
            <div class="container-fluid">
            <strong class="navbar-brand text-bg-primary" href="#">PAMS</strong>
            </div>
        </nav>
        {{ $slot }}
    </div>
</body>
</html>