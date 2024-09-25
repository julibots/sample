<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable=['record_date', 'patient_id', 'appointment_id', 'dentist_id'];

    public function patient(){
        return $this->hasOne(Patient::class);
    }
    public function appointment(){
        return $this->hasOne(Appointment::class);
    }
    public function dentists(){
        return $this->hasMany(Dentist::class);
    }
}
