@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/joblisting.css')}}" />

@section('content')
<div class="container-fluid m-0 p-0 " style="overflow:hidden;">
        <nav class="mobile_nav navbar navbar-expand-sm navbar-light bg-white border-bottom first-row-border fixed-top">
            <a class="ml-2 font-weight-bold text-dark" href="#">
                <img src="images/magnifier.png" class=" search-img" alt="">
                <span class=" pt-3">Showing results for</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor"
                aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#"><input type="search" class="form-control"
                                id="inlineFormInputName" placeholder="Skills,Designation,Companies"></a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"><input type="text" placeholder="Location/Locality"
                                class="form-control"></a> </li>
                    <li class="nav-item "><a class="nav-link" href="#"><button
                                class="btn-search-job">Search</button></a> </li>

                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid alljob  p-0 mt-4">

        <div class="row">

            <div class=" col-lg-3 col-sm-12 col-md-12 col-12  left-sidebar ">
                <div id="main">
                    <div class="container">
                        <div class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq1" aria-expanded="true" aria-controls="faq1">Company Type</a>
                                </div>

                                <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Corporate(10)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Foreign MNC (7)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Indian MNC (4)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Govt/PSU (2)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq2" aria-expanded="true" aria-controls="faq2">Work From Home</a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                WFH during Covid (2)
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq3" aria-expanded="true" aria-controls="faq3">Experience</a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div>
                                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq4" aria-expanded="true" aria-controls="faq4">Department</a>
                                </div>

                                <div id="faq4" class="collapser" aria-labelledby="faqhead4" data-parent="#faq4">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Production and Maufacturing
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Strategic And Top Management
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Construction & Site
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Business Group
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq5" aria-expanded="true" aria-controls="faq5">Salary</a>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                0-3 Lakhs (26)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                3-6 Lakhs (14)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                6-10 Lakhs (14)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                10-15 Lakhs (14)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq6" aria-expanded="true" aria-controls="faq6">Role Category</a>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Construction Engineering (20)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Top Management
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Management
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Software Development
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq7" aria-expanded="true" aria-controls="faq7">Education</a>
                                </div>

                                <div id="faq7" class="collapser" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Any Postgraduate (40)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                MBA/PGDM (32)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Btech/B.E (35)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Any Graduate (95)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead8">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq8" aria-expanded="true" aria-controls="faq8">Posted by </a>
                                </div>

                                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Company Jobs (142)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Consultant Jobs (121)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead9">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq9" aria-expanded="true" aria-controls="faq9">Industries</a>
                                </div>

                                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Engineering & Construction
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                IT Services & Consulting
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Management Consulting (17)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead10">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq10" aria-expanded="true" aria-controls="faq2">Top Companies</a>
                                </div>

                                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                ICT Consultants (4)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Murugappa (5)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead12">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq12" aria-expanded="true" aria-controls="faq2">Location</a>
                                </div>

                                <div id="faq12" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Delhi/NCR (59)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Mumbai (39)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Bengaluru (33)
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-12 main-content">
                <section id="products">
                    <div class="container">
                        <div class="row">
                            <p class="first-main-content">1-20 of 269 Jobs In India</p>

                            <div class="col-lg-12 col-sm-12 col-12 offset-sm-0 m-3 ">
                                <article class=" back-middle-radius p-3">
                                    <div class="row">
                                        <div class="col-md-10 col-sm-10 col-8 p-4">
                                            <a class="head-middle" href="#" title="" target="_blank">Field Sales
                                                Executive
                                                | Refractionist</a>
                                            <div class="">
                                                <a href="#" class="head-middle" target="_blank"
                                                    title="Lenskart">Lenskart</a>
                                                <span class="head-middle" title="">3.0
                                                    <i class="fa fa-star text-warning ml-2 fa-sm"
                                                        aria-hidden="true"></i>
                                                    <a class=" font-reviews" href="#" target="_blank" title="">(1246
                                                        Reviews)</a>
                                            </div>
                                            <ul class="mt-7 nav">
                                                <li class="font-for-middle">
                                                    <i class="fa fa-briefcase mx-1 grey-text" aria-hidden="true"></i>
                                                    <span title="" class="font-for-middle">0-5 Yrs</span>
                                                </li>
                                                <li class="font-for-middle">
                                                    <i class="fa fa-rupee mx-1 grey-text "></i>
                                                    <span title=" ">50,000 -
                                                        3,00,000 PA.</span>
                                                </li>
                                                <li class="font-for-middle"><i class="fa fa-map-marker mx-1 grey-text"
                                                        aria-hidden="true"></i>
                                                    <span>Kolkata, Hyderabad/Secunderabad, Pune,
                                                        Bangalore/Bengaluru, Delhi / NCR, Mumbai (All Areas)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-3"><img class="img-fluid" alt="company"
                                            src="images/tcs.png"></div>
                                    </div>
                                    <div class="fs12 grey-text "><i class="fa fa-file mx-1" aria-hidden="true"></i>
                                        Minimum qualification:GraduationMaximum Age : 30 YearsA Field Sales Executive is
                                        respo...</div>
                                    <ul class="nav grey-text mt-3">
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales experience</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>sales executive activities</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>customer handling</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>Punctuality</li>
                                    </ul>
                                    <div class=" mt-20">
                                        <div class=""><i class="p-1 grey-text"></i><span class="grey-text">2
                                                Days Ago</span></div>
                                        <div class=""><i class="p-1"></i><span class="grey-text">save</span></div>
                                    </div>
                                </article>
                                </a>
                            </div>
                            <div class="col-lg-12 offset-lg-0 col-sm-12 offset-sm-0 col-12 m-3 ">
                                <article class=" back-middle-radius p-3">
                                    <div class="row  mt-3">
                                        <div class="col-md-10 col-9 p-4">
                                            <a class="head-middle" href="#" title="" target="_blank">Field Sales
                                                Executive
                                                | Refractionist</a>
                                            <div class="mt-7">
                                                <a href="#" class="head-middle" target="_blank"
                                                    title="Lenskart">Lenskart</a>
                                                <span class="head-middle" title="">3.0
                                                    <i class="fa fa-star text-warning ml-5 fa-sm"
                                                        aria-hidden="true"></i>
                                                    <a class="font-reviews" href="#" target="_blank" title="">(1246
                                                        Reviews)</a>
                                            </div>
                                            <ul class="mt-7 nav">
                                                <li class="font-for-middle grey-text">
                                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                    <span title="" class="mx-1">0-5 Yrs</span>
                                                </li>
                                                <li class="font-for-middle">
                                                    <i class="fa fa-rupee mx-1 grey-text "></i>
                                                    <span title=" " class="">50,000 -
                                                        3,00,000 PA.</span>
                                                </li>
                                                <li class=""><i class="fa fa-map-marker mx-1 grey-text"
                                                        aria-hidden="true"></i>
                                                    <span class="font-for-middle">Kolkata, Hyderabad/Secunderabad, Pune,
                                                        Bangalore/Bengaluru, Delhi / NCR, Mumbai (All Areas)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-3"><img class="img-fluid p-2" alt="company"
                                                src="images/citius.png"></div>
                                    </div>

                                    <div class="fs12 grey-text "><i class="fa fa-file mx-1" aria-hidden="true"></i>
                                        Minimum qualification:GraduationMaximum Age : 30 YearsA Field Sales Executive is
                                        respo...</div>
                                    <ul class="nav grey-text mt-3">
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales experience</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>sales executive activities</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>customer handling</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>Punctuality</li>
                                    </ul>
                                    <div class=" mt-20">
                                        <div class=""><i class="p-1 grey-text"></i><span class="grey-text">2
                                                Days Ago</span></div>
                                        <div class=""><i class="p-1"></i><span class="grey-text">save</span></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 offset-sm-0 m-3 ">
                                <article class=" back-middle-radius p-3">
                                    <div class="row   mt-3">
                                        <div class="col-md-10 col-9 p-4">
                                            <a class="head-middle" href="#" title="" target="_blank">Field Sales
                                                Executive
                                                | Refractionist</a>
                                            <div class="mt-7">
                                                <a href="#" class="head-middle" target="_blank"
                                                    title="Lenskart">Lenskart</a>
                                                <span class="head-middle" title="">3.0
                                                    <i class="fa fa-star text-warning ml-5 fa-sm"
                                                        aria-hidden="true"></i>
                                                    <a class="font-reviews" href="#" target="_blank" title="">(1246
                                                        Reviews)</a>
                                            </div>
                                            <ul class="mt-7 nav">
                                                <li class="font-for-middle grey-text ">
                                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                    <span title="" class="mx-1">0-5 Yrs</span>
                                                </li>
                                                <li class="font-for-middle">
                                                    <i class="fa fa-rupee mx-1 grey-text "></i>
                                                    <span title=" " class="">50,000 -
                                                        3,00,000 PA.</span>
                                                </li>
                                                <li class=""><i class="fa fa-map-marker mx-1 grey-text"
                                                        aria-hidden="true"></i>
                                                    <span class="font-for-middle">Kolkata, Hyderabad/Secunderabad, Pune,
                                                        Bangalore/Bengaluru, Delhi / NCR, Mumbai (All Areas)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-3"><img class="img-fluid" alt="company"
                                                src="images/tcs.png"></div>
                                    </div>
                                    <div class="fs12 grey-text "><i class="fa fa-file mx-1" aria-hidden="true"></i>
                                        Minimum qualification:GraduationMaximum Age : 30 Years A Field Sales Executive
                                        is
                                        respo...</div>
                                    <ul class="nav grey-text mt-3 ">
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales experience</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>sales executive activities</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>customer handling</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>Punctuality</li>
                                    </ul>
                                    <div class=" mt-20">
                                        <div class=""><i class="p-1 grey-text"></i><span class="grey-text">2
                                                Days Ago</span></div>
                                        <div class=""><i class="p-1"></i><span class="grey-text">save</span></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-12 col-sm-12 offset-lg-0 offset-sm-0 col-12 m-3 ">
                                <article class=" back-middle-radius p-3">
                                    <div class="row p-3  mt-3">
                                        <div class="col-md-10 col-9 p-4">
                                            <a class="head-middle" href="#" title="" target="_blank">Field Sales
                                                Executive | Refractionist</a>
                                            <div class="mt-7">
                                                <a href="#" class="head-middle" target="_blank" title="Lenskart">Citius
                                                    Tech</a>
                                                <span class="head-middle" title="">3.0
                                                    <i class="fa fa-star text-warning ml-5 fa-sm"
                                                        aria-hidden="true"></i>
                                                    <a class="font-reviews" href="#" target="_blank" title="">(1246
                                                        Reviews)</a>
                                            </div>
                                            <ul class="mt-7 nav">
                                                <li class="font-for-middle grey-text">
                                                    <i class="fa fa-briefcase mx-1 " aria-hidden="true"></i>
                                                    <span title="" class="mx-1">0-5 Yrs</span>
                                                </li>
                                                <li class="font-for-middle grey-text mx-1 ">
                                                    <i class="fa fa-rupee mx-1 "></i>
                                                    <span title=" " class="">50,000 -
                                                        3,00,000 PA.</span>
                                                </li>
                                                <li class=""><i class="fa fa-map-marker mx-1 grey-text"
                                                        aria-hidden="true"></i>
                                                    <span class="font-for-middle">Kolkata, Hyderabad/Secunderabad, Pune,
                                                        Bangalore/Bengaluru, Delhi / NCR, Mumbai (All Areas)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-3"><img class="img-fluid" alt="company"
                                                src="images/citius.png"></div>
                                    </div>
                                    <div class="fs12 grey-text "><i class="fa fa-file mx-1" aria-hidden="true"></i>
                                        Minimum qualification:GraduationMaximum Age : 30 YearsA Field Sales Executive is
                                        respo...</div>
                                    <ul class="nav grey-text mt-3">
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales experience</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>sales executive activities</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>customer handling</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>field sales</li>
                                        <li class="bi bi-dot"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>Punctuality</li>
                                    </ul>
                                    <div class=" mt-20">
                                        <div class=""><i class="p-1 grey-text"></i><span class="grey-text">2
                                                Days Ago</span></div>
                                        <div class=""><i class="p-1"></i><span class="grey-text">save</span></div>
                                    </div>
                                </article>
                            </div>



                        </div>
                    </div>
                </section>

            </div>


            <div class=" col-lg-3 col-md-12 col-sm-12 col-12 right-sidebar mobile-right ">


                <div class="right-side-box">

                    <div class="row">
                        <div class="col-sm-10">
                            <h6 class="">Get Personalised Job Recommendations</h6>
                        </div>

                        <div class="col-sm-2 img-mobile-right">
                            <img src="images/register.png" alt="">
                        </div>

                        <p>Registering gives you the benefit to browse & apply variety of jobs based on your preferences
                        </p>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

                    </div>
                </div>
                <div class="row mt-3 m-0 p-0 second-right-box">
                    <div class="col-sm-6">
                        <img src="images/epiq.png " class="img-fluid m-3" alt="">
                        <img src="images/company2.png" class="img-fluid m-3" alt="">
                        <img src="images/company3.png" class="img-fluid m-3" alt="">
                        <img src="images/epiq.png" class="img-fluid m-3" alt="">

                    </div>
                    <div class="col-sm-6">
                        <img src="images/epiq.png" class="img-fluid m-3" alt="">
                        <img src="images/company2.png" class="img-fluid m-3" alt="">
                        <img src="images/company3.png" class="img-fluid m-3" alt="">
                        <img src="images/epiq.png" class="img-fluid m-3" alt="">

                    </div>

                </div>

                <div class="row mt-5 m-0 p-0 third-right-box">
                    <h6>Get 3X more profile views from it recruiters</h6>
                    <p>Increase your chances of callback with Rojgarshine</p>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Know More</button>
                </div>

            </div>

        </div>


        <div>

        </div>
    </div>
@endsection