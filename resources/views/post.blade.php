@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('title')
    <title>POST</title>
@endsection


@section('content')
<section class="faq-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="font-weight-lighter text-danger mb-3">COMMENTS</h2>
                    <div class="block" style="background-color: #1ABCB6;"></div>
                    <p class="text-muted font-weight-light">{{ __('Got questions? We have answers! Check out our FAQ section below.') }}</p>
                    <!-- Need to change the questions and their answers - down below -->
                </div>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light"  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #1ABCB6;">{{ __('
                                    Question 1: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show font-weight-light" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>

                    
                  
                </div>
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
                <p class="text-muted font-weight-light">{{ __('Have more questions or need assistance? Feel free to reach out to us.') }}</p>
                <form action="#" method="POST">
                    
                    <div class="form-group">
                        <textarea class="form-control" rows="10" placeholder="{{ __('Your Message') }}" required></textarea>
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