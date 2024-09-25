<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=['patient_id', 'dentist_id', 'service_type', 'mode_of_payment', 'appoint_date', 'appoint_time'];

    public function patients(){
        return $this->hasMany(Patient::class);
    }

    public function dentists(){
        return $this->hasMany(Dentist::class);
    }

    public function medical_record(){
        return $this->hasOne(Record::class);
    }
}
