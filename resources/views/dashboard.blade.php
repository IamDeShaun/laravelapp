@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="slidedown">
                    <a class="btn btn-dark" href="/posts/create">CREATE POST</a>
                    </div>
                    <h3>Your Blog Post</h3>
                    @if(count($posts) >0)
                        <table class="table table-striped table-dark">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a></td>
                                        <td>
                                                <div class="float-right">
                                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>'POST', 'class' => 'pull-right'])!!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                        
                                                        {!!Form::close()!!}
                                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        @else 
                        <p>You have no post!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
