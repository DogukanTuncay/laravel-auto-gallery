<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AracResimleri extends Model
{
    use HasFactory;
    protected $table = 'arac_resimleri';

    protected $fillable = [
        'arac_id',
        'resim_dosyasi',
    ];

}
