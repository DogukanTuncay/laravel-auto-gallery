<?php

namespace App\Http\Controllers;

use App\Models\AnaSayfa;
use Illuminate\Http\Request;
use App\Http\Requests\AracRequest;
use App\Models\Arac;
use App\Models\AracMaliDurum;
use App\Models\AracResimleri;
use App\Models\Ozellikler;
use RealRashid\SweetAlert\Facades\Alert;
class AracController extends Controller
{
    public function index()
    {
        $ana_sayfa = AnaSayfa::first();
        $araclar = Arac::all();
        return view('admin.arac',compact('ana_sayfa','araclar'));
    }
    public function show()
    {
        $ana_sayfa = AnaSayfa::first();

        return view('admin.aracEkle',compact('ana_sayfa'));

    }
    public function create(AracRequest $request)
    {

        $arac = new Arac();
        $arac->marka = $request->marka;
        $arac->model = $request->model;
        $arac->yil = $request->yil;
        $arac->yakitTuru= $request->yakitTuru;
        $arac->vitesTuru= $request->vitesTuru;
        $arac->motorHacmi = $request->motorHacmi;
        $arac->motorGucu = $request->motorGucu;
        $arac->kilometre = $request->kilometre;
        $arac->fiyat= $request->fiyat;
        $arac->satildiMi = false;
        $arac->save();

        if($request->hasfile('resimler'))
         {
            foreach($request->file('resimler') as $file)
            {
                $path = $file->store('carimages','public');
                $aracResim = new AracResimleri();
                $aracResim->arac_id = $arac->id;
                $aracResim->url = $path;
                $aracResim->save();
            }
         }
         $ozellikler = new Ozellikler();
         $ozellikler->arac_id = $arac->id;
         $ozellikler->renk = $request->renk;
         $ozellikler->govdeTipi = $request->govdeTipi;
         $ozellikler->kapiSayisi = $request->kapiSayisi;
         $ozellikler->koltukSayisi = $request->koltukSayisi;
         $ozellikler->yakitTuketimi = $request->yakitTuketimi;
         $ozellikler->cekisSistemi = $request->cekisSistemi;
         $ozellikler->save();
         $aracMaliDurum = new AracMaliDurum();
         $aracMaliDurum->arac_id = $arac->id;
         $aracMaliDurum->gider = $arac->fiyat;
         $aracMaliDurum->save();
        Alert::success('İŞLEM BAŞARILI', 'Araç Başarı İle Eklendi');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $id = $request->arac_id;
        $arac = Arac::find($id);
        $arac->delete();
        Alert::success('İŞLEM BAŞARILI', 'Araç Başarı İle Silindi');
        return redirect()->back();
    }
    public function giderEkle(Request $request)
    {
        $id = $request->arac_id;
        $gider = $request->arac_gider;
        $arac = AracMaliDurum::find($id);
        $arac->gider += $gider;
        $arac->save();
        Alert::success('İŞLEM BAŞARILI', 'Araç Gideri Başarı İle Eklendi');
        return redirect()->back();

    }
}
