@extends('layout.app')

@section('body')

<div class="col-lg-4 col-lg-offset-4">
    <br>
    <a href="/mini" class="btn btn-info">Back</a>
    <br>
    <br>
    <h4>{{substr(Route::currentRouteName(), 5)}} item</h4>
    <form action="/mini/@yield('editId')" method="post">
  <fieldset>
      {{csrf_field()}}
      @section('editMethod')
        @show
      <div class="form-group">
        <input type="text" name="title" placeholder="Title" value="@yield('editTitle')" class="form-control">
      </div>
    <div class="form-group">
    <textarea class="form-control" name="body" placeholder="Body" rows="3">@yield('editBody')</textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </fieldset>
</form>
<br>
@include('mini.partial.error')
</div>

@endsection