@extends('layout.app')

@section('content')
<link rel="stylesheet" href="/css/style.css">
<div class="container">
    <div class="text-center my-5">
        <h1>Blog Posts</h1>
    </div>
    <hr>

    <div class="mb-2">
        <img class="w-100" style="height: 500px" src="{{asset( 'images/'. $post->image_path )}}">
    </div>

    By<span class="italic"> {{ $post->author }}</span> on {{ date('D M Y ', strtotime($post->created_at)) }} <br><br>


    <div>
        <h5>{{ $post->description }}</h5>
    </div>

</div>

@endsection
