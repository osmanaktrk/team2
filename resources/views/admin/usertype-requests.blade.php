@extends('layouts.admin')



@section('admin-content')
    <div class="right-ceiling">

        <h4>Admin Requests</h4>
        <div class="right-sorting">


        </div>

    </div>


    <div class="request-box">





        @foreach ($usertyperequests as $request)
            @if ($request->request == 'admin')
                <div class="requested-users">
                    <div>
                        <span>User Name</span>
                        <span>{{ $request->user->name }}</span>
                    </div>

                    <div>
                        <span>E-Mail</span>
                        <span>{{ $request->user->email }}</span>
                    </div>

                    <div>
                        <span>Usertype</span>
                        <span>{{ $request->user->usertype }}</span>
                    </div>


                    <div>
                        <span>Banned</span>
                        <span>
                            @if ($request->user->is_banned == 0)
                                No
                            @else
                                Yes
                            @endif
                        </span>
                    </div>


                    <div>
                        <span>Admin Request</span>

                        <div>
                            <form action="{{ route('admin-usertype-accept') }}" method="post">
                                @csrf
                                @method('put')
                                @error('requestId')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="number" name="requestId" id="requestId" value="{{ $request->user_id }}" required
                                    readonly hidden>
                                <input type="submit" value="ACCEPT">
                            </form>
                            <br>
                            <form action="{{ route('admin-usertype-reject') }}" method="post">
                                @csrf
                                @method('delete')
                                @error('requestId')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="number" name="requestId" id="requestId" value="{{ $request->user_id }}"
                                    readonly required hidden>
                                <input class="user-block-btn" type="submit" value="REJECT"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        </div>
                    </div>


                    <div class="user-password-reset">
                        <form action="{{ route('admin-userpassword-reset') }}" method="post">
                            @csrf
                            @method('put')

                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <input style="display: none" type="number" name="userId" value="{{ $request->user_id }}"
                                hidden readonly required>
                            <input type="text" name="password" required>
                            <br>
                            <input type="submit" value="RESET PASSWORD">
                        </form>

                    </div>

                    <div>
                        <a href="{{ route('admin-users') }}"
                            onclick="return confirm('ARE YOUE SURE TO LEAVE THIS PAGE')"><button>Edit User</button></a>


                        @if ($request->user->is_banned)
                            <form action="{{ route('admin-user-unblock') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $request->user_id }}" required readonly
                                    hidden>
                                <input class="user-block-btn" type="submit" value="Unblock User"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @else
                            <form action="{{ route('admin-user-block') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $request->user_id }}" readonly required
                                    hidden>
                                <input class="user-block-btn" type="submit" value="Block User"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @endif


                        <form action="{{ route('admin-user-delete', $request->user_id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="user-delete-btn" type="submit" value="Delete User"
                                onclick="return confirm('ARE YOUE SURE')">
                        </form>
                    </div>



                </div>
            @endif
        @endforeach




    </div>


    <div class="right-ceiling">

        <h4>User Requests</h4>
        <div class="right-sorting">


        </div>

    </div>

    <div class="request-box">
        

        @foreach ($usertyperequests as $request)
            @if ($request->request == 'user')
                <div class="requested-users">
                    <div>
                        <span>User Name</span>
                        <span>{{ $request->user->name }}</span>
                    </div>

                    <div>
                        <span>E-Mail</span>
                        <span>{{ $request->user->email }}</span>
                    </div>

                    <div>
                        <span>Usertype</span>
                        <span>{{ $request->user->usertype }}</span>
                    </div>


                    <div>
                        <span>Banned</span>
                        <span>
                            @if ($request->user->is_banned == 0)
                                No
                            @else
                                Yes
                            @endif
                        </span>
                    </div>


                    <div>
                        <span>User Request</span>

                        <div>
                            <form action="{{ route('admin-usertype-accept') }}" method="post">
                                @csrf
                                @method('put')
                                @error('requestId')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="number" name="requestId" id="requestId" value="{{ $request->user_id }}"
                                    required readonly hidden>
                                <input type="submit" value="ACCEPT">
                            </form>
                            <br>
                            <form action="{{ route('admin-usertype-reject') }}" method="post">
                                @csrf
                                @method('delete')
                                @error('requestId')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="number" name="requestId" id="requestId" value="{{ $request->user_id }}"
                                    readonly required hidden>
                                <input class="user-block-btn" type="submit" value="REJECT"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        </div>
                    </div>


                    <div class="user-password-reset">
                        <form action="{{ route('admin-userpassword-reset') }}" method="post">
                            @csrf
                            @method('put')

                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <input style="display: none" type="number" name="userId" value="{{ $request->user_id }}"
                                hidden readonly required>
                            <input type="text" name="password" required>
                            <br>
                            <input type="submit" value="RESET PASSWORD">
                        </form>

                    </div>

                    <div>
                        <a href="{{ route('admin-users') }}"><button>Edit User</button></a>


                        @if ($request->user->is_banned)
                            <form action="{{ route('admin-user-unblock') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $request->user_id }}" required readonly
                                    hidden>
                                <input class="user-block-btn" type="submit" value="Unblock User"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @else
                            <form action="{{ route('admin-user-block') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="number" name="userId" value="{{ $request->user_id }}" readonly required
                                    hidden>
                                <input class="user-block-btn" type="submit" value="Block User"
                                    onclick="return confirm('ARE YOUE SURE')">
                            </form>
                        @endif


                        <form action="{{ route('admin-user-delete', $request->user_id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="user-delete-btn" type="submit" value="Delete User"
                                onclick="return confirm('ARE YOUE SURE')">
                        </form>
                    </div>



                </div>
            @endif
        @endforeach


    </div>
@endsection
