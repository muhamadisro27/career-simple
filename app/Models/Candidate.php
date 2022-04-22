<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'profiles_id',
        'salary_expected',
        'is_willing_placed',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profiles_id');
    }

    public function appliedJob()
    {
        return $this->hasMany(CandidateApply::class);
    }  
}
