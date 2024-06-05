@extends('layouts.app')

@section('full-title', 'Main')

@push('head')
  <link rel="stylesheet" href="{{ asset('css/main.css') }} ">
@endpush

@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Main') }}
        </h2>
        @if (session('status'))
            <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                class="text-xl text-green-600">{{ session('status') }}</h2>
        @endif

    </x-slot>


    <div id="popup-container">
        <div id="popup">
            @include('post.create-pop')
        </div>
    </div>

    <div id="body-main-conteiner">
        <div id="body-container">

            <div id="body-left">

                <label for="all-topics"
                        class="cat-select inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        ALL POSTS:<span class="total">{{$posts->count()}}</span>
                </label>
                <input type="checkbox" name="all-topics" id="all-topics" value="all-topics" style="display: none" checked>
                
                <span id="head-cat">CATEGORIES</span>

                
                    <label for="General"
                        class="cat-select inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        GENERAL
                    </label>
                    <input type="checkbox" name="category" id="General" value="General" style="display: none" checked>
                

                
                    <label for="Education"
                        class="cat-select inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        EDUCATION
                    </label>
                    <input type="checkbox" name="category" id="Education" value="Education" style="display: none" checked>

                

                
                    <label for="Game"
                        class="cat-select inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        GAME
                    </label>
                    <input type="checkbox" name="category" id="Game" value="Game" style="display: none" checked>
                

                
                    <label for="Movie"
                        class="cat-select inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        MOVIE
                    </label>
                    <input type="checkbox" name="category" id="Movie" value="Movie" style="display: none" checked>
              

                
                    <label for="Music"
                        class="cat-select inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        MUSIC
                    </label>
                    <input type="checkbox" name="category" id="Music" value="Music" style="display: none" checked>
              

                
                    <label for="Nature"
                        class="cat-select inline-flex items-center px-4 py-2 bg-orange-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        NATURE
                    </label>
                    <input type="checkbox" name="category" id="Nature" value="Nature" style="display: none" checked>
                

                
                    <label for="Politic"
                        class="cat-select inline-flex items-center px-4 py-2 bg-pink-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 focus:bg-pink-700 active:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        POLITIC
                    </label>
                    <input type="checkbox" name="category" id="Politic" value="Politic" style="display: none" checked>
                

                
                    <label for="Social"
                        class="cat-select inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        SOCIAL
                    </label>
                    <input type="checkbox" name="category" id="Social" value="Social" style="display: none" checked>
              

                
                    <label for="Sience"
                        class="cat-select inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        SIENCE
                    </label>
                    <input type="checkbox" name="category" id="Sience" value="Sience" style="display: none" checked>
                



            </div>

            <div id="body-right">

                <div id="body-rigt-nav">
                    <div id="body-rigt-nav-top">

                        <div id="general-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            GENERAL <span class="close-sembol">X</span>
                        </div>

                        <div id="education-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            EDUCATION <span class="close-sembol">X</span>
                        </div>

                        <div id="game-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            GAME <span class="close-sembol">X</span>
                        </div>

                        <div id="movie-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            MOVIE <span class="close-sembol">X</span>
                        </div>

                        <div id="music-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            MUSIC <span class="close-sembol">X</span>
                        </div>

                        <div id="nature-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-orange-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            NATURE <span class="close-sembol">X</span>
                        </div>

                        <div id="politic-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-pink-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 focus:bg-pink-700 active:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            POLITIC <span class="close-sembol">X</span>
                        </div>

                        <div id="social-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            SOCIAL <span class="close-sembol">X</span>
                        </div>

                        <div id="science-selected"
                            class="close-selected inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            SIENCE <span class="close-sembol">X</span>
                        </div>
                    </div>

                    <div id="body-rigt-nav-bottom">
                        

                        <div id="search-div">
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="search" name="search" id="search" placeholder="Search">
                            <label id="search-sembol" for="search">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#5f6368"><path d="M792-120.67 532.67-380q-30 25.33-69.64 39.67Q423.39-326 378.67-326q-108.44 0-183.56-75.17Q120-476.33 120-583.33t75.17-182.17q75.16-75.17 182.5-75.17 107.33 0 182.16 75.17 74.84 75.17 74.84 182.27 0 43.23-14 82.9-14 39.66-40.67 73l260 258.66-48 48Zm-414-272q79.17 0 134.58-55.83Q568-504.33 568-583.33q0-79-55.42-134.84Q457.17-774 378-774q-79.72 0-135.53 55.83-55.8 55.84-55.8 134.84t55.8 134.83q55.81 55.83 135.53 55.83Z"/></svg>
                            </label>
                        </div>

                        <div id="popup-open"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            + New Post
                        </div>
                    </div>
                </div>

                <div id="body-right-content">

                    @foreach ($posts as $post)
                        
                    <div class="topics" category="{{$post->category}}" title="{{$post->title}}">
                        <div class="topic-top">
                            <a class="topic-title" href="{{route('post.index', $post->id)}}">{{$post->title}}</a>
                            
                        </div>

                        <div class="topic-bottom">
                        
                            <div 
                            class="topic-owner-username inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Username: {{$post->user->firstname}}
                            </div>

                            <div 
                            class="topic-owner-mail inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            E-mail: {{$post->user->email}}
                            </div>

                            <div 
                            class="topic-category inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Category: {{$post->category}}
                            </div>

                            <div 
                            class="topic-time inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Time: {{$post->created_at->format('d/m/Y \a\t H:m')}}
                            </div>
                        
                            
                        </div>
                        
                        
                    </div>

                    @endforeach

                    
                    
                    

                    

                </div>


            </div>


        </div>





    </div>












<script src="{{ asset('js/components/main.js') }} "></script>
@endsection
