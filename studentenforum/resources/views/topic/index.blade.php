<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/topic-index.css') }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Topic Index</title>
</head>

<body>



    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('TOPIC INDEX') }}
            </h2>
            @if (session('status'))
                <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                    class="text-xl text-green-600">{{ session('status') }}</h2>
            @endif
        </x-slot>

        <div class="body-main-conteiner">

            <div id="body-box">

                <div class="body-container">
                    <div class="container" id="topic">

                        <div id="topic-top">
                            <p id="topic-title">
                                {{ $topic->title }}
                            </p>
                        </div>

                        <div id="topic-bottom">
                            <div
                                class="topic-owner-username inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Username: {{ $topic->user->username }}
                            </div>

                            <div
                                class="topic-owner-mail inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                E-mail: {{ $topic->user->email }}
                            </div>

                            <div
                                class="topic-category inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Category: {{ $topic->category }}
                            </div>

                            <div
                                class="topic-time inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Time: {{ $topic->created_at->format('d/m/Y \a\t H:m') }}
                            </div>

                            @if (Auth::user()->usertype == 'admin')
                                <a href="{{ route('topic.delete', $topic->id) }} "
                                    class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Delete
                                </a>
                            @endif


                        </div>




                    </div>



                    @foreach ($posts as $post)
                        <div class="container post">

                            <div class="post-title">
                                {{ $post->title }}
                            </div>

                            <div class="post-content">
                                {{ $post->content }}
                            </div>

                            <div class="post-bottom">

                                <div
                                    class="post-owner-username inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Username: {{ $post->user->username }}
                                </div>

                                <div
                                    class="post-owner-email inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    E-mail: {{ $post->user->email }}
                                </div>

                                <div
                                    class="post-time inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Time:: {{ $post->created_at->format('d/m/Y \a\t H:m') }}
                                </div>

                                @if (Auth::user()->id == $post->user_id || Auth::user()->usertype == 'admin')
                                    <a href="{{ route('post.delete', $post->id) }} "
                                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Delete
                                    </a>


                                    <div
                                        class="post-edit-btn inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Edit
                                    </div>
                                @endif

                            </div>

                            <div class="post-edit">
                                <form action="{{ route('post.edit', $post->id) }}" method="POST">
                                    @csrf
                                    <label class="labels" for="post_title">Post Title:</label>
                                    <x-text-input id="post_title" name="post_title" type="text"
                                        class="mt-1 block w-full" value="{{ $post->title }} " />
                                    <x-input-error class="mt-2" :messages="$errors->get('post_title')" />

                                    <label class="labels" for="content">Post Content:</label>
                                    <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content"
                                        id="content">{{ $post->content }} </textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('content')" />


                                    <button
                                        class="inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                        type="submit">Edit</button>
                                    <div
                                        class="post-edit-cancel-btn inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Cancel
                                    </div>
                                </form>
                            </div>



                        </div>
                    @endforeach


                </div>

                <div class="body-container new-post">

                    <form action="{{ route('post.store', $topic->id) }} " method="post">
                        @csrf
                        <div class="selections">
                            <label class="labels" for="post_title">Post Title:</label>
                            <x-text-input id="post_title" name="post_title" type="text" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('post_title')" />
                        </div>

                        <div class="selections">
                            <label class="labels" for="content">Post Content:</label>
                            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content"
                                id="content"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>

                        <div id="button">
                            <x-primary-button class="selections">{{ __('Create') }}</x-primary-button>
                        </div>
                    </form>

                </div>


            </div>

        </div>














    </x-app-layout>

    <script src="{{ asset('js/topic-index.js') }} "></script>
</body>

</html>
