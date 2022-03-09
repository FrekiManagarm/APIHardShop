<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
    use HasFactory;

    protected $table = "CPUs";

    protected $fillable = [
        'nom',
        'image',
        'architecture',
        'cache',
        'chipset',
        'chipset_graphique',
        'frequence',
        'frequence_boost',
        'nb_coeur',
        'nb_threads',
        'description',
        'overclocking',
        'socket',
        'type',
    ];

    public function configs() {
        return $this->belongsToMany(Config::class);
    }
}
