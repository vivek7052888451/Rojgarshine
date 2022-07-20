<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
         return view('index');
    }
     public function jobDetail()
    {
         return view('job-detail');
    }
   
    public function jobListing()
    {
        return view('joblisting');
    }
     public function certificate()
    {
       return view('certificate');
    }
     public function coursesDetails()
    {
       return view('coursedetails');
    }
    
    
}
