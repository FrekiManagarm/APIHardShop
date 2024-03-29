<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooling extends Model
{
    use HasFactory;

    protected $table = "Coolings";

    protected $fillable = [
        'bruit',
        'format',
        'marque',
        'matériaux',
        'description',
        'nom',
        'socket',
        'type',
        'image',
        'link'
    ];

    public function configs() {
        return $this->hasMany(Config::class);
    }
}
