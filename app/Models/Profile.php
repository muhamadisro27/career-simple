<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_card_number',
        'birthplace',
        'birthdate',
        'sex',
        'religion',
        'blood_type',
        'status',
        'address',
        'address_domicile',
        'email',
        'phone_number',
        'closest_person',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function academicRecord()
    {
        return $this->hasOne(AcademicRecord::class);
    }

    public function trainingRecord()
    {
        return $this->hasOne(TrainingRecord::class);
    }

    public function jobRecord()
    {
        return $this->hasOne(JobRecord::class);
    }

    public function skill()
    {
        return $this->hasOne(Skill::class);
    }
}
