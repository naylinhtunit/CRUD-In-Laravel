@extends('layout.app')

@section('body')

<div class="col-lg-4 col-lg-offset-4">
    <br>
<a class="btn btn-info" href="/mini">Home</a>
    <br>
    <br>
    <ul class="list-group list-group-item d-flex">
        <li class="list-group justify-content-between align-items-center">
            <h4>{{$item->title}}</h4>
            <p>{{$item->body}}</p>
        </li>
    </ul>
</div>

@endsection