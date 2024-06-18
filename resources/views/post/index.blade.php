@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post-index.css') }}">
@endsection

@section('title')
    <title>POST-INDEX</title>
@endsection


@section('content')
    <section class="post-index-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-justify mb-4">





                        <div class="row justify-content-between align-items-center">


                            <button class="share-report-btn">Category: {{ $post->category->category }}</button>

                            <button class="share-report-btn">Comments:
                                @if ($post->comments == null)
                                    0
                                @else
                                    {{ $post->comments->count() }}
                                @endif

                            </button>

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

                    <hr>
                    <br>

                    <div class="accordion">
                        <div class="card mb-5">

                            <div class="card-header row justify-content-around align-items-center">

                                <div class="text-muted font-weight-light">
                                    <span>
                                        <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag"
                                            class="category-image">

                                        by
                                        @if (isset($post->user->username))
                                            <a href="{{ route('profile-index') }}">
                                                <button class="btn btn-link font-weight-light"
                                                    style="color: #1ABCB6;">{{ $post->user->username }}</button>

                                            </a>
                                        @else
                                            <span class="text-danger">Deleted User</span>
                                        @endif
                                        at
                                        {{ $post->created_at->format('d/M/Y H:i') }}
                                    </span>
                                </div>

                                <h5 class=" row justify-content-center align-items-center">
                                    @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'writer')
                                        <a href="{{ route('post-edit', $post->id) }}">
                                            <button class=" edit-post m-1 btn btn-info font-weight-light">Edit Post</button>
                                        </a>
                                    @endif

                                    @if (Auth::user()->usertype == 'admin')
                                        <form action="{{ route('post-edit', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')


                                            <input class=" m-1 btn btn-danger font-weight-light" type="submit"
                                                value="Delete Post">
                                        </form>
                                    @endif




                                </h5>

                            </div>



                            <div class=" font-weight-light ">


                                @if (isset($post->cover->cover))
                                    <div class="card-body row justify-content-center align-content-center text-justify">

                                        <img src="{{ asset($post->cover->cover) }}" alt="post-cover">

                                    </div>
                                @endif



                            </div>



                        </div>

                        <hr>

                        <h2 class="mt-5 mb-5 font-weight-lighter mb-3 text-justify">{{ $post->title }}</h2>
                        <hr>


                        <div class="text-justify mb-4">

                            <div class=" p-3 text-muted font-weight-light row justify-content-between">



                                @if ($is_disliked)
                                
                                <a href="{{route('like', $post->id)}}" class="btn btn-outline-success">Like</a>
                                
                                @endif

                                @if ($is_liked)
                                <a href="{{route('dislike', $post->id)}}" class="btn btn-outline-warning">Dislike</a>
                                
                                @endif

                                @if ($is_liked == null && $is_disliked == null)
                                    
                                <a href="{{route('like', $post->id)}}" class="btn btn-outline-success">Like</a>
                                <a href="{{route('dislike', $post->id)}}" class="btn btn-outline-warning">Dislike</a>

                                @endif
                        

                                <a class="btn btn-link" href="{{route('unread', $post->id)}}">Set As Unreaded</a>
                              

                                @if ($is_favorited)
                                    <a href="{{route('delete-favorite', $post->id)}}" class=" btn btn-danger" >Delete Favorite</a>

                                    @else
                                    <a href="{{route('add-favorite', $post->id)}}" class=" btn btn-success">Add Favorite</a>

                                @endif




                            </div>


                            <hr>





                            @isset($post->extra_id)
                                <div class="block pt-1 pb-1 pl-5 pr-5 mt-3 row justify-content-between align-items-center"
                                    style="background-color: #1ABCB6;">
                                    <span class=" p-2">File Name: {{ $post->extra->name }}</span>

                                    <form action="{{route('download')}}" method="post">
                                        @csrf

                                        @error('path')
                                            <span class=" text-danger">{{$message}}</span>
                                        @enderror
                                        <input type="hidden" name="path" value="{{$post->extra->file}}" readonly required>
                                    <button class="btn btn-primary">Download</button>
                                    </form>
                                    

                                </div>
                            @endisset





                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>






    <section class="post-index-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-4">
                        <h2 class="font-weight-lighter text-danger mb-3">COMMENTS</h2>
                        <div class="block" style="background-color: #1ABCB6;"></div>
                        <p class="text-muted font-weight-light"></p>
                    </div>



                    @isset($post->comments)
                        @foreach ($post->comments as $comment)
                            <div class="accordion mb-5">


                                <div class="card mt-5">

                                    <div class="card-header row justify-content-between align-items-center">
                                        <h5 class="mb-0">


                                            @if (isset($comment->user->username))
                                                <a href="{{ route('profile-index') }}">
                                                    <button class="btn btn-link font-weight-light" style="color: #1ABCB6;">
                                                        <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag"
                                                            class="category-image">
                                                        {{ $comment->user->username }}
                                                    </button>
                                                </a>
                                            @else
                                                <button class="btn btn-link font-weight-light" style="color: #1ABCB6;">
                                                    <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag"
                                                        class="category-image">
                                                    Deleted User
                                                </button>
                                            @endif



                                        </h5>

                                        <span>at {{ $comment->created_at->format('d/M/Y H:i') }}</span>

                                        <div class=" pr-4 row justify-content-center align-items-center">
                                            @if (Auth::user()->usertype == 'admin' || ($comment->user_id = Auth::user()->id))
                                                <button class="edit-comment btn btn-info m-1" type="button"
                                                    data-toggle="collapse" data-target="#collapse{{ $comment->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="collapse{{ $comment->id }}">Edit</button>
                                            @endif

                                            @if (Auth::user()->usertype == 'admin' || ($comment->user_id = Auth::user()->id))
                                                <form action="{{ route('comment-delete') }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="number" name="comment_id" id="comment-id"
                                                        value="{{ $comment->id }}" readonly required hidden>
                                                    @error('comment_id')
                                                        <span class=" text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <input class=" m-1 btn btn-danger font-weight-light" type="submit"
                                                        value="Delete">
                                                </form>
                                            @endif
                                        </div>





                                    </div>



                                    <div class="font-weight-light">
                                        @isset($comment->cover->cover)
                                            <div class="card-body row justify-content-center align-items-center">
                                                <img src="{{ asset($comment->cover->cover) }}" alt="comment-cover">
                                            </div>
                                        @endisset
                                    </div>





                                    <div class="font-weight-light">
                                        <div class="card-body text-justify">
                                            {{ $comment->comment }}
                                        </div>
                                    </div>

                                    @isset($comment->extra_id)
                                        <div class="block pt-2 pb-2 pl-5 pr-5 row justify-content-between align-items-center"
                                            style="background-color: #1ABCB6;">
                                            <span class=" p-2">File Name: {{ $comment->extra->name }}</span>

                                            <form action="{{route('download')}}" method="post">
                                                @csrf

                                                @error('path')
                                                    <span class=" text-danger">{{$message}}</span>
                                                @enderror
                                                <input type="hidden" name="path" value="{{$comment->extra->file}}" readonly required>
                                                <button class="btn btn-primary">Download</button>
                                            </form>



                                            
                                        </div>
                                    @endisset

                                 

                                    @if (Auth::user()->usertype == 'admin' || ($comment->user_id = Auth::user()->id))
                                        <div class="accordion mb-4 p-2">
                                            <div class="collapse card mt-2 mr-3 ml-3" id="collapse{{ $comment->id }}">


                                                <form action="{{ route('comment-edit') }}" method="post"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('put')

                                                    @error('id')
                                                        <span class=" text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <input type="number" name="id" id="id"
                                                        value="{{ $comment->id }}" readonly required hidden>

                                                    <div class="card-header row justify-content-between align-items-center">
                                                        <h5 class="mb-0">

                                                            @if (isset($comment->user->username))
                                                                <a href="{{ route('profile-index') }}">
                                                                    <div class="btn btn-link font-weight-light"
                                                                        style="color: #1ABCB6;">
                                                                        <img src="{{ asset('img/main/tag-image.png') }}"
                                                                            alt="Tag" class="category-image">
                                                                        {{ $comment->user->username }}
                                                                    </div>
                                                                </a>
                                                            @else
                                                                <div class="btn btn-link font-weight-light"
                                                                    style="color: #1ABCB6;">
                                                                    <img src="{{ asset('img/main/tag-image.png') }}"
                                                                        alt="Tag" class="category-image">
                                                                    Deleted User
                                                                </div>
                                                            @endif



                                                        </h5>

                                                        @error('comment_cover')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <span>at {{ $comment->created_at->format('d/M/Y H:i') }}</span>





                                                    </div>


                                                    <div class="font-weight-light">



                                                        <div class="card-body bg-dark row justify-content-center align-items-center">

                                                            <img src="@isset($comment->cover->cover)
                                                                {{ asset($comment->cover->cover) }}
                                                            @endisset" alt="comment-cover">
                                                          

                                                        </div>

                                                        <div class=" text-center m-4">
                                                            <input class="btn btn-outline-info" accept="image/*"
                                                                type="file" name="comment_cover" id="comment-cover">
                                                        </div>




                                                    </div>


                                                    <div class="font-weight-light">
                                                        <div class="card-body">
                                                            <div class=" p-3 text-muted font-weight-light">
                                                                <textarea class="form-control font-weight-lighter" required name="comment" id="comment" rows="10">{{ $comment->comment }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    @if (isset($comment->extra_id))
                                                        <div class="card">
                                                            <div
                                                                class="card-body row justify-content-around align-items-center">

                                                                <div class="text-muted font-weight-light">

                                                                    <span class="update btn btn-primary"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseFile{{ $comment->id }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFile{{ $comment->id }}">Update
                                                                        File Only Archive</span>


                                                                    @error('comment_file_name')
                                                                        <span class=" text-danger">{{ $message }}</span>
                                                                    @enderror

                                                                    @error('comment_file')
                                                                        <span class=" text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>

                                                                <div class="text-muted font-weight-light">
                                                                    @error('delete')
                                                                        <span class=" text-danger"></span>
                                                                    @enderror
                                                                    <label class=" btn btn-danger" for="delete">
                                                                        <input type="checkbox" name="delete" id="delete">
                                                                        Delete File

                                                                    </label>
                                                                </div>
                                                            </div>





                                                            <div id="collapseFile{{ $comment->id }}"
                                                                class="collapse font-weight-light">

                                                                <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                                                    style="background-color: #1ABCB6;">


                                                                    <label class=" btn btn-outline-primary"
                                                                        for="comment-file-name">File Name:
                                                                        <input class="update-name" type="text"
                                                                            name="comment_file_name" id="comment-file-name">
                                                                    </label>



                                                                    <input class="update-file btn btn-primary" type="file"
                                                                        name="comment_file" id="comment-file"
                                                                        accept=".zip,.rar,.7zip">
                                                                </div>

                                                            </div>

                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div
                                                                class="card-body row justify-content-around align-items-center">

                                                                <div class="text-muted font-weight-light">
                                                                    <span class="btn btn-primary font-weight-light"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseFile{{ $comment->id }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFile{{ $comment->id }}">Upload
                                                                        A
                                                                        File Only Archive</span>


                                                                    @error('comment_file_name')
                                                                        <span class=" text-danger">{{ $message }}</span>
                                                                    @enderror

                                                                    @error('comment_file')
                                                                        <span class=" text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>

                                                            </div>



                                                            <div id="collapseFile{{ $comment->id }}"
                                                                class="collapse font-weight-light">

                                                                <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                                                    style="background-color: #1ABCB6;">


                                                                    <label class=" btn btn-outline-primary"
                                                                        for="comment-file-name">File Name:
                                                                        <input type="text" name="comment_file_name"
                                                                            id="comment-file-name">
                                                                    </label>



                                                                    <input class=" btn btn-primary" type="file"
                                                                        name="comment_file" id="comment-file"
                                                                        accept=".zip,.rar,.7zip">
                                                                </div>

                                                            </div>

                                                        </div>
                                                    @endif



                                                    <div class="row justify-content-around p-2 mt-3 mb-3">
                                                        <div class="btn btn-danger" type="button" data-toggle="collapse"
                                                            data-target="#collapse{{ $comment->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="collapse{{ $comment->id }}">Cancel</div>

                                                        <input class="btn btn-success" type="submit" value="Save">


                                                    </div>


                                                </form>

                                            </div>
                                        </div>
                                    @endif


                                </div>



                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
    </section>






    <section class="post-index-section bg-light">

        <form action="{{ route('comment-create') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="text-center mb-4">
                            <h2 class="font-weight-lighter text-primary text-center mb-3">WRITE A COMMENT</h2>
                            <hr>
                        </div>

                        @error('post_id')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror

                        <input type="number" name="post_id" id="post-id" value="{{$post->id}}" readonly required hidden>


                        <div class="accordion mb-5">


                            <div class="card mt-5">

                                <div class="card-header row justify-content-center align-items-center">

                                    <div class="text-muted text-center font-weight-light">
                                        <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                            data-target="#collapseCommentWriteCover" aria-expanded="false"
                                            aria-controls="collapseCommentWriteCover">Upload A Cover</span>
                                        @error('comment_cover')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>



                                <div id="collapseCommentWriteCover" class="collapse font-weight-light">
                                    <div class="card-body bg-dark row justify-content-center align-items-center">
                                        <img class="new-comment-cover" src="" alt="comment-cover">
                                    </div>
                                    <div class=" text-center m-4">
                                        <input class="btn btn-outline-info" accept="image/*" type="file"
                                            name="comment_cover" id="new-comment-cover">
                                    </div>
                                </div>






                                <div class="font-weight-light">

                                    <div class="card-body">
                                        <hr>
                                        <p class="font-weight-lighter mb-3 text-center">Comment</p>


                                        @error('comment')
                                        <div class=" row justify-content-center align-items-center">

                                            <span class=" text-danger">{{ $message }}</span>

                                        </div>

                                        @enderror
                                        <hr>
                                    </div>

                                    <div class=" p-3 text-muted font-weight-light">
                                        <textarea class="form-control font-weight-lighter" required name="comment" id="new-comment" rows="10"
                                            placeholder="{{ old('comment') }}"></textarea>
                                    </div>



                                </div>




                                <div class="card">
                                    <div class="card-body row justify-content-around align-items-center">

                                        <div class="text-muted font-weight-light">
                                            <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                data-target="#collapseCommentFile" aria-expanded="false"
                                                aria-controls="collapseCommentFile">Upload A File Only Archive</span>


                                            @error('comment_file_name')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror

                                            @error('comment_file')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div id="collapseCommentFile" class="collapse font-weight-light">

                                        <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                            style="background-color: #1ABCB6;">

                                            <label class=" btn btn-outline-primary" for="comment-file-name">File Name:
                                                <input type="text" name="comment_file_name"
                                                    id="new-comment-file-name">
                                            </label>

                                            <input class=" btn btn-primary" type="file" name="comment_file"
                                                id="new-comment-file" accept=".zip,.rar,.7zip">
                                        </div>

                                    </div>

                                </div>
                                <br>
                            </div>




                        </div>
                        <hr>

                        <div class=" card-footer row justify-content-center">
                            <input class="btn btn-success" type="submit" value="SUBMIT">
                        </div>
                        <hr>



                    </div>
                </div>
                <hr>

            </div>


        </form>





    </section>
@endsection

@section('js')
    <script src="{{ asset('js/post-index.js') }}"></script>
@endsection
