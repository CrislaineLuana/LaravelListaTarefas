<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="/css/styles.css">
    <title>Tasks</title>
</head>
<body>

    <header>
        <nav class="navbar_container">
            <div class="navbar_img">
                <img  src="/img/logo.png" alt="">
            </div>
            <ul class="menu">
                @auth
                    
              
                <li><a href="/index">Home</a></li>
                <form action="/logout" method="Post">
                    @csrf
                    <li><button href="/logout"><i class="bi bi-door-closed-fill" style="margin-right: 10px"></i>Sair</button></li>
                </form>

                @else

                <li><a href="/">Login</a></li>
                <li><a href="/register">Registar-se</a></li>

                @endauth
            </ul>
        </nav>
    </header>


    {{$slot}}

    <footer style="background-color: rgb(18, 41, 90)" class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Projeto desenvolvido por Crislaine Luana</p>
    
    </footer>
    <x-flash-message/>
</body>
</html>