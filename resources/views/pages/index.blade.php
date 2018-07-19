
       @extends('layout.app')

       @section('content')
       <div class="jumbotron text-center">
       <h1>{{$title}}</h1>
       <p>This is a Laravel application built from stratch!</p>
       <p><a class="btn btn-primary btn-lg " href="/login"> Login</a> <a class="btn btn-success btn-lg " href="/register"> Register</a>.</p>
       </div>
      @endsection