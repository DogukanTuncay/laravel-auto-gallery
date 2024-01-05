<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnaSayfa extends Model
{
    use HasFactory;
    public $table = 'ana_sayfa';
    protected $fillable = [
       'title',
       'sirket_adi',
       'baslik',
       'alt_baslik',
       'contact_yazi',
       'contact_adres',
       'contact_iframe',
    ];
}
