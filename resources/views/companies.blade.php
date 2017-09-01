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
          <h1 class="main-section__title">Companies</h1>
          @include('components.form-new-company')
          <br>
          <h2 class="main-section__subtitle">List of companies</h2>
          <div class="responsive-table">
            <table class="table">
              <tr>
                <th class="table__col table__col--title table__col--align-left">Name</th>
                <th class="table__col table__col--title table__col--align-left">Site</th>
                <th class="table__col table__col--title">Edit</th>
                <th class="table__col table__col--title">Delete</th>
              </tr>
              @foreach ($companies as $company)
                <tr>
                  <td class="table__col">{{ $company->name }}</td>
                  <td class="table__col">
                    <a href="{{ $company->site }}" target="_blank">{{ $company->site }}</a>
                  </td>
                  <td class="table__col">
                    <a href="{{ route('edit-company', ['id' => $company->id]) }}" title="Edit {{ $company->name }}">
                      <img class="table__icon" src="{{ asset('img/icons/edit.svg') }}">
                    </a>
                  <td class="table__col">
                    <a href="{{ route('delete-company', ['id' => $company->id]) }}" title="Delete {{ $company->name }}" onclick="return confirm('Are you sure delete {{ $company->name }}?\n\nWarning: this action can not be undone.\n')">
                      <img class="table__icon" src="{{ asset('img/icons/delete.svg') }}">
                    </a>
                </tr>  
              @endforeach
            </table>
          </div>
        </div>
      </section>
      <br>
      @include('components.footer')
    </body>
</html>