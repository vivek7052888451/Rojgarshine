@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/new_acc.css')}}" />

@section('content')
 <section>
        <div class=" container mt-5 mb-5">
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="sidebar box-sticky">
                        <div class="box shadow-lg bg-white  dotted mx-auto">
                            <div>
                                <img src="{{ asset('frontend/images/WebDesigning.png')}}" height="100" width="100" style="margin-left:120px; margin-top:-65px ;">
                            </div>
                            <div class="pt-4">
                                <h5 style="font-weight: bold; text-align: center;">On registering, you can</h5>
                            </div>
                            <div class="">
                                <ul class="li_list">
                                    <li><i class="fa fa-check-circle pt-4" aria-hidden="true" ></i>
                                        <span >Build your profile and let
                                            recruiters find </span>
                                    </li>
                                    <li><i class="fa fa-check-circle pt-3" aria-hidden="true" ></i>
                                        <span >Build your profile and let
                                            recruiters find </span>
                                    </li>
                                    <li><i class="fa fa-check-circle pt-3" aria-hidden="true" ></i>
                                        <span >Build your profile and let
                                            recruiters find </span>
                                    </li>
                                    <li><i class="fa fa-check-circle pt-3" aria-hidden="true" ></i>
                                        <span >Build your profile and let
                                            recruiters find </span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3 ">
                    <div class="main shadow-lg  p-4">
                        <div class="main_container">
                            <div class="register  pt-2">
                                <h5 style="font-weight:bold;">Find a job & grow your career</h5>
                                <form class="pt-4">
                                    <strong><label>Your Name:</label></strong>
                                    </br>
                                    <input type="text" name="uname" id="name" placeholder="What is your name " style="font-size: 13px; padding-left:12px; line-height:30px;">
                                    </br></br>
                                    <strong><label>Email Id:</label></strong>
                                    </br>
                                    <input type="text" name="uname" id="name" placeholder="Tell us your Email Id" style="font-size: 13px; padding-left:12px; line-height:30px;">
                                    <label class="label-size">We'll send you relevant jobs in your mail</label>
                                    </br></br>
                                    <strong><label>Password:</label></strong>
                                    </br>
                                    <input type="text" name="uname" id="name" placeholder="Create a password for your account" style="font-size: 13px; padding-left:12px; line-height:30px;">
                                    <label class="label-size">Minimum 6 characters required</label>
                                    </br></br>
                                    <strong><label>Mobile Number:</label></strong>
                                    </br>
                                    <input type="text" name="uname" id="name" placeholder="+91 9876543267" style="font-size: 13px; padding-left:12px; line-height:30px;">
                                    <label class="label-size">Recruiters will call you on this number</label>
                                    </br></br>
                                    <strong><label>Work Status</label></strong>
                                    </br>
                                    <input type="checkbox" name="status" id="experience" >
                                    &nbsp;
                                    <span class="label-size">I am Experienced</span>
                                   &emsp;
                                    <input type="checkbox" name="status" id="fresher">
                                    <span class="label-size">I am Fresher</span>
                                    <br /><br />
                                    <strong><label>Resume:</label></strong>
                                    <br />
                                    <div class="custom-file" id="file-custom">
      <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
    </div>
                                    

                                    <label class="label-size">Recruiters give first preference to candidates who have a
                                        resume</label>
                                    <br />
                                    <div class="line"></div>
                                    <button type="button" class="google_btn shadow-lg bg-white">
                                        <img src="images/google.png" class="google_icon_btn">Sign in with
                                        Google</button>
                                    <br /><br />
                                    <input type="checkbox" name="status" id="">&nbsp;
                                    Send me important updates on <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:20px; color:green;"></i>
                                    whatsapp
                                    <br /><br />
                                    <label id="terms"> By clicking Register, you agree to the <span style="color:#063455;">Terms and Conditions</span> &
                                        <span style="color:#063455;"> Privacy Policy</span> of Rojgar</label>
                                    <button class="btn mt-3 mb-3" id="reg">Register Now</button>

                                </form>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>

                </div>

    </section>

@endsection