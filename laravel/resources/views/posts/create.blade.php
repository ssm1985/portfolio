@extends('index')

@section('content')
    @if(Auth::user())
        <h1>Create Post</h1>
        {!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body text'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    @else
        <h4>You must be <a href="/login">logged in</a> to create a post.</h4>
    @endif


@endsection
