@extends('layout.app')

@section('body')
@include('mini.partial.message')
<div class="col-lg-5 col-lg-offset-5">
    <br>
    <a href="mini/create" class="btn btn-info">Add New</a>
    <center><h4>Mini List</h4></center>
    <ul class="list-group">
        @foreach($minis as $mini)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="col-sm-6">
                {{$mini->title}}
            </div>    
            <span class="pull-right">{{$mini->created_at->diffforhumans()}}</span>
            <div class="col-sm-2.5">
                <a href="{{'/mini/'.$mini->id.'/edit/'}}"><i class="fal fa-edit"></i></a>
                <a href="{{'/mini/'.$mini->id}}"><i class="fal fa-eye"></i></a>
                <form class="pull-right form-group" action="{{'/mini/'.$mini->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button style="border:none;" type="submit"><i class="fas fa-trash" style="cursor:pointer;color:red;"></i></button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>

@endsection