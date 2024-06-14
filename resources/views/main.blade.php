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
                    <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}"
                        alt="">
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
                    <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}"
                        alt="">
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

                

                <button class="collapsible-contentbutton">

                    <label class="left-manage-assetdiv ">
                        <input class="left-manage-word icon" type="checkbox" name="a" id="a">
                        {{ __('General') }}
                    </label>

                </button>

                <button class="collapsible-contentbutton">

                    <label class="left-manage-assetdiv ">
                        <input class="left-manage-word icon" type="checkbox" name="b" id="a">
                        {{ __('General') }}
                    </label>

                </button>

                
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
                    <button class="sortingbutton">{{ __('All categories') }}</button>
                    <button class="sortingbutton">{{ __('Unread') }}</button>
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

                    <div class="post">
                        <div class="post-header">
                            <h3 class="post-header-text">POST TITLE Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquid quos commodi dolore cupiditate libero iure eos unde, dolores obcaecati, laudantium officiis qui nihil sequi aspernatur repellat assumenda! Optio excepturi fugit eligendi assumenda dolorum commodi obcaecati, temporibus iure iste minus? Numquam, aspernatur tempore cupiditate eveniet architecto deleniti inventore aliquid neque velit ipsa repellendus in asperiores magnam tempora incidunt iste eos rerum ab explicabo, officiis sapiente quibusdam similique fugit. Odit voluptates dignissimos cumque maiores incidunt architecto iste impedit. Architecto nobis exercitationem perferendis recusandae dignissimos nisi, voluptas dicta et impedit. Amet aliquid qui sapiente. Eaque veniam modi et labore quis obcaecati vitae?</h3>
                        </div>
                        <div class="post-body">
                            <div class="post-body-profile-button">
                                <a href="">
                                    <img class="post-body-asset" src="{{ asset('img/icon.jpg') }}" alt="profile-button">

                                </a>
                            
                            </div>
                            <span>postu kim yazdi profil fotogrefi</span>
                        </div>
                        <div class="post-footer">
                            <div>
                                <button class="upvote-downvote-btn">{{ __('Upvote') }}</button>
                                <button class="upvote-downvote-btn">{{ __('Downvote') }}</button>
                                <span class="post-comments-amount">post kaç commenti var{{ __('Comments') }}</span>
                            </div>

                            <div class="category-container">
                                <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag" class="category-image">
                                <span class="category-text">ne zaman yazilmis</span>
                            </div>

                            <div>
                                <button class="share-report-btn">{{ __('Share') }}</button>
                                <button class="share-report-btn">{{ __('Report') }}</button>
                            </div>
                        </div>
                    </div>


                    <div class="pagination" id="pagination"></div>

                   
                </div>
            </div>
            
        </div>
        
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
