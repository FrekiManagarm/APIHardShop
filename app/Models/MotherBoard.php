<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotherBoard extends Model
{
    use HasFactory;

    protected $table = "MotherBoards";

    protected $fillable = [
        'image',
        'constructeur',
        'format',
        'fréquence_mémoire',
        'description',
        'nom',
        'proco_compatible',
        'socket',
        'link'
    ];

    public function configs() {
        return $this->hasMany(Config::class);
    }
}
