<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME')  }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    </head>
    <body>
        <header class="header--taller">
            <a href="{{ route('menu') }}">
                <div class="logo logo--centered">Next Job</div>
            </a>
        </header>
        <div class="row row--column-direction wrapper">
            <div class="row__col option option--skewed">
                <a href="{{ route('form-new-vacancy') }}">
                    <img class="option__icon" src="{{ asset('img/icons/add.svg') }}" alt="New vacancy">
                </a>
                <p class="option__text">
                    <a href="{{ route('form-new-vacancy') }}">New vacancy</a>
                </p>
            </div>
            <div class="row__col option option--skewed">
                <div class="option__coming-soon">
                    <p>Coming soon</p>
                </div>
                <a href="#">
                    <img class="option__icon" src="{{ asset('img/icons/list.svg') }}" alt="Vacancies">
                </a>
                <p class="option__text">
                    <a href="#">Vacancies</a>
                </p>
            </div>
            <div class="row__col option option--skewed">
                <div class="option__coming-soon">
                    <p>Coming soon</p>
                </div>
                <a href="#">
                    <img class="option__icon" src="{{ asset('img/icons/resume.svg') }}" alt="My resume">
                </a>
                <p class="option__text">
                    <a href="#">My resume</a>
                </p>
            </div>
        </div>
        @include('components.footer', ['modifiers' => 'footer--b-0'])
    </body>
</html>
