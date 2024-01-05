<?php

namespace App\Http\Controllers;

use App\Models\AnaSayfa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ana_sayfa = AnaSayfa::first();
        return view('admin.dashboard',compact('ana_sayfa'));
    }
}
