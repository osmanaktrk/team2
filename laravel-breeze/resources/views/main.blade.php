@extends('layouts.app')

@section('title', 'Main')

@push('head')
  <link rel="stylesheet" href="{{ asset('css/MainPagina-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/MainPagina-main.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
@endpush

@section('content')
<div class="header">

  <div class="header-left">
    
    <!-- <button class="header-expansion-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
      <img class="expansionbutton-asset" src="{{ asset('img/main/hamburger-menu.svg') }}" alt="menu">
    </button> -->

     <div class="header-logo">
      <img class="erasmus-logo" src="{{ asset('img/main/download.png') }}" alt="ehb-logo">
    </div>
  
  </div>
  
  <div class="header-middle">

  <div class="search-bar-container">
    <div class="text-center">
        <div class="search-bar">
            <input
              class="input-search-bar" type="search" placeholder="{{ __('Search for topics') }}" aria-label="Search">
            <button class="submit-search-btn" type="submit">{{ __('Search') }}</button>
        </div>
    </div>
  </div>

    
  </div>
  
  
  <div class="header-right">
  
    <button class="header-chat-button">
      <img class="chatbutton-asset" src="{{ asset('img/main/chatbutton-image.png') }}" alt="chat-button">
    </button>
  
    <button class="header-profile-button">
      <img class="profilebutton-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="profile-button">
    </button>

  </div>
  
</div>

<div class="main">

  <div class="left-menu">

    <button class="leftmenu-top" id="leftmenu-top-one"   onclick="window.location.href='{{ route('profile.edit') }}'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word" id="collapsible-topics">
        {{ __('Profile') }}
      </div>
    </button>

    <button class="leftmenu-top"  onclick="window.location.href='{{ route('dashboard') }}'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Dashboard') }}
      </div>
    </button>

    <!-- <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Review') }}
      </div> 
    </button> -->

    <button class="leftmenu-top" onclick="window.location.href='{{ route('FAQ') }}'">
      
      <div class="left-manage-assetdiv">
      <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('FAQ') }}
      </div>
    </button>

    <button class="leftmenu-top" onclick="window.location.href='{{ route('contact') }}'">
    <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('img/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
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

        <div class="left-manage-assetdiv">
          <div class="icon education"></div>
        </div>

        <div class="left-manage-word">
          {{ __('Education') }}
        </div>

      </button>

      <button class="collapsible-contentbutton">

        <div class="left-manage-assetdiv">
          <div class="icon general"></div>
        </div>
        
        <div class="left-manage-word">
          {{ __('General') }}
        </div>

      </button>

      <!-- <button class="collapsible-contentbutton">

        <div class="left-manage-assetdiv">
          <div class="icon staff"></div>
        </div>
        
        <div class="left-manage-word">
          {{ __('Staff') }}
        </div>

      </button> -->

    </div>

    <!-- <button class="collapsible">
      
      <div class="collapsible-div">
        <div class="collapsible-assetdiv">
        </div>
        {{ __('Tags') }} -->
      <!-- </div> -->

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

    </div>

  </div>

  <div class="divider">
  </div>

  <div class="right">
    <div class="right-ceiling">
      <div class="right-sorting">
        <button class="sortingbutton">{{ __('All categories') }}</button>
        <!-- <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('All tags') }}</button> -->
        <button class="sortingbutton">{{ __('Latest') }}</button>
        <button class="sortingbutton">{{ __('Unread') }}</button>
        <!-- <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('Top') }}</button> -->
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
        @foreach($posts as $post)
        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">{{ $post->title }}</h3>
          </div>
          <div class="post-body">
            <p>{{ $post->excerpt }}</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">{{ __('Upvote') }}</button>
              <button class="upvote-downvote-btn">{{ __('Downvote') }}</button>
              <span class="post-comments-amount">{{ $post->comments_count }} {{ __('Comments') }}</span>
            </div>
            @foreach($post->tags as $tag)
            <div class="category-container">
              <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag" class="category-image">
              <span class="category-text">{{ $tag->name }}</span>
            </div>
            @endforeach
            <div>
              <button class="share-report-btn">{{ __('Share') }}</button>
              <button class="share-report-btn">{{ __('Report') }}</button>
            </div>
          </div>
        </div> 
        @endforeach
    
      <div class="pagination" id="pagination"></div>


      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/components/main.js') }}"></script>
@endsection