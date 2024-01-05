<?php

namespace App\Http\Controllers;
use App\Models\AnaSayfa;
use Illuminate\Http\Request;
use App\Models\Arac;
class IndexController extends Controller
{
    public function show()
    {
        $ana_sayfa = AnaSayfa::first();
        $araclar = Arac::with('ozellikler','aracResimleri')->get();

        return view('front.index',compact('ana_sayfa','araclar'));
    }
}
