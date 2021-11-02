<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/styles/app.css') }}">
    <title>IIM Cours Framework</title>
</head>
<body>
    @include('components.button', ['text' => 'Mon bouton'])
    @include('components.button', ['text' => 'Mon deuxieme bouton'])
</body>
</html>
