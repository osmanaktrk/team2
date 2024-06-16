@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('title')
    <title>MAIN</title>
@endsection

@section('content')
    <div class="main">

        <div class="left-menu">

            <button class="leftmenu-top" id="leftmenu-top-one">

                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>

                </div>

                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Profile') }}
                </div>

            </button>








            <button class="leftmenu-top" id="leftmenu-top-one">

                <div class="left-manage-assetdiv">
                    <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}"
                        alt="profile">
                </div>

                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Profile') }}
                </div>
            </button>












            <button class="leftmenu-top">

                <div class="left-manage-assetdiv">
                    <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}"
                        alt="">
                </div>

                <div class="left-manage-word">
                    {{ __('Dashboard') }}
                </div>
            </button>

            <button class="leftmenu-top" o>

                <div class="left-manage-assetdiv">
                    <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}"
                        alt="">
                </div>

                <div class="left-manage-word">
                    {{ __('Review') }}
                </div>
            </button>

            <button class="leftmenu-top">

                <div class="left-manage-assetdiv">
                    <img class="left-manage-asset" src="" alt="">
                </div>

                <div class="left-manage-word">
                    {{ __('FAQ') }}
                </div>
            </button>

            <button class="leftmenu-top">
                <div class="left-manage-assetdiv">
                    <img class="left-manage-asset" src="" alt="">
                </div>
                <div class="left-manage-word">
                    {{ __('Contact') }}
                </div>
            </button>



            <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    {{ __('Categories') }}
                </div>

            </button>

            <div class="content">


                @foreach ($categories as $category)
                    <div class="collapsible-contentbutton">

                        <label class="left-manage-assetdiv ">
                            <input class="all-categories left-manage-word icon" type="checkbox" value="{{ $category->id }}"
                                name="{{ $category->id }}" id="{{ $category->id }}" checked>
                            {{ $category->category }}
                        </label>

                    </div>
                @endforeach





            </div>

            {{-- <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    {{ __('Tags') }}
                </div>

            </button>

            <div class="content">

                <button class="collapsible-contentbutton">

                    <div class="left-manage-assetdiv">
                        <div class="icon general"></div>
                    </div>

                    <div class="left-manage-word">
                        {{ __('News') }}
                    </div>

                </button>

                <button class="collapsible-contentbutton">

                    <div class="left-manage-assetdiv">
                        <div class="icon feedback"></div>
                    </div>

                    <div class="left-manage-word">
                        {{ __('Blog') }}
                    </div>

                </button>

                <button class="collapsible-contentbutton">

                    <div class="left-manage-assetdiv">
                        <div class="icon staff"></div>
                    </div>

                    <div class="left-manage-word">
                        {{ __('Code') }}
                    </div>

                </button>

            </div>

            <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    {{ __('Channels') }}
                </div>

            </button>

            <div class="content">

                <button class="collapsible-contentbutton">

                    <div class="left-manage-assetdiv">
                        <div class="icon general2"></div>
                    </div>

                    <div class="left-manage-word">
                        {{ __('General') }}
                    </div>

                </button>

                <button class="collapsible-contentbutton">

                    <div class="left-manage-assetdiv">
                        <div class="icon staff"></div>
                    </div>

                    <div class="left-manage-word">
                        {{ __('Staff') }}
                    </div>

                </button>

                </button>

            </div> --}}

        </div>

        <div class="divider">
        </div>

        <div class="right">
            <div class="right-ceiling">
                <div class="right-sorting">

                    <label class="sortingbutton" for="all-posts">
                        All Posts
                        <input type="checkbox" name="all-posts" id="all-posts" checked>
                    </label>

                    {{-- <label class="sortingbutton" for="unread">
                        Unread
                        <input type="checkbox" name="unread" id="unread">
                    </label>


                    <label class="sortingbutton" for="favoride">
                        My Fovorites
                        <input type="checkbox" name="favorite" id="favorite">
                    </label> --}}




                </div>

                <div class="search-bar-container">
                    <div class="text-center">
                        <div class="search-bar">
                            <label>
                                <input class="input-search-bar" type="search" placeholder="{{ __('Search') }}"
                                    aria-label="Search">
                                <button class="submit-search-btn">{{ __('Search') }}</button>
                            </label>


                        </div>
                    </div>
                </div>

                <button class="createpostbutton">
                    {{ __('+ New Post') }}
                </button>

                <div id="postPopup" class="popup">
                    <div class="popup-content">
                        <span class="popup-close">&times;</span>
                        <h2>{{ __('Create New Post') }}</h2>
                        <form id="postForm">
                            <label for="postTitle">{{ __('Post Title:') }}</label>
                            <input type="text" id="postTitle" name="title" required>

                            <label for="postContent">{{ __('Post Content:') }}</label>
                            <textarea id="postContent" name="content" required></textarea>

                            <label for="postCategory">{{ __('Category:') }}</label>
                            <select id="postCategory" name="category">
                                <option value="education">{{ __('Education') }}</option>
                                <option value="general">{{ __('General') }}</option>
                            </select>

                            <button type="submit">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>



            <div class="postbar">
                <div class="posts-container">

                    @foreach ($posts as $post)
                        @if ($post->is_published)
                            <div class="post" category="{{ $post->category->id }}"
                                {{-- @foreach ($post->favorites as $favorite)
                                            @if ($favorite->user_id == Auth::user()->id)
                                                favorite="true"
                                            @endif @endforeach --}}


                                {{-- @foreach ($post->readeds as $readed)
                                        @if ($readed->user_id == Auth::user()->id)
                                           readed="true"
                                        @endif @endforeach --}}


                                title="{{ $post->title }}">






                                <div class="post-header">
                                    <a href="{{ route('post-index', $post->id) }}">
                                        <h3 class="post-header-text">{{ $post->title }}</h3>
                                    </a>
                                </div>
                                <div class="post-body">

                                    {{-- <div class="post-body-profile-button">
                                   
                                    <a href="">

                                        <span>Category</span>
                                        <img class="post-body-asset" src="" alt="profile-button">

                                    </a>

                                </div> --}}

                                </div>
                                <div class="post-footer">
                                    <div>
                                        <button class="share-report-btn">Category:
                                            {{ $post->category->category }}</button>

                                        <button class="share-report-btn">Comments:
                                            @if ($post->comments == null)
                                                0
                                            @else
                                                {{ $post->comments->count() }}
                                            @endif

                                        </button>

                                        {{-- <span class="post-comments-amount">Comments: </span> --}}
                                    </div>



                                    <div class="category-container">
                                        <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag"
                                            class="category-image">
                                        <span>by
                                            @if (isset($post->user->username))
                                                <a href="{{ route('profile-index') }}">
                                                    <button class="btn btn-link font-weight-light" aria-expanded="true"
                                                        aria-controls="collapseOne"
                                                        style="color: #1ABCB6;">{{ $post->user->username }}</button>

                                                </a>
                                            @else
                                                <span class="error">Deleted User</span>
                                            @endif
                                            at
                                            {{ $post->created_at->format('d/M/Y H:i') }}
                                        </span>

                                    </div>

                                    <div>
                                        {{-- <button class="upvote-downvote-btn">Unreaded</button> --}}

                                        @foreach ($post->readeds as $readed)
                                            @if ($readed->user_id == Auth::user()->id)
                                                <button class="share-report-btn">Readed</button>
                                            @endif
                                        @endforeach

                                        @foreach ($post->favorites as $favorite)
                                            @if ($favorite->user_id == Auth::user()->id)
                                                <button class="share-report-btn">Favorite</button>
                                            @endif
                                        @endforeach




                                        <button class="upvote-downvote-btn">Likes:

                                            @if ($post->postLikes == null)
                                                0
                                            @else
                                                {{ $post->postLikes->count() }}
                                            @endif


                                        </button>
                                        <button class="upvote-downvote-btn">Dislikes:

                                            @if ($post->postDislikes == null)
                                                0
                                            @else
                                                {{ $post->postDislikes->count() }}
                                            @endif



                                        </button>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <div class="pagination" id="pagination"></div>

                </div>
            </div>






        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
