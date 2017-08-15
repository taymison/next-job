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
        <header class="header">
            <div class="wrapper">
                <a href="{{ url('/') }}">
                    <div class="logo logo--black logo--centered-until-small logo--small">Next Job</div>
                </a>
            </div>
        </header>
        <section class="new-vacancy">
            <div class="wrapper">
                <h1 class="new-vacancy__title">New Vacancy</h1>
                <h2 class="new-vacancy__subtitle">Step 1 - Select a company</h2>
                <div class="new-vacancy__companies-exist">
                    <form action="">
                        <label class="new-vacancy__label" for="company">Select a company</label>
                        <select class="new-vacancy__form-control" name="company" id="company">
                            <option value="0">None</option>
                            <option value="1">AAA</option>
                            <option value="2">BBB</option>
                            <option value="3">CCC</option>
                        </select>
                        <br>
                        <div class="row row--space-between">
                            <div class="row__col">
                                <input class="new-vacancy__form-control" type="button" value="Edit companies">
                            </div>
                            <div class="row__col">
                                <input class="new-vacancy__form-control" type="button" value="Create a company">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="new-vacancy__companies-not-exist">
                    <input class="new-vacancy__form-control" type="button" value="Create a company">
                </div>
                <br>
                <h2>Step 2 - Create a vacancy</h2>
                <form action="">
                    <label class="new-vacancy__label" for="vacancy-name">Vacancy name</label>
                    <input class="new-vacancy__form-control" id="vacancy-name" type="text" name="vacancy-name">
                    <br>
                    <label class="new-vacancy__label" for="vacancy-description">Vacancy description</label>
                    <textarea class="new-vacancy__form-control" name="vacancy-description" id="vacancy-description" cols="15" rows="5"></textarea>
                    <br>
                    <div class="row row--space-between">
                        <div class="row__col">
                            <input class="new-vacancy__form-control" type="button" value="Cancel">
                        </div>
                        <div class="row__col">
                            <input class="new-vacancy__form-control" type="button" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <br>
        @include('components.footer')
    </body>
</html>