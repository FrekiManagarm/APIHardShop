<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    use HasFactory;

    protected $table = "RAMs";

    protected $fillable = [
        'image',
        'capacité',
        'interface',
        'latence',
        'description',
        'nom',
        'quantité',
        'link'
    ];

    public function configs() {
        return $this->hasMany(Config::class);
    }
}
