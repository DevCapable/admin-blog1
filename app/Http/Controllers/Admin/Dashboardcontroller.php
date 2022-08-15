<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        $item= Auth::user();
        return view('admin.dashboard')->with(['item'=>$item]);
    }
}
