@extends('backend.layout.layout')
@section('content')
@php

$currentRoute = Route::current()->getName();

if (!empty(Auth()->guard('admin')->user())) {
$data = Auth()->guard('admin')->user();

  if($data['usertype'] == "A"){
      $userType = "Admin";
  }
  if($data['usertype'] == "U"){
      $userType = "User";
  }
}
@endphp
<div class="section-body">
    <div class="row mt-sm-4 background-image-body">
        <div class="col-md-12 col-lg-12 box-center">
            <div class="row author-box">
                <img alt="image" src="{{ asset('public/uploads/my_image/'.$data['image']) }}" class="rounded-circle author-box-picture box-center mt-4">
            </div>
           <div class="row author-box">
                <div class="page-inner box-center align-center">
                <h2><a href="{{ route('my-profile') }}">{{  strtoupper($data['username']) }}</a></h2>
                  <div class="page-description">
                        <h5>{{ strtoupper($userType) }}</h5>
                  </div>
                </div>
            </div> 
                			
        </div>
    </div>
  <div class="row mt-sm-4">
    
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="padding-20">
          <ul class="nav nav-pills mb-1" id="myTab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#settings" role="tab"
                aria-selected="true">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " id="home-tab2" data-toggle="tab" href="#changepassword" role="tab"
                aria-selected="true">Change Password</a>
            </li>
            
          </ul>
          <div class="tab-content tab-bordered" id="myTab3Content">
           
            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
              <form method="post" class="" id="edit-profile" enctype="multipart/form-data">@csrf
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>User Name</label>
                      <input type="text" class="form-control" name="username" value="{{  $data['username'] }}">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $data['email']}}">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>Profile Image</label>
                        <input type="file" name="image" class="form-control" style="padding-top: 7px">
                    </div>
                  </div>
                 
                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>


            <div class="tab-pane fade show " id="changepassword" role="tabpanel" aria-labelledby="profile-tab2">
            <form method="post" class="needs-validation" id="change-password" action="{{ route('change-password') }}">@csrf
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>Old Passsword</label>
                      <input type="text" class="form-control" name="oldpassword" placeholder="enter your old password">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>New Passsword</label>
                    <input type="text" class="form-control" name="newpassword" placeholder="enter your new password">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-12 col-12">
                      <label>New Confirm Passsword</label>
                    <input type="text" class="form-control" name="newconfirmpassword" placeholder="enter your new confirm password">
                    </div>
                  </div>

                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection