<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-400 ">
    <nav class="p-6 bg-gray-200 flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href=""class="p-3">Home</a></li>
            <li><a href=""class="p-3">Dashboard</a></li>
            <li><a href=""class="p-3">Posts</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li><a href=""class="p-3">Ruqahs Riada</a></li>
               
                <li>
                    <form action="{{route('logout')}}" method="post" class="p-3 inline">
                        <button type="submit" class="">Logout</button>    
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{route('login')}}"class="p-3">Login</a></li>
                <li><a href="{{route('register')}}"class="p-3">Register</a></li>
            @endguest

            
            
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>