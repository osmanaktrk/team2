@extends('layouts.admin')





@section('admin-content')
    <div class="right-ceiling">
        <div class="right-sorting">

            <h4>CONTACT MESSAGES</h4>

        </div>

    </div>



    <div class="contact-main-container accordion ">






        @foreach ($contacts as $contact)
            <div class="card m-5 border-dark">
                <div class="card-header">
                    <h5 class="mb-0 row justify-content-around">
                        <button class="btn btn-link font-weight-light" type="button" style="color: #1ABCB6;">Sender Name:
                            {{ $contact->name }}
                        </button>
                        <button class="btn btn-link font-weight-light" type="button" style="color: #1ABCB6;">Sender E-Mail:
                            {{ $contact->email }}
                        </button>

                        @if ($contact->user_id)
                            <button class="btn btn-link font-weight-light" type="button" style="color: #1ABCB6;">Sender is a member
                                
                            </button>
                        @endif

                        <a class="btn btn-info"
                        href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ifkv=AS5LTAStb4Wlti3qgV0HLIZqnBQR6XGnvjOkxEUQXj_hvVYVpJ1M04l5O31SHBLEXDvu3O-OxRvWZg&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1425705971%3A1718203470983034&ddm=0">
                        Send E-Mail
                    </a>


                    <form action="{{ route('admin-contact-delete') }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="number" name="contactId" id="contactId" value="{{ $contact->id }}" required readonly
                            hidden>
                        <input class=" btn btn-danger" type="submit" value="Delete Message">
                    </form>

                    </h5>

                </div>
                <div class=" card-body font-weight-light">
                    <div class="card-body">
                        {{ $contact->contact }}
                    </div>
                </div>
            </div>






           
        @endforeach



    </div>
@endsection
