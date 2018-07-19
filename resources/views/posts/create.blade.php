@extends('layout.app')

@section('content')
    <div class="container slidedown">
            <h1>Create Post</h1>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' => 'Body Text'])}}
                    </div>

                    <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-outline-dark'])}}
            {!! Form::close() !!}
            
    </div>
    <div class="pushdown">
        </div>
@endsection