<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = "config";

    protected $fillable = [
        'user_id',
        'draft',
        'current_step',
        'motherboard_id',
        'cpu_id',
        'cooling_id',
        'ssd_id',
        'gpu_id',
        'psu_id',
        'ram_id',
        'hdd_id',
        'case_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cpu() {
        return $this->hasMany(CPU::class);
    }

    public function motherboard() {
        return $this->hasMany(MotherBoard::class);
    }

    public function cooling() {
        return $this->hasMany(Cooling::class);
    }

    public function ssd() {
        return $this->hasMany(SSD::class);
    }

    public function gpu() {
        return $this->hasMany(GPU::class);
    }

    public function psu() {
        return $this->hasMany(PSU::class);
    }

    public function ram() {
        return $this->hasMany(RAM::class);
    }

    public function hdd() {
        return $this->hasMany(HDD::class);
    }

    public function boitier() {
        return $this->hasMany(Boitier::class);
    }
}
