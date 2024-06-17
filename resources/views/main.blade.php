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

            <a href="{{ route('welcome') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Welcome') }}
                </div>
            </a>

            <a href="{{ route('main') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Main') }}
                </div>
            </a>

            @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'writer')
                <a href="{{ route('post-create') }}" class="leftmenu-top" id="leftmenu-top-one">
                    <div class="left-manage-assetdiv">
                        <div class="icon gainsboro"></div>
                    </div>
                    <div class="left-manage-word" id="collapsible-topics">
                        {{ __('New Post') }}
                    </div>
                </a>
            @endif




            <a href="{{ route('contact-admin') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Contact Admin') }}
                </div>
            </a>

            <a href="{{ route('profile-index') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Profile') }}
                </div>
            </a>

            @if (Auth::user()->usertype == 'admin')
                <a href="" class="leftmenu-top" id="leftmenu-top-one">
                    <div class="left-manage-assetdiv">
                        <div class="icon gainsboro"></div>
                    </div>
                    <div class="left-manage-word" id="collapsible-topics">
                        {{ __('Admin Dashboard') }}
                    </div>
                </a>
            @endif










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

                        <form action="{{route('post-create')}}" method="post" enctype="multipart/form-data">

                            @csrf
                    
                            <section class="post-create-section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                    
                    
                    
                                            <div class="text-justify mb-4">
                    
                                                <hr>
                                                <h1 class="font-weight-lighter text-primary text-center mb-3">POST CREATE</h1>
                                                <hr>
                                                <br>
                                                <div class="row justify-content-center align-items-center">
                    
                                                    @error('category_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <select class="btn btn-light btn-outline-info" name="category_id" id="post-category"
                                                        required>
                                                        <option selected disabled value="0">Select A Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                    
                                                </div>
                    
                    
                    
                    
                                            </div>
                    
                                            <hr>
                                            <br>
                    
                    
                    
                                            <div class="accordion">
                                                <div class="card">
                    
                                                    <div class="card-header row justify-content-around align-items-center">
                    
                                                        <div class="text-muted font-weight-light">
                                                            <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="false"
                                                                aria-controls="collapseOne">Upload A Cover</span>
                    
                                                            @error('post_cover')
                                                                <span class=" text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                    
                                                    </div>
                    
                                                    <div id="collapseOne" class="collapse font-weight-light">
                                                        <div class="card-body bg-dark row justify-content-center align-items-center">
                                                            <img class="post-cover" src="" alt="post-cover">
                                                        </div>
                                                        <div class=" text-center m-4">
                                                            <input class="btn btn-outline-info" accept="image/*" type="file"
                                                                name="post_cover" id="post-cover">
                                                        </div>
                                                    </div>
                    
                                                </div>
                    
                    
                                                <br>
                                                <hr>
                                                <h2 class="font-weight-lighter mb-3 text-center">Title</h2>
                                                @error('title')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                                <hr>
                                                <div class="text-justify mb-4">
                    
                                                    <div class=" p-3 text-muted font-weight-light">
                                                        <textarea class="form-control font-weight-lighter" required name="title" id="title" rows="10"
                                                            placeholder="{{ old('title') }}"></textarea>
                                                    </div>
                    
                                                    <hr>
                    
                    
                    
                                                    <div class="card">
                                                        <div class="card-body row justify-content-around align-items-center">
                    
                                                            <div class="text-muted font-weight-light">
                                                                <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                                    data-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">Upload A File</span>
                                                                @error('post_file_name')
                                                                    <span class=" text-danger">{{ $message }}</span>
                                                                @enderror
                    
                                                                @error('post_file')
                                                                    <span class=" text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                    
                                                        </div>
                    
                                                        <div id="collapseTwo" class="collapse font-weight-light">
                    
                                                            <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                                                style="background-color: #1ABCB6;">
                    
                    
                                                                <label class=" btn btn-outline-primary" for="post_file_name">File Name:
                                                                    <input type="text" name="post_file_name" id="post-file-name" >
                                                                </label>
                    
                    
                    
                                                                <input class=" btn btn-primary" type="file" name="post_file" id="post-file" accept=".zip,.rar,.7zip">
                                                            </div>
                    
                                                        </div>
                    
                                                    </div>
                    
                    
                    
                    
                    
                    
                                                </div>
                    
                                            </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                        </div>
                                    </div>
                                </div>
                            </section>
                    
                            <section class="post-create-section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                    
                                            <div class="text-center mb-4">
                                                <h2 class="font-weight-lighter text-primary text-center mb-3">COMMENT</h2>
                                                <div class="block" style="background-color: #1ABCB6;"></div>
                                                <p class="text-muted font-weight-light"></p>
                                            </div>
                    
                    
                    
                    
                                            <div class="accordion mb-5">
                    
                    
                                                <div class="card mt-5">
                    
                                                    <div class="card-header row justify-content-center align-items-center">
                    
                                                        <div class="text-muted text-center font-weight-light">
                                                            <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">Upload A Cover</span>
                                                            @error('comment_cover')
                                                                <span class=" text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                    
                    
                                                    </div>
                    
                    
                    
                                                    <div id="collapseThree" class="collapse font-weight-light">
                                                        <div class="card-body bg-dark row justify-content-center align-items-center">
                                                            <img class="comment-cover " src="" alt="comment-cover">
                                                        </div>
                                                        <div class=" text-center m-4">
                                                            <input class="btn btn-outline-info" accept="image/*" type="file"
                                                                name="comment_cover" id="comment-cover">
                                                        </div>
                                                    </div>
                    
                    
                    
                    
                    
                    
                                                    <div class="font-weight-light">
                    
                                                        <div class="card-body">
                                                            <hr>
                                                            <p class="font-weight-lighter mb-3 text-center">Comment</p>
                                                            @error('comment')
                                                                <span class=" text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <hr>
                                                        </div>
                    
                                                        <div class=" p-3 text-muted font-weight-light">
                                                            <textarea class="form-control font-weight-lighter" required name="comment" id="comment" rows="10"
                                                                placeholder="{{ old('comment') }}"></textarea>
                                                        </div>
                    
                    
                    
                                                    </div>
                    
                    
                    
                    
                                                    <div class="card">
                                                        <div class="card-body row justify-content-around align-items-center">
                    
                                                            <div class="text-muted font-weight-light">
                                                                <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                                    data-target="#collapseFour" aria-expanded="false"
                                                                    aria-controls="collapseFour">Upload A File</span>
                    
                    
                                                                @error('comment_file_name')
                                                                    <span class=" text-danger">{{ $message }}</span>
                                                                @enderror
                    
                                                                @error('comment_file')
                                                                    <span class=" text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                    
                                                        </div>
                    
                                                        <div id="collapseFour" class="collapse font-weight-light">
                    
                                                            <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                                                style="background-color: #1ABCB6;">
                    
                                                                <label class=" btn btn-outline-primary" for="comment-file-name">File Name:
                                                                    <input type="text" name="comment_file_name" id="comment-file-name">
                                                                </label>
                    
                                                                <input class=" btn btn-primary" type="file" name="comment_file"
                                                                    id="comment-file" accept=".zip,.rar,.7zip">
                                                            </div>
                    
                                                        </div>
                    
                                                    </div>
                                                    <br>
                                                </div>
                    
                    
                    
                    
                                            </div>
                                            <hr>
                    
                    
                                            
                    
                    
                                        </div>
                                    </div>
                                    <hr>
                                    <div class=" card-footer row justify-content-center">
                                        <input class="btn btn-success" type="submit" value="SUBMIT">
                                    </div>
                                    <hr>
                                </div>
                            </section>
                    
                    
                        </form>





                    




                    </div>
                </div>
            </div>

            <div></div>

            <div class="postbar">
                <div class="posts-container">

                    @foreach ($posts as $post)
                        @if ($post->is_published)
                            <div class="post" category="{{ $post->category->id }}" {{-- @foreach ($post->favorites as $favorite)
                                            @if ($favorite->user_id == Auth::user()->id)
                                                favorite="true"
                                            @endif @endforeach --}}
                                {{-- @foreach ($post->readeds as $readed)
                                        @if ($readed->user_id == Auth::user()->id)
                                           readed="true"
                                        @endif @endforeach --}} title="{{ $post->title }}">






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
