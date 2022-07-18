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
    public function employerAccount()
    {
        return view('employer-account');
    }
    public function employerLogin()
    {
        return view('employer-login');
    }
    public function jobListing()
    {
        return view('joblisting');
    }
}
