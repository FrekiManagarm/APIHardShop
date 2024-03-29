<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PSU extends Model
{
    use HasFactory;

    protected $table = "PSUs";

    protected $fillable = [
        'image',
        'certif',
        'format',
        'description',
        'marque',
        'modulaire',
        'nom',
        'puissance',
        'link'
    ];

    public function configs() {
        return $this->hasMany(Config::class);
    }
}
