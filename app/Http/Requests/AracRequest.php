<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AracRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'marka' => ['required'],
            'model' => ['required'],
            'yil' => ['required'],
            'yakitTuru' => ['required'],
            'vitesTuru' => ['required'],
            'motorHacmi' => ['required'],
            'motorGucu' => ['required'],
            'kilometre' => ['required'],
            'fiyat' => ['required'],
            'aciklama' => ['required'],
            'renk' => ['required'],
            'govdeTipi' => ['required'],
            'kapiSayisi' => ['required'],
            'koltukSayisi' => ['required'],
            'yakitTuketimi' => ['required'],
            'cekisSistemi' => ['required'],
            'resimler' => ['required'],
        ];
    }
    public function messages()
    {
        return [
        'marka.required' => 'Bu Alan Gereklidir: Marka',
        'model.required' => 'Bu Alan Gereklidir: Model',
        'yil.required' => 'Bu Alan Gereklidir: Yıl',
        'yakitTuru.required' => 'Bu Alan Gereklidir: Yakıt Türü',
        'vitesTuru.required' => 'Bu Alan Gereklidir: Vites Türü',
        'motorHacmi.required' => 'Bu Alan Gereklidir: Motor Hacmi',
        'motorGucu.required' => 'Bu Alan Gereklidir: Motor Gücü',
        'kilometre.required' => 'Bu Alan Gereklidir: Kilometre',
        'fiyat.required' => 'Bu Alan Gereklidir: Fiyat',
        'aciklama.required' => 'Bu Alan Gereklidir: Açıklama',
        'renk.required' => 'Bu Alan Gereklidir: Renk',
        'govdeTipi.required' => 'Bu Alan Gereklidir: Gövde Tipi',
        'kapiSayisi.required' => 'Bu Alan Gereklidir: Kapı Sayısı',
        'koltukSayisi.required' => 'Bu Alan Gereklidir: Koltuk Sayısı',
        'yakitTuketimi.required' => 'Bu Alan Gereklidir: Yakıt Tüketimi',
        'cekisSistemi.required' => 'Bu Alan Gereklidir: Çekiş Sistemi',
        'resimler.required' => 'Bu Alan Gereklidir: Resimler',
        ];
    }
}
