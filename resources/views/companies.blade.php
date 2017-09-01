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
          @include('components.form-new-company')
          <h2 class="main-section__subtitle">List of companies</h2>
          <table style="width: 100%">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Site</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            @foreach ($companies as $company)
              <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td><a href="{{ $company->site }}" target="_blank">{{ $company->site }}</a></td>
                <td>
                  <a href="{{ route('edit-company', ['id' => $company->id]) }}">
                    <img src="{{ asset('img/icons/edit.svg') }}" width="20" style="margin: 0 auto; display: block">
                  </a>
                <td>
                  <a href="{{ route('delete-company', ['id' => $company->id]) }}" onclick="return confirm('Are you sure delete {{ $company->name }}?')">
                    <img src="{{ asset('img/icons/delete.svg') }}" width="20" style="margin: 0 auto; display: block">
                  </a>
              </tr>  
            @endforeach
          </table>
        </div>
      </section>
      <br>
      @include('components.footer')
    </body>
</html>