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

<div class="card__content">
    <h1 class="card__title-wrapper">
        <span class="card__title">Title of the card</span>
    </h1>
    <p class="card__description">Lorem ipsum dolor...</p>
    <p class="card__description card__description--small">
        Lorem ipsum dolor...
    </p>
</div>

<div class="card__content">
    <h1 class="card__title-wrapper">
        <span class="card__title">Title of the card</span>
    </h1>
    <p class="card__description">Lorem ipsum dolor...</p>
    <p class="card__description card__description--small">
        Lorem ipsum dolor...
    </p>
</div>
