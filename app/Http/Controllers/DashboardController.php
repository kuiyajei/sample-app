<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // ignore hasRole errors, they can't detect laratrust apparently
        if(Auth::user()->hasRole('admin')){
            return view('admindash');
        }
        else if(Auth::user()->hasRole('librarian')){
            return view('librariandash');
        }
    }
}
