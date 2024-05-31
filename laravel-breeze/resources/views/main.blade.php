<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'EraStudent') }}</title>
  <link rel="stylesheet" href="{{ asset('css/MainPagina-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/MainPagina-main.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">

  <div class="header-left">
    
    <!-- <button class="header-expansion-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
      <img class="expansionbutton-asset" src="{{ asset('images/main/hamburger-menu.svg') }}" alt="menu">
    </button> -->

     <div class="header-logo">
      <img class="erasmus-logo" src="{{ asset('images/main/download.png') }}" alt="ehb-logo">
    </div>
  
  </div>
  
  <div class="header-middle">

    <div class="search-bar-container">
      <div class="text-center">
          <div class="search-bar">
              <input
                class="input-search-bar" type="search" placeholder="Search for topics" aria-label="Search">
              <button class="submit-search-btn" type="submit">Search</button>
          </div>
      </div>
    </div>

    
  </div>
  
  
  <div class="header-right">
  
    <button class="header-chat-button">
      <img class="chatbutton-asset" src="{{ asset('images/main/chatbutton-image.png') }}" alt="chat-button">
    </button>
  
    <button class="header-profile-button">
      <img class="profilebutton-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="profile-button">
    </button>

  </div>
  
</div>

<div class="main">

  <div class="left-menu">

    <button class="leftmenu-top" id="leftmenu-top-one" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word" id="collapsible-topics">
        {{ __('Topics') }}
      </div>
    </button>

    <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('My posts') }}
      </div>
    </button>

    <!-- <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Review') }}
      </div> 
    </button> -->

    <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
      <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Admin') }}
      </div>
    </button>

    <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
      <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Users') }}
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
          <h2>Create New Post</h2>
          <form id="postForm">
            <label for="postTitle">Post Title:</label>
            <input type="text" id="postTitle" name="title" required>
            
            <label for="postContent">Post Content:</label>
            <textarea id="postContent" name="content" required></textarea>
            
            <label for="postCategory">Category:</label>
            <select id="postCategory" name="category">
              <option value="education">Education</option>
              <option value="general">General</option>
            </select>
            
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
      
    <div class="postbar">
      <div class="posts-container">
        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis iure libero architecto unde tenetur dignissimos reprehenderit eos voluptatibus. A atque assumenda ipsa excepturi quidem ea, fuga minima, enim molestiae autem doloribus omnis distinctio optio illo ut maiores dolores reiciendis recusandae. Temporibus, eos beatae. Provident ex inventore quasi, distinctio quas nostrum quae dolor labore, atque magni recusandae est earum sit perspiciatis amet libero voluptates officia officiis ab ullam nesciunt. Consequatur qui nisi neque maiores eaque eius ea, adipisci ratione consectetur. Nihil sapiente maiores sequi, commodi sunt alias est. Debitis aspernatur dicta ducimus quas voluptatibus adipisci architecto magni nesciunt illo quasi. Repellendus!</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 2</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem deleniti reprehenderit delectus molestiae ipsam. Atque non sequi animi deleniti aperiam accusantium veritatis cumque ducimus reprehenderit eaque? Dolorem obcaecati laboriosam excepturi?</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>
        
        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 3</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 4</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 5</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 6</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 7</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 8</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 9</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 10</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 11</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 12</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 13</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 14</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 15</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post-header">
            <h3 class="post-header-text">Post Title 16</h3>
          </div>
          <div class="post-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros
                eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
          </div>
          <div class="post-footer">
            <div>
              <button class="upvote-downvote-btn">Upvote</button>
              <button class="upvote-downvote-btn">Downvote</button>
              <span class="post-comments-amount">123 Comments</span>
            </div>
            <div class="category-container">
              <img src="{{ asset('images/main/tag-image.png') }}" alt="Category" class="category-image">
              <span class="category-text">Education</span>
            </div>
            <div>
              <button class="share-report-btn">Share</button>
              <button class="share-report-btn">Report</button>
            </div>
          </div>
        </div>

      <div class="pagination" id="pagination"></div>

     </div>


    </div>
  </div>
</div>

<script>
  var collapsibleButtons = document.querySelectorAll('.collapsible');

  collapsibleButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      this.classList.toggle('active');

      var content = this.nextElementSibling;

      content.classList.toggle('active');
    });
  });


  document.addEventListener("DOMContentLoaded", function() {
    const maxTitleLength = 100;  // verander dit aantal om maximale lengte van de weergegeven titel te veranderen (voordat het wordt afgebroken door '...')
    const maxContentLength = 200; // verander dit aantal om maximale lengte van de weergegeven content te veranderen (voordat het wordt afgebroken door '...')
    const titleElements = document.querySelectorAll('.post-header');
    const contentElements = document.querySelectorAll('.post-body');

    titleElements.forEach(titleElement => {
      let titleText = titleElement.innerText;

      if (titleText.length > maxTitleLength) {
        titleText = titleText.substring(0, maxTitleLength) + '...';
        titleElement.innerText = titleText;
      }
    });

    contentElements.forEach(contentElement => {
      let contentText = contentElement.innerText;

      if (contentText.length > maxContentLength) {
        contentText = contentText.substring(0, maxContentLength) + '...';
        contentElement.innerText = contentText;
      }
    });
  });

  /* ------------------------------------------------------------------- CREATE POST BUTTON SETTINGS */
  document.addEventListener("DOMContentLoaded", function() {
  const createPostBtn = document.querySelector('.createpostbutton');
  const popup = document.getElementById('postPopup');
  const closeBtn = document.querySelector('.popup-close');

  createPostBtn.addEventListener('click', function() {
    popup.style.display = 'flex';
  });

  closeBtn.addEventListener('click', function() {
    popup.style.display = 'none';
  });

  window.addEventListener('click', function(event) {
    if (event.target === popup) {
      popup.style.display = 'none';
    }
  });

  const postForm = document.getElementById('postForm');
  postForm.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Post submitted!');
    popup.style.display = 'none';
  });
  });


  document.addEventListener("DOMContentLoaded", function() {
  const maxTitleLength = 300; // verander dit aantal om maximale lengte van de invoer voor de titel bij post-aanmaak te veranderen
  const maxContentLength = 40000; // verander dit aantal om maximale lengte van de invoer voor de content bij post-aanmaak te veranderen

  const titleInput = document.getElementById('postTitle');
  const contentInput = document.getElementById('postContent');

  titleInput.addEventListener('input', function() {
    if (titleInput.value.length > maxTitleLength) {
      titleInput.value = titleInput.value.substring(0, maxTitleLength);
    }
  });

  contentInput.addEventListener('input', function() {
    if (contentInput.value.length > maxContentLength) {
      contentInput.value = contentInput.value.substring(0, maxContentLength);
    }
  });
  });



  /* ------------------------------------------------------------------- PAGINATION */
  document.addEventListener('DOMContentLoaded', function() {
    const posts = document.querySelectorAll('.posts-container .post');
    const postsPerPage = 5;
    const paginationContainer = document.getElementById('pagination');
    let currentPage = 1;
    const totalPages = Math.ceil(posts.length / postsPerPage);

    function showPage(page) {
      const start = (page - 1) * postsPerPage;
      const end = start + postsPerPage;

      posts.forEach((post, index) => {
        post.style.display = (index >= start && index < end) ? 'block' : 'none';
      });

      document.querySelectorAll('.pagination button').forEach(button => {
        button.classList.remove('disabled');
      });

      if (page === 1) {
        document.getElementById('pagination-prev-btn').classList.add('disabled');
      }

      if (page === totalPages) {
        document.getElementById('pagination-next-btn').classList.add('disabled');
      }

      document.getElementById('pageNumber').textContent = `Page ${page} of ${totalPages}`;
    }

    function createPaginationButtons() {
      const prevButton = document.createElement('button');
      prevButton.id = 'pagination-prev-btn';
      prevButton.textContent = 'Prev';
      prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
          currentPage--;
          showPage(currentPage);
        }
      });

      const nextButton = document.createElement('button');
      nextButton.id = 'pagination-next-btn';
      nextButton.textContent = 'Next';
      nextButton.addEventListener('click', () => {
        if (currentPage < totalPages) {
          currentPage++;
          showPage(currentPage);
        }
      });

      const pageNumber = document.createElement('span');
      pageNumber.id = 'pageNumber';
      pageNumber.style.margin = '0 10px';
      pageNumber.textContent = `Page 1 of ${totalPages}`;

      paginationContainer.appendChild(prevButton);
      paginationContainer.appendChild(pageNumber);
      paginationContainer.appendChild(nextButton);
    }

    createPaginationButtons();
    showPage(currentPage);
  });
</script>
</body>
</html>