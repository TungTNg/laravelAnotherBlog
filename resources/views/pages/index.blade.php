@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Laravel Blog!</h1>
        @if(Auth::guest())
        <p>To create or edit your blog posts, please create or login your account</p>
        <p><a class="btn btn-primary btn-lg" href="/laravelAnotherBlog/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/laravelAnotherBlog/register" role="button">Register</a></p>
        @else
        <p>Welcome back, please visit your dashboard page to manage your blog posts</p>
        <a href="/laravelAnotherBlog/dashboard" class="btn btn-success btn-lg">Dashboard</a>
        @endif
    </div>
@endsection