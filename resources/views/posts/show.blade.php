@extends('layout.app')

@section('content')
<div class="container slidedown">
    <a href="/posts" class="btn btn-outline-dark slidedown">Go Back</a>
        <h1>{{$post->title}}</h1>
        <!--
        <img style="width:60%; margin:20px;" src="/storage/cover_images/{{$post->cover_image}}"> -->
        <div>
             {!!$post->body!!}
        </div>
        <hr>
        <small>Writtern on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
        <div class="float-right">
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        
        {!!Form::close()!!}
            @endif
        @endif

        </div>
        <div class="pushdown"></div>
</div>   

@endsection