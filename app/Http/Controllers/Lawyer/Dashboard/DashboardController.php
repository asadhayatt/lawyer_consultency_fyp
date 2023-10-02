<?php

namespace App\Http\Controllers\Lawyer\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('lawyer.dashboard.index');
    }
}
