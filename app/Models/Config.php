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
        return $this->belongsTo(CPU::class);
    }

    public function motherboard() {
        return $this->belongsTo(MotherBoard::class);
    }

    public function cooling() {
        return $this->belongsTo(Cooling::class);
    }

    public function ssd() {
        return $this->belongsTo(SSD::class);
    }

    public function gpu() {
        return $this->belongsTo(GPU::class);
    }

    public function psu() {
        return $this->belongsTo(PSU::class);
    }

    public function ram() {
        return $this->belongsTo(RAM::class);
    }

    public function hdd() {
        return $this->belongsTo(HDD::class);
    }

    public function boitier() {
        return $this->belongsTo(Boitier::class);
    }
}
