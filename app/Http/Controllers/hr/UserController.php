<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $company = auth()->user()->company;

        $employees = $company->users;

        return view('rh.employees.index', compact('employees'));
    }
}
