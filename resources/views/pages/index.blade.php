@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
        <h1 class="display-4">{{$title}}</h1>
        <p>This is the laravel application from the "Laravel from scratch " Youtube series</p>
        <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
      </p>
        </div>
</div>
@auth <!-- your blade codes --> @endauth (check authenticated )
@guest <!-- your blade codes --> @endguest (check not authenticated )
@endsection

   
