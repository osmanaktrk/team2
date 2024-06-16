@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post-edit.css') }}">
@endsection

@section('title')
    <title>POST-INDEX</title>
@endsection

@section('content')
    <section class="post-edit-section mt-5">
        <div class="container">

            <form action="{{ route('post-edit', $post->id) }}" method="post" enctype="multipart/form-data">


                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="text-justify mb-4">

                            <div class="row justify-content-between align-items-center">



                                <div class="row justify-content-center align-items-center">

                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="share-report-btn">Category:</div>

                                    <select class="btn btn-light btn-outline-info" name="category_id" id="category-select"
                                        required>
                                        <option disabled selected value="0">Select A Category</option>
                                        @foreach ($categories as $category)
                                            @if ($category->id == $post->category_id)
                                                <option selected value="{{ $category->id }}">{{ $category->category }}
                                                </option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>

                                <div class="share-report-btn">Comments:
                                    @if ($post->comments == null)
                                        0
                                    @else
                                        {{ $post->comments->count() }}
                                    @endif

                                </div>

                                <div class="upvote-downvote-btn">Likes:

                                    @if ($post->postLikes == null)
                                        0
                                    @else
                                        {{ $post->postLikes->count() }}
                                    @endif


                                </div>

                                <div class="upvote-downvote-btn">Dislikes:

                                    @if ($post->postDislikes == null)
                                        0
                                    @else
                                        {{ $post->postDislikes->count() }}
                                    @endif

                                </div>


                            </div>

                        </div>

                        <hr>
                        <br>

                        <div class="accordion">
                            <div class="card mb-5">

                                <div class="card-header ">

                                    <div class="text-muted row justify-content-around  font-weight-light">

                                        <span>
                                            <img src="{{ asset('img/main/tag-image.png') }}" alt="Tag"
                                                class="category-image">
                                            by
                                            @if (isset($post->user->username))
                                                <a href="{{ route('profile-index') }}">
                                                    <div class="btn btn-link font-weight-light" style="color: #1ABCB6;">
                                                        {{ $post->user->username }}</div>

                                                </a>
                                            @else
                                                <span class="error">Deleted User</span>
                                            @endif
                                            at
                                            {{ $post->created_at->format('d/M/Y H:i') }}
                                        </span>

                                        {{-- <span class="btn btn-outline-info font-weight-light">Upload A Cover</span> --}}

                                        @error('post_cover')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror



                                    </div>



                                </div>



                                <div class=" font-weight-light">


                                    @if (isset($post->cover->cover))
                                        <div class="card-body text-justify row justify-content-center align-content-center">

                                            <img class="post-cover" src="{{ asset($post->cover->cover) }}"
                                                alt="post-cover">

                                        </div>

                                        <div class=" text-center m-4">
                                            <input class="btn btn-outline-info" accept="image/*" type="file"
                                                name="post_cover" id="post-cover">
                                        </div>
                                    @endif



                                </div>



                            </div>

                            <hr>

                            <h2 class="mt-3 mb-3 font-weight-lighter mb-3 text-center">TITLE</h2>
                            <hr>


                            <div class="text-justify mb-4 p-3 text-muted">

                                <textarea class="form-control font-weight-lighter" required name="title" id="title" rows="10">{{ $post->title }}</textarea>
                                <hr>




                                @if (isset($post->extra_id))
                                    <div class="card">
                                        <div class="card-body row justify-content-around align-items-center">

                                            <div class="text-muted font-weight-light">

                                                <span class="update btn btn-primary" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">Update File</span>


                                                @error('post_file_name')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror

                                                @error('post_file')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="text-muted font-weight-light">
                                                @error('delete')
                                                    <span class=" text-danger"></span>
                                                @enderror
                                                <label class=" btn btn-danger" for="delete">
                                                    <input type="checkbox" name="delete" id="delete">
                                                    DELETE FILE

                                                </label>
                                            </div>
                                        </div>





                                        <div id="collapseOne" class="collapse font-weight-light">

                                            <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                                style="background-color: #1ABCB6;">


                                                <label class=" btn btn-outline-primary" for="post-file-name">File Name:
                                                    <input class="update-name" type="text" name="post_file_name"
                                                        id="post-file-name">
                                                </label>



                                                <input class="update-file btn btn-primary" type="file" name="post_file"
                                                    id="post-file" accept=".zip,.rar,.7zip">
                                            </div>

                                        </div>

                                    </div>
                                @else
                                    <div class="card">
                                        <div class="card-body row justify-content-around align-items-center">

                                            <div class="text-muted font-weight-light">
                                                <span class="btn btn-primary font-weight-light" data-toggle="collapse"
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


                                                <label class=" btn btn-outline-primary" for="post-file-name">File Name:
                                                    <input type="text" name="post_file_name" id="post-file-name">
                                                </label>



                                                <input class=" btn btn-primary" type="file" name="post_file"
                                                    id="post-file" accept=".zip,.rar,.7zip">
                                            </div>

                                        </div>

                                    </div>
                                @endif



                                <hr>










                            </div>

                        </div>


                    </div>




                </div>
                <hr>
                <div class=" card-footer row justify-content-center">
                    <input class="btn btn-success" type="submit" value="UPDATE POST">
                </div>
                <hr>

            </form>



            <div class=" card-footer row justify-content-center">
                <form action="{{route('post-edit', $post->id)}}" method="post">
                    @csrf
                    @method('delete')


                    <input class="btn btn-danger" type="submit" value="DELETE POST">
                </form>


                
            </div>
            <hr>

        </div>



    </section>
@endsection

@section('js')
    <script src="{{ asset('js/post-edit.js') }}"></script>
@endsection
