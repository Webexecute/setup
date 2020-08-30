@extends('backend.layout.layout')
@section('content')
<div class="section-body">
    <div class="row mt-sm-4 background-image-body">
        <div class="col-md-12 col-lg-12 box-center">
            <div class="row author-box">
                <img alt="image" src="assets/img/users/user-6.png" class="rounded-circle author-box-picture box-center mt-4">
            </div>
           <div class="row author-box">
                <div class="page-inner box-center align-center">
                  <h2><a href="#">Alexa Lopez</a></h2>
                  <div class="page-description">
                        <h5>Web Developer</h5>
                  </div>
                </div>
            </div> 
            <div class="row author-box mb-4">
                <div class="box-center align-center">
                <div class="mb-2 mt-3">
                  <h6>Follow Hasan On</h6>
                </div>
                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <div class="w-100 d-sm-none"></div>
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
              <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                aria-selected="true">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                aria-selected="false">Edit Profile</a>
            </li>
          </ul>
          <div class="tab-content tab-bordered" id="myTab3Content">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
              <div class="row">
                <div class="col-md-3 col-6 b-r">
                  <strong>Full Name</strong>
                  <br>
                  <p class="text-muted">Alexa Lopez</p>
                </div>
                <div class="col-md-3 col-6 b-r">
                  <strong>Mobile</strong>
                  <br>
                  <p class="text-muted">(0123) 456 7890</p>
                </div>
                <div class="col-md-3 col-6 b-r">
                  <strong>Email</strong>
                  <br>
                  <p class="text-muted">jessica@example.com</p>
                </div>
                <div class="col-md-3 col-6">
                  <strong>Location</strong>
                  <br>
                  <p class="text-muted">India</p>
                </div>
              </div>
              
            
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
              <form method="post" class="needs-validation">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>First Name</label>
                      <input type="text" class="form-control" value="Jessica">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Last Name</label>
                      <input type="text" class="form-control" value="Hill">
                      <div class="invalid-feedback">
                        Please fill in the last name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="jessica@example.com">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Phone</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea
                        class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-0 col-12">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                        <div class="text-muted form-text">
                          You will get new information about products, offers and promotions
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right">
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