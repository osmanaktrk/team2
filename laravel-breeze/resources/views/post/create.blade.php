<x-app-layout>
@section('title', 'Create a post')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/post-create.css') }} ">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{asset('js/components/post-create.js')}} "></script>
@endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('POST CREATE') }}
        </h2>
        @if (session('status'))
            <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                class="text-xl text-green-600">{{ session('status') }}</h2>
        @endif
    </x-slot>

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="box p-4 sm:p-8  shadow sm:rounded-lg">

                    <div class="container">
                        <span id="category_coose">{{ __('CHOOSE A CATEGORY') }}</span>
                        <div id="categories">
                            @foreach($categories as $category)
                            <div class="radios">
                                <label for="{{ $category->name }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    {{ __($category->name) }}
                                </label>
                                <input type="radio" name="category" id="{{ $category->name }}" value="{{ $category->name }}" style="display: none">
                            </div>
                            @endforeach
                        </div>
                        <span class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" 
                            id="category_select">{{ __('SELECTED CATEGORY : ') }}</span>
                        <x-input-error class="mt-2" :messages="$errors->get('category')" />
                    </div>
                </div>

                <div class="box p-4 sm:p-8  shadow sm:rounded-lg">
                    <div class="container input_labels">
                        <div class="selections">
                            <label class="labels" for="post_title">Post Title:</label>
                            <x-text-input id="post_title" name="post_title" type="text"
                                class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('post_title')" />
                        </div>

                        <div class="selections">
                            <label class="labels" for="content">Post Content:</label>
                            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content" id="content"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>

                        <div class="flex items-center justify-center gap-4">
                            @if (session('status') === 'Post Created')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)" class="text-xl text-green-600">
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
    @endsection
</x-app-layout>