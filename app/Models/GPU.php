<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
    use HasFactory;

    protected $table = "GPUs";

    protected $fillable = [
        'image',
        'nom',
        'frequence',
        'frequence_boost',
        'nb_coeur',
        'nb_ventilateurs',
        'nb_video_output',
        'description',
        'link'
    ];

    public function configs() {
        return $this->hasMany(Config::class);
    }
}
