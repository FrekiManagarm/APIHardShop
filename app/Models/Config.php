<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = "config";

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cpu() {
        return $this->hasOne(CPU::class, 'cpu_id');
    }

    public function motherboard() {
        return $this->hasOne(MotherBoard::class, 'motherboard_id');
    }

    public function cooling() {
        return $this->hasOne(Cooling::class, 'cooling_id');
    }

    public function ssd() {
        return $this->hasOne(SSD::class, 'ssd_id');
    }

    public function gpu() {
        return $this->hasOne(GPU::class, 'gpu_id');
    }

    public function psu() {
        return $this->hasOne(PSU::class, 'psu_id');
    }

    public function ram() {
        return $this->hasOne(RAM::class, 'ram_id');
    }

    public function hdd() {
        return $this->hasOne(HDD::class, 'hdd_id');
    }

    public function boitier() {
        return $this->hasOne(Boitier::class, 'case_id');
    }
}
