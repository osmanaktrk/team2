@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post-create.css') }}">
@endsection

@section('title')
    <title>POST-CREATE</title>
@endsection


@section('content')
    <section class="post-create-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-justify mb-4">

                        {{-- <h2 class="font-weight-lighter mb-3">{{ $post->title }}</h2> --}}
                        <div class="block" style="background-color: #1ABCB6;"></div>



                        <div class="row justify-content-between align-items-center">


                            <button class="share-report-btn">Category: </button>

                            

                            
                            



                        </div>




                    </div>

                    <hr>
                    <br>



                    <div class="accordion">


                        <div class="card">

                            <div class="card-header row justify-content-around align-items-center">

                                <div class="text-muted font-weight-light">
                                    
                                    
                                    </span>
                                </div>

                                <h5 class="mb-0">
                                    

                                </h5>

                            </div>


                           
                                <div class="collapse show font-weight-light">
                                    <div class="card-body">
                                        <img src="{{asset("img/website.jpg")}}" alt="post-cover">
                                    </div>

                                </div>
                          


                        </div>


                        <br>
                        <hr>
                        <br>







                        <h2 class="font-weight-lighter mb-3">title</h2>
                        <br>
                        <hr>


                        <div class="text-justify mb-4">

                            <div class=" p-3 text-muted font-weight-light row justify-content-between">



                               




                            </div>


                            <hr>



                            unutma!!!!!!!!!!

                        

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





@endsection

@section('js')
@endsection
