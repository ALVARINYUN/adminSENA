<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bienvenido.css') }}">
</head>


<body>
    <header>
        @include('includes.navBar')
    </header>
    
    <main>
        @yield('content')
    </main>
   <footer>
        @include('includes.footer')
   </footer>
    
</body>
