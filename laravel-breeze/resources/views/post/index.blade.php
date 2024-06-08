<x-app-layout>
@section('title', 'Post ' . $post->id)

@push('head')
    <link rel="stylesheet" href="{{ asset('css/post-index.css') }} ">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/components/post-index.js') }} "></script>
@endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
        @if (session('status'))
            <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                class="text-xl text-green-600">{{ session('status') }}</h2>
        @endif
    </x-slot>

    @section('content')
    <div class="body-main-conteiner">

        <div id="body-box">

            <div class="body-container">
                <div class="container post">

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
                            class="post-category inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Category: {{ $post->category->name }}
                        </div>

                        <div
                            class="post-time inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Time: {{ $post->created_at->format('d/m/Y \a\t H:m') }}
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
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>