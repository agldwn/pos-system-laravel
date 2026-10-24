<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel POS</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
            color: #222;
        }

        nav {
            background-color: #1f2937;
            padding: 16px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            color: #93c5fd;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        h1 {
            color: #1f2937;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #d1d5db;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1f2937;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customer Accounts</a>
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>