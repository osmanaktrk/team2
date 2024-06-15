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

                        {{-- <h2 class="font-weight-lighter mb-3">{{ $post->title }}</h2> --}}
                        {{-- <div class="block" style="background-color: #1ABCB6;"></div> --}}



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
                        <div class="card">

                            <div class="card-header row justify-content-around align-items-center">

                                <div class="text-muted font-weight-light">
                                    <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag" class="category-image">
                                    <span>by
                                        @if (isset($post->user->username))
                                            <a href="{{ route('profile-index') }}">
                                                <button class="btn btn-link font-weight-light"
                                                    style="color: #1ABCB6;">{{ $post->user->username }}</button>

                                            </a>
                                        @else
                                            <span class="error">Deleted User</span>
                                        @endif
                                        at
                                        {{ $post->created_at->format('d/M/Y H:i') }}
                                    </span>
                                </div>

                                <h5 class="mb-0">
                                    @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'writer')
                                        <a href="">
                                            <button class="btn btn-info font-weight-light">Edit</button>
                                        </a>
                                    @endif

                                </h5>

                            </div>



                            <div class="collapse show font-weight-light">


                                @if (isset($post->cover->cover))
                                    <div class="card-body">

                                        <img src="{{ asset($post->cover->cover) }}" alt="post-cover">

                                    </div>
                                @endif



                            </div>



                        </div>


                        <br>
                        <hr>
                        <br>







                        <h2 class="font-weight-lighter mb-3 text-justify">{{ $post->title }}</h2>
                        <br>
                        <hr>


                        <div class="text-justify mb-4">

                            <div class=" p-3 text-muted font-weight-light row justify-content-between">



                                @if (isset($is_disliked))
                                    <button class="upvote-downvote-btn btn">Like</button>
                                @else
                                    <button class="upvote-downvote-btn btn">Dislike</button>
                                @endif

                                @if (isset($is_liked))
                                    <button class="upvote-downvote-btn btn">Dislike</button>
                                @else
                                    <button class="upvote-downvote-btn btn">Like</button>
                                @endif


                                @if (isset($is_readed))
                                    <button class="share-report-btn btn">Set As Unreaded</button>
                                @endif

                                @if (isset($is_favorited))
                                    <button class="share-report-btn btn">Add Favorites</button>
                                @endif




                            </div>


                            <hr>



                            unutma!!!!!!!!!!

                            @isset($post->extra_id)
                            @endisset

                            <div class="block pt-1 pb-1 pl-5 pr-5 mt-3 row justify-content-between align-items-center"
                                style="background-color: #1ABCB6;">
                                <span class=" p-2">File Name: ksjdksj</span>
                                <button class="btn btn-primary">Download</button>
                            </div>



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

                                        @if (Auth::user()->usertype == 'admin' || ($comment->user_id = Auth::user()->id))
                                            <button class="btn btn-info mr-3" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $comment->id }}" aria-expanded="false"
                                                aria-controls="collapse{{ $comment->id }}">Edit</button>
                                        @endif



                                    </div>



                                    <div class="font-weight-light">
                                        @isset($comment->cover->cover)
                                            <div class="card-body">
                                                <img src="{{ asset($comment->cover->cover) }}" alt="comment-cover">
                                            </div>
                                        @endisset
                                    </div>





                                    <div class="collapse show font-weight-light">
                                        <div class="card-body text-justify">
                                            {{ $comment->comment }}
                                        </div>
                                    </div>

                                    <div class="block pt-2 pb-2 pl-5 pr-5 row justify-content-between align-items-center"
                                        style="background-color: #1ABCB6;">
                                        <span class=" p-2">File Name: ksjdksj</span>
                                        <button class="btn btn-primary">Download</button>
                                    </div>

                                    @isset($comment->extra_id)
                                        <div class="block pt-2 pb-2 pl-5 pr-5 row justify-content-between align-items-center"
                                            style="background-color: #1ABCB6;">
                                            <span class=" p-2">File Name: ksjdksj</span>
                                            <button class="btn btn-primary">Download</button>
                                        </div>
                                    @endisset

                                    <br>

                                    @if (Auth::user()->usertype == 'admin' || ($comment->user_id = Auth::user()->id))
                                        <div class="accordion mb-4 p-2">
                                            <div class="collapse card mt-2 mr-3 ml-3" id="collapse{{ $comment->id }}">

                                                <div class="card-header row justify-content-between align-items-center">
                                                    <h5 class="mb-0">

                                                        @if (isset($comment->user->username))
                                                            <a href="{{ route('profile-index') }}">
                                                                <button class="btn btn-link font-weight-light"
                                                                    style="color: #1ABCB6;">
                                                                    <img src="{{ asset('img/main/tag-image.png') }}"
                                                                        alt="Tag" class="category-image">
                                                                    {{ $comment->user->username }}
                                                                </button>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-link font-weight-light"
                                                                style="color: #1ABCB6;">
                                                                <img src="{{ asset('img/main/tag-image.png') }}"
                                                                    alt="Tag" class="category-image">
                                                                Deleted User
                                                            </button>
                                                        @endif



                                                    </h5>

                                                    <span>at {{ $comment->created_at->format('d/M/Y H:i') }}</span>





                                                </div>


                                                <div class="font-weight-light">
                                                    @isset($comment->cover->cover)
                                                        <div class="card-body">
                                                            <img src="{{ asset($comment->cover->cover) }}" alt="comment-cover">
                                                        </div>
                                                    @endisset
                                                </div>


                                                <div class="font-weight-light">
                                                    <div class="card-body">
                                                        {{ $comment->comment }}
                                                    </div>
                                                </div>


                                                <div class="block pt-2 pb-2 pl-5 pr-5 row justify-content-between align-items-center"
                                                    style="background-color: #1ABCB6;">
                                                    <span class=" p-2">File Name: ksjdksj</span>
                                                    <button class="btn btn-primary">Download</button>
                                                </div>

                                                @isset($comment->extra_id)
                                                    <div class="block pt-2 pb-2 pl-5 pr-5 row justify-content-between align-items-center"
                                                        style="background-color: #1ABCB6;">
                                                        <span class=" p-2">File Name: ksjdksj</span>
                                                        <button class="btn btn-primary">Download</button>
                                                    </div>
                                                @endisset

                                                <div class="row justify-content-around p-2 mt-3 mb-3">
                                                    <button class="btn btn-danger" type="button" data-toggle="collapse"
                                                        data-target="#collapse{{ $comment->id }}" aria-expanded="false"
                                                        aria-controls="collapse{{ $comment->id }}">Cancel</button>
                                                    <button class="btn btn-success">Save</button>
                                                </div>




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






    <section class="contact-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="font-weight-lighter text-danger">Write A Comment</h2>
                    <div class="block" style="background-color: #1ABCB6;"></div>
                    <p class="text-muted font-weight-light">
                        {{ __('Have more questions or need assistance? Feel free to reach out to us.') }}</p>
                    <form action="#" method="POST">

                        <div class="form-group">
                            <textarea class="form-control" rows="10" placeholder="{{ __('Your Comment') }}" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
