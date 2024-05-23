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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">

  <div class="header-left">
    
    <!-- <button class="header-expansion-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
      <img class="expansionbutton-asset" src="{{ asset('images/main/hamburger-menu.svg') }}" alt="menu">
    </button>

    <div class="header-logo">
      <img class="erasmus-logo" src="{{ asset('images/ehb_logos/logo-ehb-small.svg') }}" alt="ehb-logo"> -->
    </div>
  
  </div>
  
  <div class="header-middle">

    <button class="header-search-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
      <img class="searchbutton-asset" src="{{ asset('images/main/search.svg') }}" alt="search-button">

    </button>

    <input type="text" class="header-text-field" placeholder="{{ __('   Search on website...') }}">
    
  </div>
  
  
  <div class="header-right">
  
    <button class="header-chat-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
      <img class="chatbutton-asset" src="{{ asset('images/main/image.png') }}" alt="chat-button">
    </button>
  
    <button class="header-profile-button" onclick="window.location.href='https://www.google.be/?hl=nl'">
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
      
      <div class="left-manage-word">
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

    <button class="leftmenu-top" onclick="window.location.href='https://www.google.be/?hl=nl'">
      
      <div class="left-manage-assetdiv">
        <img class="left-manage-asset" src="{{ asset('images/main/90d1ac48711f63c6a290238c8382632f.jpg') }}" alt="">
      </div>
      
      <div class="left-manage-word">
        {{ __('Review') }}
      </div>
    </button>

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
          <div class="icon general"></div>
        </div>

        <div class="left-manage-word">
          {{ __('General') }}
        </div>

      </button>

      <button class="collapsible-contentbutton">

        <div class="left-manage-assetdiv">
          <div class="icon feedback"></div>
        </div>
        
        <div class="left-manage-word">
          {{ __('Site Feedback') }}
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
          <div class="icon general"></div>
        </div>

        <div class="left-manage-word">
          {{ __('General') }}
        </div>

      </button>

      <button class="collapsible-contentbutton">

        <div class="left-manage-assetdiv">
          <div class="icon feedback"></div>
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
        <!-- <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('All categories') }}</button>
        <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('All tags') }}</button> -->
        <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('Latest') }}</button>
        <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('Unread') }}</button>
        <button class="sortingbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">{{ __('Top') }}</button>
      </div>

      <button class="createpostbutton" onclick="window.location.href='https://www.google.be/?hl=nl'">
        {{ __('+ New Post') }}
      </button>
    </div>

    <!-- <div class="infobar">
      <div class="infobar-word">{{ __('Replies') }}</div>
      <div class="infobar-word">{{ __('Views') }}</div>
      <div class="infobar-word">{{ __('Activity') }}</div>
    </div> -->
    
    <div class="postbar">
      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>

      <div class="postname">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, possimus praesentium? Quos qui optio consequatur rem eos autem odit ab, eum dolorem aliquam. Porro fugiat dolore atque, quidem numquam nobis?</div>
      <div class="posttext">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolor repellendus eum placeat ex illo facere, sint odio, omnis repellat illum culpa perferendis laudantium hic neque fugiat, unde libero aliquid!</div>
      <!-- <div class="postinfo">
        <div class="replies"></div>
        <div class="views"></div>
        <div class="activity"></div> -->
      <!-- </div> -->
    </div>
  </div>
</div>



<script>
  // Select all collapsible buttons
var collapsibleButtons = document.querySelectorAll('.collapsible');

// Loop through each collapsible button and attach event listeners
collapsibleButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    // Toggle the active class on the button clicked
    this.classList.toggle('active');

    // Find the content associated with this button
    var content = this.nextElementSibling;

    // Toggle the active class on the content
    content.classList.toggle('active');
  });
});

</script>
</body>
</html>