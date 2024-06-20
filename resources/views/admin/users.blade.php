@extends('layouts.admin')



@section('admin-content')
    <div class="mb-5">

        <div class="right-ceiling">
            <div class="right-sorting">

                <h4>Create New User</h4>

            </div>

        </div>


        <div class="card shadow-sm mb-3">
            <form action="{{route('admin-user-create')}}" method="post" enctype="multipart/form-data">

                @csrf



                <div class="card-header text-center bg-white text-center">
                    <div class=" text-center col justify-content-center align-items-center">
                        <p class=" font-weight-bold btn-outline-primary">New User</p>
                        <hr>
                        <p class=" font-weight-light">Create Informations</p>




                    </div>
                </div>



                <div class="card-header avatar-container  text-center bg-white text-center">


                    <div class="avatar text-center row justify-content-center">
                        <img class="avatar-photo" src="{{ asset('img/users/default.svg') }}" alt="avatar"
                            style="max-height: 500px; max-width: 500px; aspect-ratio: auto;">
                    </div>


                    @error('avatar')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror

                    <input class="avatar-photo-input mt-3 btn btn-outline-primary btn-sm" name="avatar" type="file"
                        accept="image/*">



                </div>

                <div class="card-body" id="profileForm">

                    <div class="form-group">
                        <label for="profileName" class="font-weight-light">First
                            Name</label>

                        @error('firstname')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control font-weight-lighter" name="firstname" value="{{old('firstname')}}" required>
                    </div>

                    <div class="form-group">
                        <label for="profileName" class="font-weight-light">Last
                            Name</label>
                        @error('lastname')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control font-weight-lighter" name="lastname" value="{{old('lastname')}}" required>
                    </div>

                    <div class="form-group">
                        <label for="profileName" class="font-weight-light">User
                            Name</label>
                        @error('username')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control font-weight-lighter" name="username" value="{{old('username')}}" required>
                    </div>

                    

                    <div class="form-group">
                        <label for="profileName" class="font-weight-light">E-Mail</label>
                        @error('email')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control font-weight-lighter" name="email" value="{{old('email')}}" required>
                    </div>

                    <div class="form-group">
                        <label for="profileName" class="font-weight-light">Password</label>
                        @error('password')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" class="form-control font-weight-lighter" name="password" required>
                    </div>






                    <div class="form-group">

                        <label for="usertype">User Type Request</label>
                        @error('usertype')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror


                        <select class="form-control selector" name="usertype" id="usertype" required>
                            <option selected disabled>Select User Type</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>


                    </div>


                    <div class="form-group">

                        <label for="education_type" class="font-weight-light">Education
                        </label>
                        @error('education_type')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                        @error('education_name')
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
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </div>





                </div>



            </form>

        </div>





    </div>






    <div class="mt-5">
        <div class="right-ceiling">
            <div class="right-sorting">

                <h4>Users</h4>

            </div>

        </div>



        @foreach ($users as $user)
            <div class="container dashboard-section py-5 mt-5">
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
                    <div class=" py-5 mt-5">
                        <p class="font-weight-light" id="dashboardName">USER NAME: {{$user->username}} </p>
                        <hr>
                        <p class="font-weight-light" id="dashboardFieldOfStudy">USER TYPE: {{$user->usertype}}</p>



                       

                        <hr>

                        

                    </div>
                </div>
                <div class="col-lg-8 pl-5 mt-5">
                    <div class="text-center">
                        <h5 class="font-weight-lighter text-info mb-3" style="font-size: 30px;">PROFILE INFORMATION</h5>
                        <div class="block" style="background-color: #d9534f;"></div>
                    </div>

                    <div class="activity-links mt-5">
                        <p class="bg-white text-primary border text-decoration-none">FIRST NAME: {{$user->firstname}}</p>
                        <p class="bg-white text-primary border text-decoration-none">LAST NAME: {{$user->lastname}}</p>
                        <p class="bg-white text-primary border text-decoration-none">USER NAME: {{$user->username}}</p>
                        <p class="bg-white text-primary border text-decoration-none">USER TYPE: {{$user->usertype}}</p>
                        <p class="bg-white text-primary border text-decoration-none">E-MAIL: {{$user->email}}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{$user->education_type}}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{$user->education_name}}</p>
                        <p class="bg-white text-primary border text-decoration-none">{{$user->education_year}}</p>
                    </div>
                </div>
            </div>
            <div class=" card-body font-weight-light">
                <div class="card-body row justify-content-around">
                    

                    

                    @if ($user->is_banned)
                        <form action="{{ route('admin-user-unblock') }}" method="post">
                            @csrf
                            @method('put')
                            <input type="number" name="userId" value="{{ $user->id }}" required
                                readonly hidden>
                            <input class="btn btn-success" type="submit" value="Unblock User"
                                onclick="return confirm('ARE YOUE SURE')">
                        </form>
                    @else
                        <form action="{{ route('admin-user-block') }}" method="post">
                            @csrf
                            @method('put')
                            <input type="number" name="userId" value="{{ $user->id }}" readonly
                                required hidden>
                            <input class="btn btn-danger" type="submit" value="Block User"
                                onclick="return confirm('ARE YOUE SURE')">
                        </form>
                    @endif



                    <form action="{{ route('admin-user-delete', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete User"
                            onclick="return confirm('ARE YOUE SURE')">

                    </form>


                </div>
            </div>
           



        </div>
        @endforeach

        













        {{-- @foreach ($users as $user)
                    <div class="users-container" usertype="{{ $user->usertype }}" username="{{ $user->name }}"
                        ban="{{ $user->is_banned }}" useremail="{{ $user->email }}">
    
                        <div class="user-container-box">
                            <div class="users-container-top">
                                <div>
                                    <div class="user-avatar-box">
                                        <img class="user-avatar" src="{{ asset($user->avatar) }}" alt="new-user-avatar">
                                    </div>
    
                                </div>
                                <div>
                                    <span>User Name</span>
                                    <span>{{ $user->name }}</span>
                                </div>
    
                                <div>
                                    <span>E-Mail</span>
                                    <span>{{ $user->email }}</span>
                                </div>
    
                                <div>
                                    <span>Usertype</span>
                                    <span>{{ $user->usertype }}</span>
                                </div>
    
    
                                <div>
                                    <span>Banned</span>
                                    <span>
                                        @if ($user->is_banned == 0)
                                            No
                                        @else
                                            Yes
                                        @endif
                                    </span>
                                </div>
    
    
    
                            </div>
    
                            <div class="users-container-bottom">
                                <a href="{{ route('admin-news') }}"
                                    onclick="return confirm('ARE YOUE SURE TO LEAVE ADMIN DASHBOARD')"><button>News:
                                        {{ $user->news->count() }}</button></a>
                                <a href="{{ route('admin-comments') }}"
                                    onclick="return confirm('ARE YOUE SURE TO LEAVE ADMIN DASHBOARD')"><button>Comments:
                                        {{ $user->comments->count() }}</button></a>
    
    
                                @foreach ($user->UsertypeRequest as $item)
                                    <div class="usertype-request">
    
    
    
    
    
                                        <button>Usertype Request: {{ $item->request }}</button>
    
    
    
                                        <div>
                                            <form action="{{ route('admin-usertype-accept') }}" method="post">
                                                @csrf
                                                @method('put')
                                                @error('requestId')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                                <input type="number" name="requestId" id="requestId"
                                                    value="{{ $item->id }}" required readonly hidden>
                                                <input type="submit" value="ACCEPT">
                                            </form>
    
                                            <form action="{{ route('admin-usertype-reject') }}" method="post">
                                                @csrf
                                                @method('delete')
                                                @error('requestId')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                                <input type="number" name="requestId" id="requestId"
                                                    value="{{ $item->id }}" readonly required hidden>
                                                <input class="user-block-btn" type="submit" value="REJECT"
                                                    onclick="return confirm('ARE YOUE SURE')">
                                            </form>
                                        </div>
    
    
    
    
    
                                    </div>
                                @endforeach
    
                                <div class="user-password-reset">
                                    <form action="{{ route('admin-userpassword-reset') }}" method="post">
                                        @csrf
                                        @method('put')
    
                                        @error('password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                        <input style="display: none" type="number" name="userId"
                                            value="{{ $user->id }}" hidden readonly required>
                                        <input type="text" name="password" required>
                                        <input type="submit" value="RESET PASSWORD">
                                    </form>
    
                                </div>
    
                                <div class="user-usertype-change">
                                    <form action="{{ route('admin-usertype-change') }}" method="post">
                                        @csrf
                                        @method('put')
    
                                        @error('usertypeChange')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                        <input style="display: none" type="number" name="userId"
                                            value="{{ $user->id }}" hidden readonly required>
                                        <select name="usertypeChange" id="usertypeChange" required>
                                            <option value="" selected disabled hidden>SELECT USERTYPE</option>
                                            <option value="user">User</option>
                                            <option value="writer">Writer</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        <input type="submit" value="CHANGE USERTYPE">
                                    </form>
    
                                </div>
    
    
    
    
    
    
                                <button class="users-edit-btn">Edit User</button>
    
                                @if ($user->is_banned)
                                    <form action="{{ route('admin-user-unblock') }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="number" name="userId" value="{{ $user->id }}" required readonly
                                            hidden>
                                        <input class="user-block-btn" type="submit" value="Unblock User"
                                            onclick="return confirm('ARE YOUE SURE')">
                                    </form>
                                @else
                                    <form action="{{ route('admin-user-block') }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="number" name="userId" value="{{ $user->id }}" readonly required
                                            hidden>
                                        <input class="user-block-btn" type="submit" value="Block User"
                                            onclick="return confirm('ARE YOUE SURE')">
                                    </form>
                                @endif
    
    
                                <form action="{{ route('admin-user-delete', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="user-delete-btn" type="submit" value="Delete User"
                                        onclick="return confirm('ARE YOUE SURE')">
                                </form>
    
    
                            </div>
                        </div>
    
    
    
    
    
    
    
    
    
                        <div class="profile">
                            <div class="profile-information">
    
    
    
                                <form action="{{ route('admin-user-update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
    
    
                                    <div class="profile-information-avatar">
                                        <div class="profile-avatar-box">
                                            <img class="profile-avatar" src="{{ asset($user->avatar) }}"
                                                alt="Profile Avatar">
                                        </div>
                                        <input type="file" name="avatar" id="avatar" accept="image/*">
                                        @error('avatar')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
    
                                    <div class="profile-information-birthday">
                                        <label for="birthday">Birthday: </label>
                                        @error('birthday')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                        <input type="date" name="birthday" id="birthday"
                                            value="{{ old('birthday', $user->birthday) }}">
                                    </div>
    
                                    <div class="profile-information-about">
                                        <label for="about">About Me: </label><br><br>
                                        @error('about')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                        <textarea name="about" id="about">{{ old('about', $user->about) }}</textarea>
                                    </div>
    
                                    <div>
                                        <input type="number" name="userId" value="{{ $user->id }}" readonly required
                                            hidden>
                                        <input type="submit" value="UPDATE">
                                    </div>
    
    
                                </form>
    
                                <button class="cancel">CANCEL</button>
    
    
    
                            </div>
    
    
                        </div>
    
    
    
    
                    </div>
                @endforeach --}}



    </div>
@endsection


