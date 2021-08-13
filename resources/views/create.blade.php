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
    <h3>Create Post</h3>
    <form action="{{ route('create') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control w-full"
         name="title" placeholder="Title..." id="" value="{{old('title')}}">  <br><br>

        <input type="text" class="form-control w-full"
         name="author" placeholder="Author" id="" value="{{ old('author') }}">

        <textarea name="description" class="form-control w-full" value="{{ old('description') }}"
         placeholder="Description" id="" cols="30" rows="10"></textarea><br><br>

        <h4>Select a file</h4><br>
        <input type="file" name="image" class="hidden" id=""><br><br>
        
        <button type="submit" class="btn btn-primary border-0 px-4 text-light w-full p-2 border-0 rounded-pill">Submit Post</button>
    </form>
</div>

<div class="text-center">
    <h4>
        Go To <a href="{{ route('blog') }}">Blog</a>
    </h4>
</div>


@endsection
