@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-10">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-3">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">
                {{ $post->user->name }},created on
                {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
        </span>
        <div class="pt-2">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="" srcset="" width="500" height="500">
        </div>
        <p class="text-xl text-gray=700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>
@endsection
