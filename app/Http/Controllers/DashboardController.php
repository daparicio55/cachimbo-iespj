<?php

namespace App\Http\Controllers;

use App\Models\Traje;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $trajes = Traje::get();
        return view('dashboard',compact('trajes'));
    }
}
