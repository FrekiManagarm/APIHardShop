<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boitier extends Model
{
    use HasFactory;

    protected $table = 'boitiers';

    protected $fillable = [
        'image',
        'RGB',
        'alim_inclus',
        'couleur',
        'description',
        'facade_laterale',
        'format',
        'nom',
        'ventilateur',
        'link'
    ];

    public function configs() {
        $this->hasMany(Config::class);
    }
}
