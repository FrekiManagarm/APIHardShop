<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
    protected $fillable = [
        'architecture',
        'cache',
        'chipset',
        'chipset_graphique',
        'frequence',
        'frequence_boost',
        'image',
        'nb_coeur',
        'nb_threads',
        'nom',
        'overclocking',
        'socket',
        'type'
    ];

    public function CPUs() {
        return $this->hasMany('App\CPU');
    }
}
