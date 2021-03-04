<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte_Mere extends Model
{
    protected $fillable = [
        'chipset',
        'constructeur',
        'format',
        'fréquence_mémoire',
        'image',
        'nom',
        'proco_compatible',
        'socket'
    ];

    public function Cartes_Mere() {
        return $this->hasMany('App\Carte_Mere');
    }
}
