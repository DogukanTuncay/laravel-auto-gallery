<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AracMaliDurum extends Model
{
    use HasFactory;
    protected $table = 'arac_mali_durum';

    protected $fillable = [
        'arac_id',
        'gelir',
        'gider',
        'kar_zarar',
    ];
}
