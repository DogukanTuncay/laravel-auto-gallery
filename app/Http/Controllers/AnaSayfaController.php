<?php

namespace App\Http\Controllers;
use App\Models\AnaSayfa;
use Illuminate\Http\Request;
use App\Http\Requests\AnaSayfaRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AnaSayfaController extends Controller
{
    public function index()
    {
        $ana_sayfa = AnaSayfa::first();
        return view('admin.anaSayfa')->with('ana_sayfa',$ana_sayfa);
    }
    public function update(AnaSayfaRequest $request)
    {
        $requestData = $request->all();
        $iframe = $requestData["contact_iframe"];
        $ana_sayfa = AnaSayfa::first();
        $iframeExplode = explode(" ",$iframe);
        foreach ($iframeExplode as &$explode) {
            if( str_contains($explode,'width')){
                $explode = "width=\"100%\"";
            }
            else if(str_contains($explode,'height')){
                $explode = "height=\"290px\"";
            }
        }

        $iframe = implode(" ",$iframeExplode);
        $requestData["contact_iframe"] = $iframe;
        if(isset($ana_sayfa)){
            $ana_sayfa->update(array_merge($requestData, ['index' => 'value']));
        }
        else{
            AnaSayfa::create(array_merge($request->all(), ['index' => 'value']));
        }
        Alert::success('BAŞARILI', 'İşlem Başarı İle Gerçekleştirildi');
        return redirect()->back();
    }
}
