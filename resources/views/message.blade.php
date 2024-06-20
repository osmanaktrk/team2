@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
@endsection

@section('title')
    <title>CONTACT</title>
@endsection

@section('content')
    <div class="bg-light">
        <section class="contact-section py-5 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="font-weight-lighter text-danger mb-3">{{ __('Messages') }}</h2>
                        <div class="block" style="background-color: #1ABCB6;"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        @if (Auth::user()->messages)
                            
                        @endif

                        @foreach (Auth::user()->messages as $message)


                            <div class="form-group">
                                <label for="name" class="font-weight-light">{{ __('Sender Name') }}</label>

                                @foreach ($users as $item)
                                    @if ($message->user_id_from == $item->id)
                                        <input type="text" class="form-control font-weight-lighter" name="name"
                                            id="name" value="{{ $item->username }}" readonly required>
                                    @endif
                                @endforeach


                            </div>


                            <div class="form-group">
                                <label for="email" class="font-weight-light">{{ __('Email') }}</label>
                                @foreach ($users as $item)
                                    @if ($message->user_id_id == $item->id)
                                        <input type="email" class="form-control font-weight-lighter" name="email"
                                            id="email" value="{{ $item->email }}" readonly required>
                                    @endif
                                @endforeach

                            </div>



                            <div class="form-group">
                                <label for="message" class="font-weight-light">{{ __('Message') }}</label>
                                <textarea class="form-control font-weight-lighter" name="contact" id="message" rows="10"
                                    placeholder="{{ $messega->message }}" required></textarea>
                            </div>
                        @endforeach







                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('js')
    <script src=""></script>
@endsection
