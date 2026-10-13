
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Praktikum Blade')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        nav {
            background: #eeeeee;
            padding: 15px;
            margin-bottom: 20px;
        }

        nav a {
            margin-right: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background: #eeeeee;
        }

        .alert {
            background: #fff3cd;
            padding: 12px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>
</body>
</html>
