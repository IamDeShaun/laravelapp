@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    <div class="container slidedown">

                @if(count($posts) > 0 )
                @foreach($posts as $post)
                
                        <div class="card bg-light mb-1">
                            <!--
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> -->
                                <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                
                @endforeach
            @else
            <p>No posts found</p>
            @endif
        
    </div>
    <div class="pushdown">
        </div>
 
@endsection