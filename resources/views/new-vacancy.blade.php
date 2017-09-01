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
        @include('components.header')
        <section class="main-section">
            <div class="wrapper wrapper--large-padding">
                <h1 class="main-section__title">New Vacancy</h1>
                <form class="form" id="form-create-vacancy" action="{{ route('new-vacancy') }}" method="post">
                    {{ csrf_field() }}
                    @if (isset($companies))
                        <h2 class="main-section__subtitle">Step 1 - Select a company</h2>
                        <div class="main-section__companies-exist">
                            <label class="form__label" for="company">Select a company</label>
                            <select class="form__form-control" name="company_id" id="company" required>
                                <option value="" selected>- No company selected -</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}" @if ($company->id == old('company_id')) {{ 'selected' }} @endif>{{ $company->name }}</option>
                                @endforeach
                            </select>
                            @include('components.form-message-error', ['field' => 'company_id'])
                            <br>
                            <div class="row row--space-between">
                                <div class="row__col">
                                    <a href="{{ route('companies') }}" class="form__form-control" type="button">Create or edit a company</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <h2 class="main-section__subtitle">Step 1 - Create a company</h2>
                        <div class="main-section__companies-not-exist">
                            <a href="{{ route('companies') }}" class="form__form-control" type="button">Create a company</a>
                        </div>
                    @endif
                    <br>
                    <br>
                    <h2>Step 2 - Create a vacancy</h2>
                    <label class="form__label" for="vacancy-name">Name</label>
                    <input class="form__form-control" id="vacancy-name" type="text" name="name" placeholder="Name of vacancy" value="{{ old('name') }}" required>
                    @include('components.form-message-error', ['field' => 'name'])
                    <br>
                    <label class="form__label" for="vacancy-description">Description</label>
                    <textarea class="form__form-control" name="description" id="vacancy-description" cols="15" rows="5" placeholder="Short description of vacancy" required>{{ old('description') }}</textarea>
                    @include('components.form-message-error', ['field' => 'description'])
                    <br>
                    <label class="form__label" for="vacancy-link">Link</label>
                    <input class="form__form-control" type="url" name="link" placeholder="https://www.vacancy.com" value="{{ old('link') }}" required>
                    @include('components.form-message-error', ['field' => 'link'])
                    <br>
                    <label class="form__label" for="vacancy-status">Status</label>
                    <select class="form__form-control" name="status" id="vacancy-status" required>
                        @foreach ($possible_status as $status)
                            <option value="{{ $status }}" @if ($status == old('status')) {{ 'selected' }} @endif>{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                    @include('components.form-message-error', ['field' => 'status'])
                    <br>
                    <div class="row row--space-between">
                        <div class="row__col">
                            <a class="form__form-control" type="button" href="{{ route('new-vacancy') }}">Cancel</a>
                        </div>
                        <div class="row__col">
                            <input class="form__form-control" type="submit" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <br>
        @include('components.footer')
    </body>
</html>
