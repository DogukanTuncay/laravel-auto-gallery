<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnaSayfaRequest extends FormRequest
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
            'title' => ['required'],
            'sirket_adi' => ['required'],
            'baslik' => ['required'],
            'alt_baslik' => ['required'],
            'contact_yazi' => ['required'],
            'contact_adres' => ['required']
        ];
    }
    public function messages()
    {
     return [
        'title.required' =>'Bu Alan Gereklidir:Sayfa Adı',
        'sirket_adi.required' =>'Bu Alan Gereklidir:Şirket Adı',
        'baslik.required' =>'Bu Alan Gereklidir:Başlık',
        'alt_baslik.required' =>'Bu Alan Gereklidir:Alt Başlık',
        'contact_yazi.required' =>'Bu Alan Gereklidir:İletişim Yazısı',
        'contact_adres.required' =>'Bu Alan Gereklidir: İletişim Adres Bölümü',
     ];
    }
}
