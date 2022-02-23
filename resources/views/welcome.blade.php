<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .welcome{
            display: flex;
            width: 100vw;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .welcome a{
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 10px;
            background: linear-gradient(45deg, #0F5EF7, #7a15f7);
            font-size: 15px;
            font-family: "Nunito",sans-serif;
            text-decoration: none;
        }
        .welcome a:last-child{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome">
        @if (Route::has('login'))
        @auth
        <a href="{{route("dashboard")}}">dashboard</a>
        <a href="{{route("admin.logout")}}">logout</a>
        @else
        <a href="{{route("register")}}">register</a>
        <a href="{{route("login")}}">login</a>
        @endauth
        @endif
    </div>
</body>
</html>
