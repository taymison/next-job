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
      <br>
      @include('components.footer')
    </body>
</html>