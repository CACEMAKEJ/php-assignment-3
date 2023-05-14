@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl uppercase text-center border-b-4 border-yellow-300">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20 -mt-20">
    <span class="text-gray-700">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <div class=" w-4/5 mx-auto py-15 border-b border-gray-700 ">
        <div>
            <img class="blog_photo" src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
        </div>
    <p class="text-xl text-gray-200 pt-4 pb-10 pl-4 leading-8 font-bold bg-black border-t-2 border-yellow-300 ">
        {{ $post->description }}
    </p>

    <button id="like-button" class="ml-5 text-gray-700 hover:text-gray-900 pb-1 hover:text-green-500 mt-5" data-post-id="{{ $post->id }}">
        <i class="fas fa-thumbs-up"></i> {{$post->likes}} </button>

    <button id="dislike-button" class="ml-5 text-gray-700 hover:text-gray-900 pb-1 hover:text-red-500" data-post-id="{{ $post->id }}">
        <i class="fas fa-thumbs-down"></i> {{$post->dislikes}}</button>

</div>

@endsection
