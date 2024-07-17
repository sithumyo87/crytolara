<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $active     = 'dashboard';
        $title      = 'Dashboard';
        return view('admin.dashboard', compact('active', 'title'));
    }
}
