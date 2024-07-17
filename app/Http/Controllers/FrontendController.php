<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }

    public function team(){
        return view('Frontend.team');
    }

    public function service(){
        return view('Frontend.service');
    }

    public function mine(){
        return view('Frontend.mine');
    }
}
