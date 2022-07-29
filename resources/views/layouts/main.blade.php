<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
        {{-- @include('includes.header') --}}
        <header>
            <ul>
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
                <li>
                    <a href="/about">About Us</a>
                </li>
            </ul>
        </header>

    @show

    <div>
        @yield('content')
    </div>

    @section('sidebar')
        
    @show

    @section('footer')
        
    @show

    
   
    
</body>
</html>