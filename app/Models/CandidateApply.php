<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateApply extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'job_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function job()
    {
        return $this->belongsTo(Candidate::class, 'job_id');
    }
}
