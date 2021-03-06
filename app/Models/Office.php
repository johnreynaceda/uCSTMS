<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function concerns()
    {
        return $this->hasMany(Concern::class);
    }
    public function userinformation()
    {
        return $this->belongsTo(UserInformation::class);
    }

    public function studentservices()
    {
        return $this->hasMany(StudentService::class);
    }
    public function appointmentschedules()
    {
        return $this->hasMany(AppointmentSchedule::class);
    }
}
