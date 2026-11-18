
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial.0">
    <title>@yield('title') - Sistem Mata Kuliah</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #263248;
        }

        .navbar {
            background: #1e3a8a;
            color: white;
            padding: 20px 7%;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            max-width: 1050px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        h2 {
            margin-top: 0;
            color: #1e3a8a;
        }

        .subtitle {
            color: #718096;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-detail {
            background: #e0eaff;
            color: #1d4ed8;
        }

        .btn-secondary {
            background: #64748b;
            color: white;
        }

        .btn:hover {
            opacity: 0.85;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #eff4ff;
            color: #1e3a8a;
        }

        tr:hover {
            background: #f8fafc;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .alert {
            padding: 12px;
            background: #dcfce7;
            color: #166534;
            border-radius: 7px;
            margin: 15px 0;
        }

        .error {
            color: #dc2626;
            margin-bottom: 15px;
        }

        .detail-item {
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        footer {
            text-align: center;
            color: #94a3b8;
            padding: 25px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        Sistem Informasi Mata Kuliah
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        © 2026 Sistem Informasi Mata Kuliah
    </footer>

</body>
</html>
