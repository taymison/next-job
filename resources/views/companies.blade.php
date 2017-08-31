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
      <section class="main-section">
        <div class="wrapper wrapper--large-padding">
          <h1 class="main-section__title">Companies</h1>
          <h2 class="main-section__subtitle">Create a company</h2>
          <form class="form" id="new-company-form" action="{{ route('new-company') }}" method="post">
            {{ csrf_field() }}
            <label class="form__label" for="company-name">Name</label>
            <input class="form__form-control" id="company-name" type="text" name="name" placeholder="Name of company" value="{{ old('name') }}" required>
            @include('components.form-message-error', ['field' => 'name'])
            <br>
            <label class="form__label" for="company-site">Site</label>
            <input class="form__form-control" id="company-site" type="url" name="site" placeholder="https://www.company.com" value="{{ old('site') }}" required>
            @include('components.form-message-error', ['field' => 'site'])
            <br>
            <div class="row row--space-between">
                <div class="row__col">
                    <a class="form__form-control" type="button" href="/">Cancel</a>
                </div>
                <div class="row__col">
                    <input class="form__form-control" type="submit" value="Register">
                </div>
            </div>
          </form>
          <h2 class="main-section__subtitle">List of companies</h2>
          <table>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Site</th>
            </tr>
            @foreach ($companies as $company)
              <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->site }}</td>
              </tr>  
            @endforeach
          </table>
        </div>
      </section>
      <br>
      @include('components.footer')
    </body>
</html>