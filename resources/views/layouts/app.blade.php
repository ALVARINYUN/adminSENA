<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    @include('includes.navBar')
    @yield('content')
    @include('includes.footer')
</body>

=======
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>adminSENA</title>
    <style>
        /* Navbar */
        nav {
            background-color:rgb(0, 0, 0);
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color:rgb(0, 0, 0);
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            font-size: 0.9em;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    @include('includes.navbar')

        @yield('content')

    @include('includes.footer')

</body>
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
</html>
