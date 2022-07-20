@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/employer_login.css')}}" />

@section('content')
<section>
        <div class="container mt-5">
          <div class="row">
          <div class="col-lg-8 col-md-6 col-12 left-part">
            <p class="first-heading">ROJGARSHINE HIRING SUITE FOR EMPLOYERS</p>
            <h3 class="second-heading">From Campus to Senior Level Hiring</h3>
            <h4 class="third-heading">Bouquet of solutions to meet all your hiring needs</h4>

          <center><img src="{{ asset('frontend/images/team.png')}}" alt="" class="img-fluid img-registration"></center>
          
         
          </div>
      
          <div class="col-lg-4 col-md-6 col-12 mb-5 border" id="registrationform">
            <div class="form login">
              <div class="form-content">
                  <header>Login</header>
                  <div class="header-line"></div>
                   <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="field input-field">
                          <input type="email" placeholder="Registered Email ID" class="input" name="email">
                      </div>

                      <div class="field input-field">
                          <input type="password" placeholder="Password" class="password" name="password">
                          
                      </div>

                      <div class="field">
                          <a href="index.html"><button class="button-field">Login</button></a>
                      </div>

                      <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                  </form>

                  <div>
                    <p class="form-text mt-4">Keep your account safe. <span class="bottom-form-text">Learn How</span> </p> 
                    <p class="form-text">Have a Query ? <span class="bottom-form-text">Contact Us</span></p> 
                    <hr>
                    <!-- <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span> -->
                  </div>
              </div>

              <div class="new-client">Are You a New Client?</div>
              <div class="field ">
                <a href="{{route('employer-account')}}"><button class=" create-account">Create Account</button></a>
            </div>
             
            </div>

  </section> 

@endsection