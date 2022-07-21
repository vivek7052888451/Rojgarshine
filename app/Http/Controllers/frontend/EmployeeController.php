<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeLoginForm()
    {
        return view('employee_login');
    }
     public function employeeAccount()
    {
        return view('employe_account');
    }
  
}
