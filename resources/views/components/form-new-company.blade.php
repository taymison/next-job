<h2 class="main-section__subtitle">
  @if (isset($company))
    Edit the company
  @else
    Create a company  
  @endif
</h2>
<form class="form" id="new-company-form" action="{{ isset($company) ? route('update-company') : route('new-company') }}" method="post">
  @if (isset($company))
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value="{{ $company->id }}">
  @endif
  {{ csrf_field() }}
  <label class="form__label" for="company-name">Name</label>
  <input class="form__form-control" id="company-name" type="text" name="name" placeholder="Name of company" value="{{ isset($company) ? $company->name : old('name') }}" required>
  @include('components.form-message-error', ['field' => 'name'])
  <br>
  <label class="form__label" for="company-site">Site</label>
  <input class="form__form-control" id="company-site" type="url" name="site" placeholder="https://www.company.com" value="{{ isset($company) ? $company->site : old('site') }}" required>
  @include('components.form-message-error', ['field' => 'site'])
  <br>
  <div class="row row--space-between">
      <div class="row__col">
          <a class="form__form-control" type="button" href="{{ route('companies') }}">Cancel</a>
      </div>
      <div class="row__col">
          <input class="form__form-control" type="submit" value="{{ isset($company) ? 'Update' : 'Register' }}">
      </div>
  </div>
</form>