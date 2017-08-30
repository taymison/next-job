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
                <a href="{{ route('menu') }}">
                    <div class="logo logo--green logo--small">Next Job</div>
                </a>
                <a href="{{ route('menu') }}" title="Back to menu">
                    <img class="header__menu-icon" src="{{ asset('img/icons/menu.svg') }}" alt="Menu">
                </a>
            </div>
        </header>
        <section class="new-vacancy">
            <div class="wrapper wrapper--large-padding">
                <h1 class="new-vacancy__title">New Vacancy</h1>
                <form id="form-create-vacancy" action="{{ route('new-vacancy') }}" method="post">
                    {{ csrf_field() }}
                    @if (isset($companies))
                        <h2 class="new-vacancy__subtitle">Step 1 - Select a company</h2>
                        <div class="new-vacancy__companies-exist">
                            <label class="new-vacancy__label" for="company">Select a company</label>
                            <select class="new-vacancy__form-control" name="company_id" id="company" required>
                                <option value="" selected>- No company selected -</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                            <br>
                            <div class="row row--space-between">
                                <div class="row__col">
                                    <a class="new-vacancy__form-control" type="button">Edit companies</a>
                                </div>
                                <div class="row__col">
                                    <a href="#" class="new-vacancy__form-control" type="button">Create a company</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <h2 class="new-vacancy__subtitle">Step 1 - Create a company</h2>
                        <div class="new-vacancy__companies-not-exist">
                            <a class="new-vacancy__form-control" type="button">Create a company</a>
                        </div>
                    @endif
                    <br>
                    <br>
                    <h2>Step 2 - Create a vacancy</h2>
                    <label class="new-vacancy__label" for="vacancy-name">Name</label>
                    <input class="new-vacancy__form-control" id="vacancy-name" type="text" name="name" required>
                    <br>
                    <label class="new-vacancy__label" for="vacancy-description">Description</label>
                    <textarea class="new-vacancy__form-control" name="description" id="vacancy-description" cols="15" rows="5" required></textarea>
                    <br>
                    <label class="new-vacancy__label" for="vacancy-link">Link</label>
                    <input class="new-vacancy__form-control" type="url" name="link" required>
                    <br>
                    <label class="new-vacancy__label" for="vacancy-status">Status</label>
                    <select class="new-vacancy__form-control" name="status" id="vacancy-status" required>
                        @foreach ($possible_status as $status)
                            <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                    <br>
                    <div class="row row--space-between">
                        <div class="row__col">
                            <a class="new-vacancy__form-control" type="button" href="/">Cancel</a>
                        </div>
                        <div class="row__col">
                            <input class="new-vacancy__form-control" type="submit" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <br>
        @include('components.footer')
    </body>
</html>
