@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-800">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
        <button id="test">test</button>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a
            href="/blog/create"
            class="bg-yellow-300 uppercase bg-transparent text-gray-900 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-yellow-300 text-gray-900 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
            
            <button id="like_button" class="ml-5 text-gray-700 hover:text-gray-900 pb-1" data-post-id="{{ $post->id }}">
                <i class="fas fa-thumbs-up"></i> {{$post->likes}} </button>
            
            <button id="dislike_button" class="ml-5 text-gray-700 hover:text-gray-900 pb-1" data-post-id="{{ $post->id }}"> 
                <i class="fas fa-thumbs-down"></i> {{$post->dislikes}}</button>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-900 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif


        </div>
    </div>
@endforeach
{{-- <script>
         function handleDislike(){
        var postId = $(this).data('post-id');
        console.log(postId)
        $.ajax({
            url: '/posts/' + postId + '/dislike',
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#dislikes-count').text(data.dislikes);
            }
        });
    }
</script> --}}
@endsection
