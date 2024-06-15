@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
                    {{-- <span class="text-dark">Profile photo</span> --}}
                    <img src="{{asset($user->avatar)}}" alt="">
                </div>
                <div class="mt-5">
                    <p class="font-weight-light" id="dashboardName">USER NAME: {{$user->username}} </p>
                    <hr>
                    <p class="font-weight-light" id="dashboardFieldOfStudy">USER TYPE: {{$user->usertype}}</p>
                    <hr>
                    <button class="btn btn-danger customize-button" data-toggle="modal" data-target="#customizeModal">Customize</button>
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
        <div class="row text-center mt-4">
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">Recent posts</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">Another button</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">Another button</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">Main page</button>
            </div>
        </div>
    </div>
</section>

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
                <section class="profile-section mt-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-white text-center">
                                        <input type="file" id="profileImageInput" style="display: none;">
                                        <img src="https://via.placeholder.com/150" alt="Profile Picture" id="profileImage" class="rounded-circle mb-3" onclick="document.getElementById('profileImageInput').click();">
                                        <h2 class="font-weight-light" id="editName">Unknown</h2>
                                        <p class="text-muted" id="editEmail">Unknown@example.com</p>
                                        <p class="text-muted" id="editEducation">*Year* of *education*, specializing in *specialization*</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm" onclick="toggleEditProfile()">Edit Profile</a>
                                    </div>
                                    <div class="card-body">
                                        <form id="profileForm" class="d-none">
                                            <div class="form-group">
                                                <label for="profileName" class="font-weight-light">Name</label>
                                                <input type="text" class="form-control font-weight-lighter" id="profileName" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="profileEmail" class="font-weight-light">Email</label>
                                                <input type="email" class="form-control font-weight-lighter" id="profileEmail" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="profilePassword" class="font-weight-light">Password</label>
                                                <input type="password" class="form-control font-weight-lighter" id="profilePassword" placeholder="Enter new password">
                                            </div>
                                            <div class="form-group">
                                                <label for="educationLevel" class="font-weight-light">Education Level</label>
                                                <select class="form-control font-weight-lighter" id="educationLevel">
                                                    <option>Select Education Level</option>
                                                    <option value="Graduaat">Graduaat</option>
                                                    <option value="Bachelor">Bachelor</option>
                                                    <option value="Lerarenopleiding">Lerarenopleiding</option>
                                                    <option value="Kunstopleiding">Kunstopleiding</option>
                                                    <option value="Postgraduaat">Postgraduaat</option>
                                                    <option value="Bachelor-na-bachelor">Bachelor-na-bachelor</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="specializationGroup" style="display: none;">
                                                <label for="specialization" class="font-weight-light">Specialization</label>
                                                <select class="form-control font-weight-lighter" id="specialization"></select>
                                            </div>
                                            <div class="form-group" id="yearGroup" style="display: none;">
                                                <label for="year" class="font-weight-light">Year</label>
                                                <select class="form-control font-weight-lighter" id="year">
                                                    <option value="1st">First year</option>
                                                    <option value="2nd">Second year</option>
                                                    <option value="3rd">Third year</option>
                                                    <option value="4th">Fourth year</option>
                                                </select>
                                            </div>
                                            <div class="text-center pt-3 pb-2">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
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


@endsection


@section('js')
    <script src="{{asset('js/profile.js')}}"></script>
@endsection



