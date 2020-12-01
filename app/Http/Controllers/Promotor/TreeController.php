<?php

namespace App\Http\Controllers\Promotor;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TreeController extends Controller
{
    //promoter tree
    public function index(){
        return view('promotor.tree');
    }

    
}
