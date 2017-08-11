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
        <header>
            <div class="logo logo--centered">Next Job</div>
        </header>
        <div class="row wrapper">
            <div class="row__col option option--skewed">
                <a href="#">
                    <img class="option__icon" src="{{ asset('img/icons/add.svg') }}" alt="New vacancy">
                </a>
                <p class="option__text">
                    <a href="#">New vacancy</a>
                </p>
            </div>
            <div class="row__col option option--skewed">
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
        <footer class="footer">
            <div class="wrapper">
                <p class="footer__text">
                    <a href="https://github.com/taymison" target="_blank">Created with <span class="footer__heart-symbol">❤</span> by Taymison</a>
                </p>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
