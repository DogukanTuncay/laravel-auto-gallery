<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ozellikler extends Model
{
    use HasFactory;
    protected $table = 'ozellikler';

    protected $fillable = [
        'arac_id',
        'renk',
        'govdeTipi',
        'kapiSayisi',
        'koltukSayisi',
        'yakitTuketimi',
        'cekisSistemi',
    ];

}
