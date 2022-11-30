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
        return $this->hasOne(CPU::class, "id");
    }

    public function motherboard() {
        return $this->hasOne(MotherBoard::class, "id");
    }

    public function cooling() {
        return $this->hasOne(Cooling::class, "id");
    }

    public function ssd() {
        return $this->hasOne(SSD::class, "id");
    }

    public function gpu() {
        return $this->hasOne(GPU::class, "id");
    }

    public function psu() {
        return $this->hasOne(PSU::class, "id");
    }

    public function ram() {
        return $this->hasOne(RAM::class, "id");
    }

    public function hdd() {
        return $this->hasOne(HDD::class, "id");
    }

    public function boitier() {
        return $this->hasOne(Boitier::class, "id");
    }
}
