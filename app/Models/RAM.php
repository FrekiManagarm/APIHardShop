<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    protected $fillable = [
        'capacité',
        'fréquence',
        'image',
        'interface',
        'latence',
        'marque',
        'nom',
        'quantité'
    ];

    public function RAMs() {
        return $this->hasMany('App\RAM');
    }
}
