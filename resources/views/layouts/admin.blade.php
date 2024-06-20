@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-layout.css') }}">
@endsection

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('content')
    <div class="main">

        <div class="left-menu">

            <a href="{{ route('welcome') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Welcome') }}
                </div>
            </a>

            <a href="{{ route('main') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Main') }}
                </div>
            </a>


            <a href="{{ route('post-create') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('New Post') }}
                </div>
            </a>





            <a href="{{ route('contact-admin') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Contact Admin') }}
                </div>
            </a>

            <a href="{{ route('profile-index') }}" class="leftmenu-top" id="leftmenu-top-one">
                <div class="left-manage-assetdiv">
                    <div class="icon gainsboro"></div>
                </div>
                <div class="left-manage-word" id="collapsible-topics">
                    {{ __('Profile') }}
                </div>
            </a>

            @if (Auth::user()->usertype == 'admin')
                <a href="" class="leftmenu-top" id="leftmenu-top-one">
                    <div class="left-manage-assetdiv">
                        <div class="icon gainsboro"></div>
                    </div>
                    <div class="left-manage-word" id="collapsible-topics">
                        {{ __('Admin Dashboard') }}
                    </div>
                </a>
            @endif










            <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    <a class=" text-white" href="{{route('admin-contacts-messages')}}">Contact Messages</a>
                </div>

            </button>

            <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    <a class=" text-white" href="{{route('admin-userstype-requests')}}">Usertype Requests</a>
                </div>

            </button>

            {{-- <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    <a class=" text-white" href="{{route('admin-users')}}">Users</a>
                </div>

            </button> --}}

            <button class="collapsible">

                <div class="collapsible-div">
                    <div class="collapsible-assetdiv">
                    </div>
                    <a class=" text-white" href="{{route('admin-post-categories')}}">Post Categories</a>
                </div>

            </button>

            



        </div>


        <div class="divider">

        </div>

        <div class="right">

           
                @yield('admin-content')
            

            {{-- <div class="right-ceiling">
                

                <div class="right-sorting">

                    
                </div>

            </div> --}}

          

           






        </div>

    </div>
@endsection

@section('js')
@endsection
