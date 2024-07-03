<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
   

<body>

    <img src="{{asset('css/logoo.jpg')}}" alt="Avatar" style="width: 50px;" >
        <a href="{{route('dashboard')}}">DASHBOARD</a>
        <a href="{{route('studentlist')}}">STUDENT LIST</a>
        <a href="{{route('course')}}">COURSE LIST</a>
    </div>

    @yield('content')
</body>
</html>