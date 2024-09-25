<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable=['first_name', 'last_name', 'age', 'sex', 'contact_number'];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }
    public function medical_record(){
        return $this->hasOne(Record::class);
    }
}
