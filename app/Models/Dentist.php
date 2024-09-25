<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable=['dentist_name', 'phone_number', 'expertise', 'role'];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }
    public function dentist(){
        return $this->belongsTo(Dentist::class);
    }
}
