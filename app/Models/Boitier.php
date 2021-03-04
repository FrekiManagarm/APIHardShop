<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boitier extends Model
{
    protected $fillable = [
        'image',
        'RGB',
        'alim_inclus',
        'couleur',
        'facade_laterale',
        'format',
        'nom',
        'ventilateur'
    ];

    public function Boitiers() {
        return $this->hasMany('App\Boitier');
    }
}
