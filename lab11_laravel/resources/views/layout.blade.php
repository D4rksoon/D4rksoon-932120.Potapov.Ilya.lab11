<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite(['resources/css/style.css'])
    <title>@yield('title') - Backend1</title>
</head>
<body>
    <header>
        <p>
            Backend1
            <a class="home-page" href="/">Home</a>
        </p>
    </header>
    <div class="container">
        @yield('main_content')
    </div>
    <footer class="">
        <p>© 2019 - Backend1</p>
    </footer>
</body>
</html>
