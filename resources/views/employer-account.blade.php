@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/employer_account.css')}}" />

@section('content')

    <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
        <p class="first-heading mt-3">Welcome To Rojgarshine</p>
        <h3 class="second-heading">Get started with Rojgarshine Recruitment </h3>
        <!-- <h4 class="third-heading">Bouquet of solutions to meet all your hiring needs</h4> -->

        <img src="{{ asset('frontend/images/team.png')}}" alt="" class="img-fluid img-create">

      </div>
      <div class="col-lg-6 col-md-6 col-12 ">
        <form action="{{route('employer-store')}}" method="post" class="border-form" id="registrationform">
          @csrf

          <div>
            <header>Create Account</header>
            <div class="header-line"></div>
            <p class="already">or already registered? <span class="policy">Login Now</span></p>
          </div>


          <div class="form-group">
            <label for=""></label>
            <input type="text" placeholder="Company Name" class="form-control" name="company_name">
            <font style="color:red"> {{ $errors->has('company_name') ?  $errors->first('company_name') : '' }} </font>
          </div>
          <div class="form-group">
            <label for=""></label>
            <input type="email" placeholder="Official Email" class="form-control"name="official_email">
             <font style="color:red"> {{ $errors->has('official_email') ?  $errors->first('official_email') : '' }} </font>
          </div>
          <div class="form-group">
            <label for=""></label>
            <input type="number" placeholder="Mobile" class="form-control"name="mobile">
             <font style="color:red"> {{ $errors->has('mobile') ?  $errors->first('mobile') : '' }} </font>
          </div>
          
          <div class="form-group">
            <label for=""></label>
            <input type="text" placeholder="Contact's Person Name" class="form-control" name="name">
            <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
             <input type="hidden" name="role_id"value="2">
          </div>
          <label for="" class="company-type">Company Type<sup>*</sup> </label>
          <p>

          <button class="btn btn-company ml-2" type="button" data-toggle="collapse"  href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <input class="form-check-input" type="radio" name="company_type" id="exampleRadios2"value="company">
              <label class="form-check-label" for="exampleRadios2">
              Company
            </button> </label>

            <button class="btn btn-company ml-2" type="button" data-toggle="collapse"  href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <input class="form-check-input" type="radio" name="company_type" id="exampleRadios2"value="consultant" >
              <label class="form-check-label" for="exampleRadios2">
               Consultant
            </button> </label>
          </p>
          <div class="collapse collapse-industry" id="collapseExample">
            <div class="card card-body">
              <select class="form-control industry-option" name="industry">
                <option>Select Industry</option>
                <option value="Web developer">Web developer</option>
                <option>Web developer</option>
                <option value="Full stack developer">Full stack developer</option>
                

              </select>
               <font style="color:red"> {{ $errors->has('industry') ?  $errors->first('industry') : '' }} </font>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Pin Code"name="pin_code">
              <font style="color:red"> {{ $errors->has('pin_code') ?  $errors->first('pin_code') : '' }} </font>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="GSTIN (Optional)"name="gstin">

            </div>
          </div>
          <div class="form-group">
            <label for=""></label>
            <input type="email" placeholder="Email ID" class="form-control" name="email">
            <font style="color:red"> {{ $errors->has('email') ?  $errors->first('email') : '' }} </font>
          </div>
          <div class="form-group">
            <label for=""></label>
            <input type="text" placeholder="City" class="form-control"name="city">
            <font style="color:red"> {{ $errors->has('city') ?  $errors->first('city') : '' }} </font>
          </div>

          <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" value="pc" id="defaultCheck1"name="promotional_communication">
            <font style="color:red"> {{ $errors->has('promotional_communication') ?  $errors->first('promotional_communication') : '' }} </font>
            <label class="form-check-label" for="defaultCheck1">
              I agree to receive Promotional Communication from Rojgarshine
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox"  id="defaultCheck2" name="terms_condition" value="tc">
            <font style="color:red"> {{ $errors->has('terms_condition') ?  $errors->first('terms_condition') : '' }} </font>
            <label class="form-check-label" for="defaultCheck2">
              I agree to <a href="#" class="policy">Terms & Conditions</a> and <a href="#" class="policy">Privacy Policy</a>
            </label>
          </div>

          <div>
           <button class="btn btn-sm btn-block text-white form-btn p-2 mt-2">Create Account</button>

          </div>
        </form>
      </div>
    </div>

  </div>
    @endsection