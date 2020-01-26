@if(count($errors))
<div id="flash-message" class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
  @endforeach
</div>
@endif