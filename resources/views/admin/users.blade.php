@extends('layouts.admin')



@section('admin-content')



<div class="right-ceiling">
    <div class="right-sorting">

    <h4>USERS</h4>

    </div>

</div>



<div class="contact-main-container">

    <div class="users-main-container">
        <div class="create-new-user">

            <div class="main-buttons">
                <button class="create-new-user-btn">Create New User</button>
                <div class="usertypes">
                    <span>USERTYPE</span>
                    <div>
                        <div>
                            <label for="usertype-user">User</label><br>
                            <input type="checkbox" name="usertype-user" id="usertype-user" checked>
                        </div>

                        <div>
                            <label for="usertype-writer">Writer</label><br>
                            <input type="checkbox" name="usertype-writer" id="usertype-writer" checked>
                        </div>


                        <div>
                            <label for="usertype-admin">Admin</label><br>
                            <input type="checkbox" name="usertype-admin" id="usertype-admin" checked>
                        </div>

                        <div>
                            <label for="block">Blocked Users</label><br>
                        <input type="checkbox" name="blocked" id="blocked" checked>
                        </div>

                        
                    </div>
                </div>


                <div class="user-search">
                    <span>USER SEARCH</span>
                    <div>
                        <input type="search" name="search" id="search" placeholder="USERNAME">
                        <label for="search"><button>Search</button></label>
                    </div>

                </div>

                <div class="user-email-search">
                    <span>USER E-MAIL SEARCH</span>
                    <div>
                        <input type="search" name="email-search" id="email-search" placeholder="USER E-MAIL">
                        <label for="email-search"><button>Search</button></label>
                    </div>

                </div>


            </div>



            <div class="new-user">
                <form action="{{ route('admin-user-create') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <div class="new-user-avatar-box">
                            <img class="new-user-avatar" src="{{ asset('img/avatars/default.svg') }}" alt="new-user-avatar">
                        </div>
                        @error('avatar')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="file" name="avatar" id="new-user-avatar">

                    </div>
                    <div>
                        <label for="new-user-name">USERNAME: </label>
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="text" name="name" id="new-user-name" value="{{ old('username') }}" required>
                    </div>

                    <div>
                        <label for="new-user-email">E-MAIL: </label>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="email" name="email" id="new-user-email" value="{{ old('email') }}" required>
                    </div>

                    <div>
                        <label for="new-user-usertype">USERTYPE: </label>
                        @error('usertype')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <select name="usertype" id="new-user-usertype" required>
                            <option selected value="user">User</option>
                            <option value="writer">Writer</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div>
                        <label for="new-user-password">PASSWORD: </label>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="text" name="password" id="new-user-password" value="{{ old('password') }}"
                            required>
                    </div>

                    <div>
                        <label for="new-user-birthday">BIRTHDAY: </label>
                        @error('birthday')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="date" name="birthday" id="new-user-birthday" value="{{ old('birthday') }}">

                    </div>

                    <div>
                        <label for="new-user-abaut">ABOUT USER: </label>
                        @error('about')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <textarea name="about" id="new-user-about">{{ old('about') }}</textarea>
                    </div>

                    <div>
                        <input type="submit" value="CREATE">
                    </div>



                </form>

                <button class="new-user-cancel">CANCEL</button>
            </div>


        </div>
        @foreach ($users as $user)
            <div class="users-container" usertype="{{$user->usertype}}" username="{{$user->name}}" ban="{{$user->is_banned}}"
                useremail="{{ $user->email }}">

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
                        <a href="{{ route('admin-news') }}" onclick="return confirm('ARE YOUE SURE TO LEAVE ADMIN DASHBOARD')"><button>News: {{ $user->news->count() }}</button></a>
                        <a href="{{ route('admin-comments') }}" onclick="return confirm('ARE YOUE SURE TO LEAVE ADMIN DASHBOARD')"><button>Comments:
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
                                        <input type="number" name="requestId" id="requestId" value="{{ $item->id }}"
                                            required readonly hidden>
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
                                <input style="display: none" type="number" name="userId" value="{{ $user->id }}"
                                    hidden readonly required>
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
                                <input style="display: none" type="number" name="userId" value="{{ $user->id }}"
                                    hidden readonly required>
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



                        <form action="{{ route('admin-user-update') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="profile-information-avatar">
                                <div class="profile-avatar-box">
                                    <img class="profile-avatar" src="{{ asset($user->avatar) }}" alt="Profile Avatar">
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
        @endforeach






    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin-users.js') }}"></script>
@endsection
