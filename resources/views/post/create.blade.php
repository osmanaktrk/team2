@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post-create.css') }}">
@endsection

@section('title')
    <title>POST-CREATE</title>
@endsection


@section('content')
    <form action="" method="post">

        <section class="post-create-section mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">



                        <div class="text-justify mb-4">

                            <hr>
                            <h1 class="font-weight-lighter text-primary text-center mb-3">POST CREATE</h1>
                            <hr>
                            <br>
                            <div class="row justify-content-center align-items-center">

                                @error('category-select')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <select class="btn btn-light btn-outline-info" name="category-select" id="category-select"
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

                                        @error('post-cover')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div id="collapseOne" class="collapse font-weight-light">
                                    <div class="card-body bg-dark row justify-content-center">
                                        <img class="post-cover" src="#" alt="post-cover">
                                    </div>
                                    <div class=" text-center m-4">
                                        <input class="btn btn-outline-info" accept="image/*" type="file"
                                            name="post-cover" id="post-cover">
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
                                        placeholder="{{ old('post-title') }}"></textarea>
                                </div>

                                <hr>



                                <div class="card">
                                    <div class="card-body row justify-content-around align-items-center">

                                        <div class="text-muted font-weight-light">
                                            <span class="btn btn-link font-weight-light" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">Upload A File</span>
                                            @error('post-file-name')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror

                                            @error('post-file')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div id="collapseTwo" class="collapse font-weight-light">

                                        <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                            style="background-color: #1ABCB6;">


                                            <label class=" btn btn-outline-primary" for="post-file-name">File Name:
                                                <input type="text" name="post-file-name" id="post-file-name">
                                            </label>



                                            <input class=" btn btn-primary" type="file" name="post-file" id="post-file">
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
                                        @error('comment-cover')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>



                                <div id="collapseThree" class="collapse font-weight-light">
                                    <div class="card-body bg-dark row justify-content-center">
                                        <img class="comment-cover " src="#" alt="comment-cover">
                                    </div>
                                    <div class=" text-center m-4">
                                        <input class="btn btn-outline-info" accept="image/*" type="file"
                                            name="comment-cover" id="comment-cover">
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


                                            @error('comment-file-name')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror

                                            @error('comment-file')
                                                <span class=" text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div id="collapseFour" class="collapse font-weight-light">

                                        <div class="pt-1 pb-1 pr-5 mt-3 card-body row justify-content-around align-items-center"
                                            style="background-color: #1ABCB6;">

                                            <label class=" btn btn-outline-primary" for="comment-file-name">File Name:
                                                <input type="text" name="comment-file-name" id="comment-file-name">
                                            </label>

                                            <input class=" btn btn-primary" type="file" name="comment-file"
                                                id="comment-file">
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
@endsection

@section('js')
    <script src="{{ asset('js/post-create.js') }}"></script>
@endsection
