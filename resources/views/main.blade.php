<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <nav>
            <router-link :to="{ name: 'allAuthors' }">Авторы</router-link>
            <router-link :to="{ name: 'allBooks' }">Книги</router-link>
        </nav>
        <app></app>
    </div>
    <script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>
