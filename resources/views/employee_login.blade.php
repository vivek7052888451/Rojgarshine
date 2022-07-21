@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/employe_login.css')}}" />

@section('content')
 <div class="container mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <!-- new to start  -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12 main mt-5">
            <div class="row shadow-lg bg-white rounded">
              <div class="col-sm-12 A">
                <div class="new">
                  <div class="pt-3">
                    <h4 style="font-weight:bold; padding-bottom:15px;">New to Rojgarshine</h4>
                  </div>
                  <div>
                    <ul class="check_list">
                      <li><i class="fa fa-check" aria-hidden="true" style="font-size:16px;
                        color:#063455;"></i>&emsp;<span class="list_para">One click apply using
                          RojgarshineProfile</span></li>
                      <li><i class="fa fa-check" aria-hidden="true" style="font-size:16px;
                          color:#063455;"></i>&emsp;<span class="list_para">One click apply using
                          RojgarshineProfile</span></li>
                      <li><i class="fa fa-check" aria-hidden="true" style="font-size:16px;
                            color:#063455;"></i>&emsp;<span class="list_para">One click apply using
                          RojgarshineProfile</span></li>
                      <li><i class="fa fa-check" aria-hidden="true" style="font-size:16px;
                              color:#063455;"></i>&emsp;<span class="list_para">One click apply using
                          RojgarshineProfile</span></li>
                    </ul>
                  </div>
                  <div class="pt-4"><button type="button" class="register_btn"><a href="employe_account.php"
                        style="color:#063455; text-decoration: none;">Register
                        for Free</a></button></div>

                </div>
              </div>
              <div class="col-sm-12 B">
                <div class="row">
                  <div class="col-sm-6 B1"></div>
                  <div class="col-sm-6 B2">
                    <div class="img">
                      <img src="{{asset('frontend/images/register.png')}}" class="image_reg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- new to end -->
          <!-- login form start -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12 login mt-5 shadow-lg bg-white rounded">
            <div class="login_form mt-5">
              <h4 class="mb-5">Login</h4>
              <form>
                <strong><label>Email ID/Username</label></strong>
                <br />
                <input type="text" name="" id="name" placeholder="Enter Email ID/Username"
                  style="padding-left:12px; line-height:30px;">
                <br /><br />
                <strong><label>Email ID/Username</label></strong>
                <br />
                <input type="text" name="" id="name" placeholder="Enter Email ID/Username"
                  style="padding-left:12px; line-height:30px;">
                <div class="forget">
                  <a href="">Forget password?</a>
                </div>
                <button type="submit" class="btn btn-primary" id="log_btn"
                  style="background-color:#063455">Login</button>
                <div class="otp">
                  <a href="">Use OTP To Login</a>
                </div>
                <div class="line"></div>
                <button type="button" class="google_btn shadow-lg bg-white">
                  <img src="{{asset('frontend/images/google.png')}}" class="google_icon_btn">Sign in with Google</button>
              </form>
            </div>
          </div>
          <!-- login form end -->
        </div>
      </div>
    </div>
  </div>

@endsection