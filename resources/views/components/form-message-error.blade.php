@if ($errors->has($field))
  @foreach ($errors->get($field) as $error)
    <p style="color: red; margin-bottom: .5rem; margin-top: .5rem">{{ $error }}</p>
  @endforeach
@endif