<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arac extends Model
{
    use HasFactory;
    public $table = 'arac';

    protected $fillable = [
        'marka',
        'model',
        'yil',
        'yakitTuru',
        'vitesTuru',
        'motorHacmi',
        'motorGucu',
        'kilometre',
        'fiyat',
        'aciklama',
        'satildiMi',
    ];
        // Diğer özellikler ve davranışlar eklenebilir.
        public function ozellikler()
        {
            return $this->hasOne(Ozellikler::class, 'arac_id');
        }
        public function aracResimleri()
        {
            return $this->hasMany(AracResimleri::class, 'arac_id');
        }
        public function aracMaliDurum()
        {
            return $this->hasOne(AracMaliDurum::class, 'arac_id');
        }
}

