@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/employer_account.css')}}" />

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-12">
                <p class="first-heading mt-3">Welcome To Rojgarshine</p>
                <h3 class="second-heading">Get started with Rojgarshine Recruitment     </h3>
                <!-- <h4 class="third-heading">Bouquet of solutions to meet all your hiring needs</h4> -->
    
              <img src="images/team.png" alt="" class="img-fluid img-create">
              
            </div>
            <div class="col-lg-6 col-md-6 col-12 " >
                <form action="" class="border" id="registrationform">
                    <div>
                        <header>Create Account</header>
                        <div class="header-line"></div>
                        <p class="already">or already registered? <span class="policy">Login Now</span></p>
                    </div>    
                    
                    
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" placeholder="Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="email" placeholder="Official Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="number" placeholder="Mobile" class="form-control">
                      </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" placeholder="Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" placeholder="Contact's Person Name" class="form-control">
                    </div>
                    <label for="" class="company-type">Company Type</label>
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Pin Code">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="GSTIN (Optional)">
                        </div>
                      </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" placeholder="Email ID" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" placeholder="City" class="form-control">
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                         I agree to receive Promotional Communication from Rojgarshine
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            I agree to <a href="#" class="policy">Terms & Conditions</a>  and <a href="#"class="policy">Privacy Policy</a>
                        </label>
                      </div>
                    
                   <div>
                    <a href="index.html"> <button type="button" class="btn btn-sm btn-block text-white form-btn p-2 mt-2">Create Account</button></a>
                   
                   </div>
                  </form>
            </div>
        </div>

    </div>
    @endsection