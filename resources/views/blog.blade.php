@extends('layout.app')

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1>Blog Posts</h1>
    </div>
    <hr>

    @if (session('message'))
        <div class="border-danger">
            {{ session('message') }}
        </div>
    @endif

    @if (session('Invalid'))
        <div class="border-rounded bg-danger text-white mx-auto" style="width: 300px">
            {{session('Invalid')}}
        </div><br>
    @endif

    <div class="row">
    @foreach ($posts as $post)
        <div class="col-md-6">
               <img class="p-3" style="width: 80%" src="{{asset( 'images/'. $post->image_path )}}">
        </div>
        <div class="col-md-6 p-5">
            <h2>{{ $post->title }}</h2>
            By<span class="italic"> {{ $post->author }}</span> on {{ date('D M d Y', strtotime($post->created_at)) }} <br>
            <a href="{{ route('showUserPost', $post->id)}}"><button class="btn btn-primary text-black rounded-pill">Keep Reading</button></a><br>

            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <span> <a href="{{ route('update', $post->slug)  }}">Update Post</a> </span>
            <form action="{{ route('blog.destroy', $post->slug) }}" method="Post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete Post</button>
            </form>
            @endif
        </div>

    @endforeach
    </div>
</div>

@endsection
