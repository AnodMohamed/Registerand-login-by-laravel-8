<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class homeController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        echo "index";
    }
    public function Superadmin(){
        echo "Superadmin";
    }
}
