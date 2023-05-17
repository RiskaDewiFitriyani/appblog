@extends('template.backend.theme')

@section('content')
<br>
<br>

@if($notif != null)
<div class="alert alert-info" role="alert">
  {{ $notif }}
</div>
@endif

<form method ="post" action="{{ current_url() }}">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" id="password" value="{{ $user->password }}">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection