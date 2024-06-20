@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('title')
    <title>PROFILE</title>
@endsection


@section('content')




    <section class="dashboard-section py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 text-center mb-4">
                    <div class="profile-photo mt-5" id="dashboardProfilePhoto">
                        
                        
                            <img class="avatar-photo" 
                            @if ($user->avatar)
                                src="{{ asset($user->avatar) }}"
                            @else
                                src="{{ asset('img/users/default.svg') }}"   
                            @endif
                        alt="">
                       
                        


                       


                    </div>
                    <div class="mt-5">
                        <p class="font-weight-light" id="dashboardName">USER NAME: {{ $user->username }} </p>
                        <hr>
                        <p class="font-weight-light" id="dashboardFieldOfStudy">USER TYPE: {{ $user->usertype }}</p>
                        @if (Auth::user()->id == $user->id || Auth::user()->usertype == 'admin')

                            <hr>
                            <div class="profile-usertype">
                                <p class="font-weight-light" id="dashboardName">USER TYPE: {{ $user->usertype }}</p>
                                <p class="font-weight-light" id="dashboardName">Create a request to change user type</p>

                                <form action="{{ route('usertype-request') }}" method="post">
                                    @csrf

                                    <input type="number" name="user_id" id="user_id" value="{{ $user->id }}" readonly
                                        hidden required>

                                    <div class="profile-usertype-update">


                                        <label for="usertype">Request: </label>

                                        @if ($user->UsertypeRequest->count() > 0)
                                            <select class=" selector btn-secondary" name="usertype" id="usertype" required
                                                disabled>

                                                @if ($user->usertype == 'user')
                                                    <option selected disabled value="user">user</option>
                                                @else
                                                    <option value="user">user</option>
                                                @endif

                                                {{-- @if ($user->usertype == 'writer')
                                                    <option selected disabled value="writer">writer</option>
                                                @else
                                                    <option value="writer">writer</option>
                                                @endif --}}

                                                @if ($user->usertype == 'admin')
                                                    <option selected disabled value="admin">admin</option>
                                                @else
                                                    <option value="admin">admin</option>
                                                @endif




                                            </select>
                                            <span class=" text-danger">Already Requested</span>
                                        @else
                                            <select class=" selector btn-secondary" name="usertype" id="usertype" required>

                                                @if ($user->usertype == 'user')
                                                    <option selected disabled value="user">user</option>
                                                @else
                                                    <option value="user">user</option>
                                                @endif

                                                {{-- @if ($user->usertype == 'writer')
                                                    <option selected disabled value="writer">writer</option>
                                                @else
                                                    <option value="writer">writer</option>
                                                @endif --}}

                                                @if ($user->usertype == 'admin')
                                                    <option selected disabled value="admin">admin</option>
                                                @else
                                                    <option value="admin">admin</option>
                                                @endif




                                            </select>
                                        @endif


                                    </div>

                                    @if (Auth::user()->id == $user->id || Auth::user()->usertype == 'admin')
                                        @if ($user->UsertypeRequest->count() > 0)
                                            <input type="submit" value="REQUEST" disabled>
                                            <span class=" text-danger">Already Requested</span>
                                        @else
                                            <input class=" btn btn-success" type="submit" value="Request">
                                        @endif
                                    @endif





                                </form>

                            </div>

                        @endif


                        <hr>

                        @if (Auth::user()->id == $user->id || Auth::user()->usertype == 'admin')
                            <button class="btn btn-danger customize-button" data-toggle="modal"
                                data-target="#customizeModal">Customize</button>
                        @endif

                    </div>
                </div>
                <div class="col-lg-8 pl-5 mt-5">
                    <div class="text-center">
                        <h5 class="font-weight-lighter text-info mb-3" style="font-size: 30px;">PROFILE INFORMATION</h5>
                        <div class="block" style="background-color: #d9534f;"></div>
                    </div>

                    <div class="activity-links mt-5">
                        <p class="bg-white text-primary border text-decoration-none">FIRST NAME: {{ $user->firstname }}</p>
                        <p class="bg-white text-primary border text-decoration-none">LAST NAME: {{ $user->lastname }}</p>
                        <p class="bg-white text-primary border text-decoration-none">USER NAME: {{ $user->username }}</p>
                        <p class="bg-white text-primary border text-decoration-none">USER TYPE: {{ $user->usertype }}</p>
                        <p class="bg-white text-primary border text-decoration-none">E-MAIL: {{ $user->email }}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{ $user->education_type }}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{ $user->education_name }}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{ $user->education_year }}</p>
                    </div>
                </div>
            </div>

            {{-- @if (Auth::user()->id == $user->id || Auth::user()->usertype == 'admin')
                <div class="row text-center justify-content-center mt-4">
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Messages</button>
                    </div>
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Writed Posts</button>
                    </div>
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Writed Comments</button>
                    </div>
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Favorite Posts</button>
                    </div>
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Liked Posts</button>
                    </div>
                    <div class="col-md-2 col-6 action-buttons">
                        <button class="btn btn-info">Disliked Posts</button>
                    </div>
                </div>
            @endif --}}



        </div>









        {{-- <div class="bg-light">
            <section class="contact-section py-5 mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="font-weight-lighter text-danger mb-3">{{ __('Send Message') }}</h2>
                            <div class="block" style="background-color: #1ABCB6;"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form id="contactForm" action="{{route('message')}}" method="POST">
                                @csrf
        

                                <input type="hidden" name="user_from" id="user_from" value="{{$user->id}}">
        
                                <div class="form-group">
                                    <label for="user_to" class="font-weight-light">{{ __('User Name') }}</label>
                                        @error('user_to')
                                            <span class=" text-danger">{{$message}}</span>
                                        @enderror

                                    <select class="form-control selector" name="user_to" id="user_to" required>
                                        <option disabled selected>Select A User Name</option>
                                        @foreach ($users as $item)
                                            <option value="{{$item->id}}">{{$item->username}}</option>
                                        @endforeach

                                    </select>                                    
                                </div>
        
        
                          
                                <div class="form-group">
                                    <label for="message" class="font-weight-light">{{ __('Message') }}</label>
                                    @error('message')
                                            <span class=" text-danger">{{$message}}</span>
                                        @enderror
                                    <textarea class="form-control font-weight-lighter" name="message" id="message" rows="10" placeholder="{{ __('Enter your message') }}" required></textarea>
                                </div>
        
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3">{{ __('Send Message') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        
        </div> --}}











    </section>





 


    @if (Auth::user()->id == $user->id || Auth::user()->usertype == 'admin')
        <div class="modal fade" id="customizeModal" tabindex="-1" aria-labelledby="customizeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="customizeModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">


                        <section class="profile-section ">

                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">

                                        <div class="card shadow-sm mb-3">
                                            <form action="{{route('avatar')}}" method="post" enctype="multipart/form-data">

                                                @csrf
                                                @method('put')


                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-primary">Profile Photo</p>
                                                        <hr>
                                                        <p class=" font-weight-light">Update your profile photo</p>

                                                       

                                                        
                                                    </div>
                                                </div>



                                                <div class="card-header avatar-container  text-center bg-white text-center">


                                                    <div class=" avatar text-center row justify-content-center">
                                                        <img class="avatar-photo" 
                                                        @if ($user->avatar)
                                                            src="{{ asset($user->avatar) }}"
                                                        @else
                                                            src="{{ asset('img/users/default.svg') }}"   
                                                        @endif
                                                            alt="">
                                                    </div>

                                                    <input type="number" name="user_id" value="{{ $user->id }}"
                                                        id="" readonly required hidden>
                                                    @error('avatar')
                                                        <span class=" text-danger">{{ $message }}</span>
                                                    @enderror

                                                    <input class="avatar-photo-input mt-3 btn btn-outline-primary btn-sm"
                                                        name="avatar" type="file" accept="image/*">



                                                </div>




                                                <div class="card-body" id="profileForm">





                                                    <div class="text-center pt-3 pb-2">
                                                        <input class=" btn btn-primary" type="submit" value="Upload Profile Photo">
                                                        
                                                    </div>

                                                </div>


                                            </form>

                                        </div>


                                        <div class="card shadow-sm mb-3">
                                            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">

                                                @csrf
                                                @method('patch')


                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-primary">Update Profile
                                                            Information</p>
                                                        <hr>
                                                        <p class=" font-weight-light">Update your account's profile
                                                            information</p>
                                                        @error('request-user')
                                                            <hr>
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                            name="request-user" required readonly>
                                                    </div>
                                                </div>





                                                <div class="card-body" id="profileForm">

                                                    <div class="form-group">
                                                        <label for="profileName" class="font-weight-light">First
                                                            Name</label>

                                                        @error('firstname')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" class="form-control font-weight-lighter"
                                                            name="firstname" value="{{ $user->firstname }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profileName" class="font-weight-light">Last
                                                            Name</label>
                                                        @error('lastname')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" class="form-control font-weight-lighter"
                                                            name="lastname" value="{{ $user->lastname }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="profileName" class="font-weight-light">User
                                                            Name</label>
                                                        @error('username')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" class="form-control font-weight-lighter"
                                                            name="username" value="{{ $user->username }}" required>
                                                    </div>




                                                    <div class="text-center pt-3 pb-2">

                                                        <input type="submit" class="btn btn-primary" value="Update Profile">
                                                        
                                                    </div>

                                                </div>


                                            </form>

                                        </div>


                                        <div class="card shadow-sm mb-3">
                                            <form action="{{ route('usertype-request') }}" method="post"
                                                enctype="multipart/form-data">

                                                @csrf



                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-primary">Update User Type
                                                        </p>
                                                        <hr>
                                                        <p class=" font-weight-light">Create a request to change user type
                                                        </p>
                                                        @error('request-user')
                                                            <hr>
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                            name="request-user" required readonly>
                                                    </div>
                                                </div>





                                                <div class="card-body" id="profileForm">

                                                    <div class="form-group">

                                                        <label for="usertype">User Type Request</label>
                                                        @error('usertype')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        @if ($user->UsertypeRequest->count() > 0)
                                                            <select class="form-control selector" name="usertype"
                                                                id="usertype" required disabled>

                                                                @if ($user->usertype == 'user')
                                                                    <option selected disabled value="user">user</option>
                                                                @else
                                                                    <option value="user">user</option>
                                                                @endif

                                                                {{-- @if ($user->usertype == 'writer')
                                                                    <option selected disabled value="writer">writer
                                                                    </option>
                                                                @else
                                                                    <option value="writer">writer</option>
                                                                @endif --}}

                                                                @if ($user->usertype == 'admin')
                                                                    <option selected disabled value="admin">admin</option>
                                                                @else
                                                                    <option value="admin">admin</option>
                                                                @endif




                                                            </select>
                                                            <span class=" text-danger">Already Requested</span>
                                                        @else
                                                            <select class="form-control selector " name="usertype"
                                                                id="usertype" required>

                                                                @if ($user->usertype == 'user')
                                                                    <option selected disabled value="user">user</option>
                                                                @else
                                                                    <option value="user">user</option>
                                                                @endif

                                                                {{-- @if ($user->usertype == 'writer')
                                                                    <option selected disabled value="writer">writer
                                                                    </option>
                                                                @else
                                                                    <option value="writer">writer</option>
                                                                @endif --}}

                                                                @if ($user->usertype == 'admin')
                                                                    <option selected disabled value="admin">admin</option>
                                                                @else
                                                                    <option value="admin">admin</option>
                                                                @endif




                                                            </select>
                                                        @endif




                                                    </div>






                                                    <div class="text-center pt-3 pb-2">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Request</button>
                                                    </div>

                                                </div>


                                            </form>

                                        </div>

                                        <div class="card shadow-sm mb-3">
                                            <form action="{{ route('education') }}" method="post"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('put')

                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-primary">Education
                                                            Information</p>
                                                        <hr>
                                                        <p class=" font-weight-light">Update your account's education
                                                            information</p>
                                                        @error('request-user')
                                                            <hr>
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                            name="request-user" required readonly>
                                                    </div>
                                                </div>

                                                <div class="card-body" id="profileForm">

                                                    <div class="form-group">

                                                        <label for="education_type" class="font-weight-light">Education
                                                        </label>
                                                        @error('education_type')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select class="form-control font-weight-lighter"
                                                            id="education_type" name="education_type" required>
                                                            <option value="Select" selected disabled>Select Education</option>
                                                            <option value="Graduaat">Graduaat</option>
                                                            <option value="Bachelor">Bachelor</option>
                                                            <option value="Lerarenopleiding">Lerarenopleiding</option>
                                                            <option value="Kunstopleiding">Kunstopleiding</option>
                                                            <option value="Postgraduaat">Postgraduaat</option>
                                                            <option value="Bachelor-na-bachelor">Bachelor-na-bachelor
                                                            </option>
                                                        </select>
                                                    </div>



                                                    <div class="form-group edu Graduaat"  style="display: none;">
                                                        @error('education_name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <select id="Graduaat"  class="form-control font-weight-lighter edu1" name="" required>
                                                            <option value="Accounting Administration">Accounting
                                                                Administration
                                                            </option>
                                                            <option value="Accounting Administration (E-learning)">
                                                                Accounting
                                                                Administration
                                                                (E-learning)
                                                            </option>
                                                            <option value="Basisverpleegkunde">Basisverpleegkunde </option>
                                                            <option value="Educatief Graduaat Secundair Onderwijs">
                                                                Educatief
                                                                Graduaat Secundair
                                                                Onderwijs
                                                            </option>
                                                            <option value="Elektromechanische Systemen">Elektromechanische
                                                                Systemen
                                                            </option>
                                                            <option value="Informatiebeheer">Informatiebeheer </option>
                                                            <option value="Internet Of Things">Internet Of Things </option>
                                                            <option
                                                                value="Juridisch-Administratieve Ondersteuning (Werktraject)">
                                                                Juridisch-Administratieve
                                                                Ondersteuning (Werktraject) </option>
                                                            <option value="Juridisch-Administratieve Ondersteuning">
                                                                Juridisch-Administratieve
                                                                Ondersteuning
                                                            </option>
                                                            <option value="Logies-, Restaurant- & Cateringmanagement">
                                                                Logies-,
                                                                Restaurant- &
                                                                Cateringmanagement
                                                            </option>
                                                            <option value="Marketing- & Communicatiesupport">Marketing- &
                                                                Communicatiesupport </option>
                                                            <option value="Programmeren">Programmeren </option>
                                                            <option value="Sociaal-Cultureel Werk">Sociaal-Cultureel Werk
                                                            </option>
                                                            <option value="Systeem- & Netwerkbeheer">Systeem- &
                                                                Netwerkbeheer
                                                            </option>
                                                            <option value="Winkelmanagement">Winkelmanagement </option>

                                                        </select>
                                                    </div>




                                                    <div class="form-group edu Bachelor" style="display: none;">
                                                        @error('education_name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select id="Bachelor"  class="form-control font-weight-lighter edu1"
                                                             required>

                                                            <option value="Biomedische Laboratoriumtechnologie">Biomedische
                                                                Laboratoriumtechnologie
                                                            </option>
                                                            <option value="Communicatie">Communicatie </option>
                                                            <option value="Hotelmanagement">Hotelmanagement </option>
                                                            <option value="Idea And Innovation Management">Idea And
                                                                Innovation
                                                                Management </option>
                                                            <option value="Journalistiek">Journalistiek </option>
                                                            <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                                                            <option value="Lager Onderwijs">Lager Onderwijs </option>
                                                            <option value="Landschaps- & Tuinarchitectuur">Landschaps- &
                                                                Tuinarchitectuur </option>
                                                            <option value="Multimedia & Creatieve Technologie">Multimedia &
                                                                Creatieve Technologie
                                                            </option>
                                                            <option value="Organisatie & Management">Organisatie &
                                                                Management
                                                            </option>
                                                            <option value="Pedagogie Van Het Jonge Kind">Pedagogie Van Het
                                                                Jonge
                                                                Kind </option>
                                                            <option value="Secundair Onderwijs">Secundair Onderwijs
                                                            </option>
                                                            <option value="Sociaal Werk">Sociaal Werk </option>
                                                            <option value="Toegepaste Informatica">Toegepaste Informatica
                                                            </option>
                                                            <option value="Toerisme- & Recreatiemanagement">Toerisme- &
                                                                Recreatiemanagement </option>
                                                            <option value="Verkorte Educatieve Bachelor Lager Onderwijs">
                                                                Verkorte
                                                                Educatieve Bachelor
                                                                Lager
                                                                Onderwijs </option>
                                                            <option
                                                                value="Verkorte Educatieve Bachelor Secundair Onderwijs">
                                                                Verkorte Educatieve
                                                                Bachelor
                                                                Secundair
                                                                Onderwijs </option>
                                                            <option value="Verpleegkunde">Verpleegkunde </option>
                                                            <option value="Voedings-& Dieetkunde">Voedings-& Dieetkunde
                                                            </option>
                                                            <option value="Vroedkunde">Vroedkunde </option>

                                                        </select>
                                                    </div>



                                                    <div class="form-group edu Lerarenopleiding" 
                                                        style="display: none;">
                                                        @error('education_name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select id="Lerarenopleiding" class="form-control font-weight-lighter edu1" 
                                                             required>

                                                            <option value="Educatief Graduaat Secundair Onderwijs">
                                                                Educatief
                                                                Graduaat Secundair
                                                                Onderwijs
                                                            </option>
                                                            <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                                                            <option value="Lager Onderwijs">Lager Onderwijs </option>
                                                            <option value="Secundair Onderwijs">Secundair Onderwijs
                                                            </option>
                                                            <option value="Verkorte Educatieve Bachelor Lager Onderwijs">
                                                                Verkorte
                                                                Educatieve Bachelor
                                                                Lager
                                                                Onderwijs </option>
                                                            <option
                                                                value="Verkorte Educatieve Bachelor Secundair Onderwijs">
                                                                Verkorte Educatieve
                                                                Bachelor
                                                                Secundair
                                                                Onderwijs </option>
                                                        </select>
                                                    </div>



                                                    <div class="form-group edu Kunstopleiding" 
                                                        style="display: none;">
                                                        @error('education_name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select id="Kunstopleiding" class="form-control font-weight-lighter edu1" 
                                                            required>

                                                            <option
                                                                value="Academische Bachelor/Master Audiovisuele Kunsten">
                                                                Academische
                                                                Bachelor/Master
                                                                Audiovisuele Kunsten </option>
                                                            <option value="Academische Bachelor/Master Drama">Academische
                                                                Bachelor/Master Drama
                                                            </option>
                                                            <option value="Academische Bachelor/Master Muziek">Academische
                                                                Bachelor/Master Muziek
                                                            </option>
                                                            <option value="Educatieve Opleidingen In De Kunsten">Educatieve
                                                                Opleidingen In De Kunsten
                                                            </option>
                                                            <option value="Podium-En Eventtechnieken">Podium-En
                                                                Eventtechnieken
                                                            </option>
                                                            <option value="Professionele Bachelor Audiovisuele Kunsten">
                                                                Professionele Bachelor
                                                                Audiovisuele
                                                                Kunsten
                                                            </option>
                                                            <option value="Professionele Bachelor/Master Musical">
                                                                Professionele
                                                                Bachelor/Master Musical
                                                            </option>

                                                        </select>
                                                    </div>



                                                    <div class="form-group edu Postgraduaat"  style="display: none;">
                                                        @error('education_name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select id="Postgraduaat" class="form-control font-weight-lighter edu1" 
                                                             required>

                                                            <option value="Applied Artificial Intelligence ('24-'25)">
                                                                Applied
                                                                Artificial Intelligence
                                                                ('24-'25)
                                                            </option>
                                                            <option
                                                                value="Applied Bio-Informatics In Research & Diagnostics">
                                                                Applied Bio-Informatics
                                                                In
                                                                Research &
                                                                Diagnostics </option>
                                                            <option value="Bedrijfsverpleegkunde">Bedrijfsverpleegkunde
                                                            </option>
                                                            <option value="Coding (Online)">Coding (Online) </option>
                                                            <option value="Cosmetic Sciences">Cosmetic Sciences </option>
                                                            <option value="Diabeteseducator">Diabeteseducator </option>
                                                            <option value="Fiscaliteit ('24-'25)">Fiscaliteit ('24-'25)
                                                            </option>
                                                            <option value="Forensisch Hulpverlenend Expert">Forensisch
                                                                Hulpverlenend Expert </option>
                                                            <option value="Forensisch Onderzoek - Volzet">Forensisch
                                                                Onderzoek
                                                                -
                                                                Volzet </option>
                                                            <option value="Forensisch Verpleegkundig Expert">Forensisch
                                                                Verpleegkundig Expert </option>
                                                            <option value="Health Coach">Health Coach </option>
                                                            <option value="Informatiemanagement ('24-'25)">
                                                                Informatiemanagement
                                                                ('24-'25) </option>
                                                            <option value="Musical">Musical </option>
                                                            <option value="Muziek">Muziek </option>
                                                            <option value="Niet-Confessionele Zedenleer">Niet-Confessionele
                                                                Zedenleer </option>
                                                            <option value="Palliatieve Zorg">Palliatieve Zorg </option>
                                                            <option value="Pediatrie & Neonatologie">Pediatrie &
                                                                Neonatologie
                                                            </option>
                                                            <option value="Peri-Operatieve Zorgen">Peri-Operatieve Zorgen
                                                            </option>
                                                            <option value="Procesbegeleider Ethiek In Zorg En Welzijn">
                                                                Procesbegeleider Ethiek In Zorg
                                                                En
                                                                Welzijn
                                                            </option>
                                                            <option value="Technologisch Verpleegkundige">Technologisch
                                                                Verpleegkundige </option>
                                                            <option value="Toegepaste Artificiële Intelligentie">Toegepaste
                                                                Artificiële Intelligentie
                                                            </option>
                                                        </select>
                                                    </div>



                                                    <div class="form-group edu Bachelor-na-bachelor" 
                                                        style="display: none;">
                                                        @error('education_name')
                                                            <span  class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select id="Bachelor-na-bachelor" class="form-control font-weight-lighter edu1" 
                                                             required>
                                                            <option value="Zorgmanagement">Zorgmanagement </option>
                                                        </select>
                                                    </div>



                                                    <div class="form-group edu" id="education_year"
                                                        style="display: none;">
                                                        @error('education_year')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input class="form-control font-weight-lighter"
                                                            name="education_year" type="number" name="education_year"
                                                            placeholder="Year" min="1" max="3" required>
                                                    </div>


                                                    <div class="text-center pt-3 pb-2">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>


                                                </div>


                                            </form>

                                        </div>

                                        <div class="card shadow-sm mb-3">
                                            <form action="{{ route('password.update') }}" method="post"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('put')

                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-primary">Update Password
                                                        </p>
                                                        <hr>
                                                        <p class=" font-weight-light">Ensure your account is using a long,
                                                            random password to stay secure</p>
                                                        @error('request-user')
                                                            <hr>
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                            name="request-user" required readonly>
                                                    </div>
                                                </div>

                                                <div class="card-body" id="profileForm">

                                                    <div class="form-group">

                                                        <label for="update_password_current_password"
                                                            class="font-weight-light">Current Password
                                                        </label>
                                                        @error('current_password')
                                                            <span class=" text-danger"></span>
                                                        @enderror

                                                        <input class="form-control font-weight-lighter" type="password"
                                                            name="current_password" id="update_password_current_password"
                                                            autocomplete="current-password" required>



                                                    </div>


                                                    <div class="form-group">

                                                        <label for="update_password_password"
                                                            class="font-weight-light">New Password
                                                        </label>
                                                        @error('password')
                                                            <span class=" text-danger"></span>
                                                        @enderror

                                                        <input class="form-control font-weight-lighter" type="password"
                                                            name="password" id="update_password_password"
                                                            autocomplete="new-password" required>



                                                    </div>

                                                    <div class="form-group">

                                                        <label for="update_password_password_confirmation"
                                                            class="font-weight-light">New Password
                                                        </label>
                                                        @error('password_confirmation')
                                                            <span class=" text-danger"></span>
                                                        @enderror

                                                        <input class="form-control font-weight-lighter" type="password"
                                                            name="password_confirmation"
                                                            id="update_password_password_confirmation"
                                                            autocomplete="new-password" required>



                                                    </div>







                                                    <div class="text-center pt-3 pb-2">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>


                                                </div>


                                            </form>

                                        </div>



                                        <div class="card shadow-sm mb-3">
                                            <form action="{{ route('profile.destroy') }}" method="post"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('delete')

                                                <div class="card-header text-center bg-white text-center">
                                                    <div
                                                        class=" text-center col justify-content-center align-items-center">
                                                        <p class=" font-weight-bold btn-outline-danger">Delete Account</p>
                                                        <hr>
                                                        <p class=" font-weight-light">Once your account is deleted, all of
                                                            its resources and data will be permanently deleted. Before
                                                            deleting your account, please download any data or information
                                                            that you wish to retain</p>
                                                        @error('request-user')
                                                            <hr>
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                            name="request-user" required readonly>
                                                    </div>
                                                </div>

                                                <div class="card-body" id="profileForm">




                                                    <div class="form-group">

                                                        <label for="password" class="font-weight-light">Password
                                                        </label>
                                                        @error('password')
                                                            <span class=" text-danger"></span>
                                                        @enderror

                                                        <input class="form-control font-weight-lighter" type="password"
                                                            name="password" id="password" required>



                                                    </div>



                                                    <div class="text-center pt-3 pb-2">
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick=" return confirm('Are you sure you want to delete your account?')">Delete
                                                            Account</button>
                                                    </div>


                                                </div>


                                            </form>

                                        </div>




                                    </div>
                                </div>
                            </div>


                        </section>





                    </div>






                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif



@endsection


@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
