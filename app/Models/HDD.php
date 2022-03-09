<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HDD extends Model
{
    use HasFactory;

    protected $table = "hdd";

    protected $fillable = [
        'image',
        'RPM',
        'capacité',
        'format',
        'interface',
        'description',
        'marque',
        'mémoire_cache',
        'nom',
        'transfert',
    ];

    public function configs() {
        return $this->belongsToMany(Config::class);
    }
}
