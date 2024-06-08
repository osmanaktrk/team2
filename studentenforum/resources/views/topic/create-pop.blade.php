<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="{{ asset('css/topic-create-pop.css') }} ">
    <title>Create Topic</title>
</head>

<body class="create-pop">





    <main>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form action="{{ route('topic.create') }}" method="post">
                    @csrf
                    <div class="shadow sm:rounded-lg" style="border-radius: 50px" id="category-box">
                        
                        <div class="container">

                            <span id="category_choose">CHOOSE A CATEGORY</span>

                            <div id="popup-close">
                                <svg width="30" height="30" viewbox="0 0 40 40">
                                    <path d="M 10,10 L 30,30 M 30,10 L 10,30" stroke="white" stroke-width="5" />
                                </svg>
                            </div>

                            <div id="categories">
                                <div class="radios">
                                    <label for="General"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        GENERAL
                                    </label>
                                    <input type="radio" name="category" id="General" value="General"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Education"
                                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        EDUCATION
                                    </label>
                                    <input type="radio" name="category" id="Education" value="Education"
                                        style="display: none">

                                </div>

                                <div class="radios">
                                    <label for="Game"
                                        class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        GAMES
                                    </label>
                                    <input type="radio" name="category" id="Game" value="Game"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Movie"
                                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        MOVIES
                                    </label>
                                    <input type="radio" name="category" id="Movie" value="Movie"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Music"
                                        class="inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        MUSIC
                                    </label>
                                    <input type="radio" name="category" id="Music" value="Music"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Nature"
                                        class="inline-flex items-center px-4 py-2 bg-orange-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        NATURE
                                    </label>
                                    <input type="radio" name="category" id="Nature" value="Nature"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Politic"
                                        class="inline-flex items-center px-4 py-2 bg-pink-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 focus:bg-pink-700 active:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        POLITICS
                                    </label>
                                    <input type="radio" name="category" id="Politic" value="Politic"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Social"
                                        class="inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        SOCIAL
                                    </label>
                                    <input type="radio" name="category" id="Social" value="Social"
                                        style="display: none">
                                </div>

                                <div class="radios">
                                    <label for="Sience"
                                        class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="cursor:pointer">
                                        SCIENCE
                                    </label>
                                    <input type="radio" name="category" id="Sience" value="Sience"
                                        style="display: none">
                                </div>


                            </div>
                            <span
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                id="category_select">SELECTED CATEGORY : </span>
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />

                        </div>


                    </div>

                    <div class="shadow sm:rounded-lg" style="border-radius: 50px">
                        <div class="container input_labels">
                            <div class="selections">
                                <label class="labels" for="topic_title">Topic Title:</label>
                                <x-text-input id="topic_title" name="topic_title" type="text"
                                    class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('topic_title')" />
                            </div>

                            <div class="selections">
                                <label class="labels" for="post_title">Post Title:</label>
                                <x-text-input id="post_title" name="post_title" type="text"
                                    class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('post_title')" />
                            </div>

                            <div class="selections">
                                <label class="labels" for="content">Post Content:</label>
                                <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content"
                                    id="content"></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <div class="flex items-center justify-center gap-4">
                                @if (session('status') === 'Topic Created')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                                        class="text-xl text-green-600">
                                        {{ __('Saved') }}</p>
                                @endif
                            </div>




                            <div id="button">
                                <x-primary-button class="selections">{{ __('Create') }}</x-primary-button>
                            </div>
                        </div>


                    </div>

                </form>


            </div>
        </div>



    </main>





    <script src="{{ asset('js/topic-create-pop.js') }} "></script>
</body>

</html>
