<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HDD extends Model
{
    protected $fillable = [
        'RPM',
        'capacité',
        'format',
        'image',
        'interface',
        'mémoire_cache',
        'nom',
        'transfert'
    ];

    public function HDDs() {
        return $this->hasMany('App\HDD');
    }
}
