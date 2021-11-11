<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
    <script src="https://kit.fontawesome.com/043e0b7795.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <style>
        html, body{
            background-color: black;/* Делаем фон шаблона черного цвета*/
        }
    </style>
</head>
<body>
<div id="app"><!--Контейнер, в котором будет рендериться vue-компонент, его id указан во vue-объекте в app.js-->
    <main-component></main-component><!--Подключение главного компонента MainComponent-->
</div>
<script defer src="{{ mix('js/app.js') }}"></script><!--импортируем app.js - основу фронтенд-функционала
defer - означает что скрипт загружается одновременно с парсингом страницы(шаблона)-->
</body>
</html>


