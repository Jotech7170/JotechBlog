@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2  px-4 font-bold text-xl uppercase rounded-s">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/nathan-da-silva-oFkRO55PUmo-unsplash.jpg') }}" alt="" srcset="" width="700">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to become a better a web developer ?
            </h2>
            <p class="py-8 text-gray-500 text-s">

                Are you Curious about Web Development?
                A Good Developer Should Be Willing to Learn.
                A Good Developer Should Not Create Code but Business Value.
                Strive to Always Improve your Code.
                A Good Developer should Embrace Challenges.
                Humility and Respect Should Drive your Work. </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                A Good Developer Should Be Interested. </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find out
                More.</a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in....
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            ux design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            digital strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend development
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            List the most recent posts
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    PHP is a general-purpose scripting language geared towards web development. It was originally created by
                    Danish-Canadian programmer Rasmus Lerdorf in 1994.
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find
                    out more</a>
            </div>
        </div>
        <div class="py-8">
            <img src="{{ asset('images/alex-knight-j4uuKnN43_M-unsplash1.jpg') }}" width="100%" height="100%">
        </div>
    </div>
@endsection
