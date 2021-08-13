@extends('layout.app')

@section('content')

@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->any as $error)
                <li class="">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

@endif
<div class="container jumbotron text-center mt-3" style="width: 50%">
    <h3>Update Post</h3>
    <form action="{{ route('update', $post->slug) }}" method="Post" enctype="multipart/form-data">
        @csrf

        <input type="text" class="form-control w-full" name="title"
         value="{{ $post->title }}" id=""><br><br>

        <input type="text" class="form-control w-full" name="author"
        value="{{ $post->author }}" id=""><br><br>

        <textarea name="description" class="form-control w-full"
        id="" cols="30" rows="10">{{ $post->description }}</textarea><br><br>

        <button type="submit" class="btn btn-primary border-0 px-4 text-light w-full p-2 border-0 rounded-pill">Submit Post</button>
    </form>
</div>




@endsection
