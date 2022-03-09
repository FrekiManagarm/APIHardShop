<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSD extends Model
{
    use HasFactory;

    protected $table = "SSDs";

    protected $fillable = [
        'image',
        'capacité',
        'connectique',
        'format',
        'interface',
        'lecture',
        'ecriture',
        'description',
        'marque',
        'nom'
    ];

    public function configs() {
        return $this->belongsToMany(Config::class);
    }
}
