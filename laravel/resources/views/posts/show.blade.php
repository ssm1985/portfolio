@extends('shell')

@section('content')
    <br>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="row">
        <div class="col-md-2 col-lg-2">

        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-2 col-lg-2">

        </div>
    </div>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <br>
    <br>
    @if(Auth::user())
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection
