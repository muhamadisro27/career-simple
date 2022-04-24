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
        'updated_at',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public static function filterSearch()
    {
        $response = CandidateApply::with(['candidate.profile.academicRecord','job']);

        if (request()->has('search')) {
             $response->whereHas('candidate.profile', function ($q) {
                        $q->where('name', 'like', '%' . request('search'). '%');
                    });
            // switch($response) {
            //     case 'name' :
            //         $response->whereHas('candidate.profile', function ($q) {
            //             $q->where('name', 'like', '%' . request('search'). '%');
            //         });
            //         break;
            //     case 'educational_stage' :
            //         $response->whereHas('candidate.profile.academicRecord', function ($q) {
            //             $q->where('educational_stage', 'like', '%' . request('search'). '%');
            //         });
            //         break;
            //     case 'title' :
            //         $response->whereHas('job', function ($q) {
            //             $q->where('title', 'like', '%' . request('search'). '%');
            //         }); 
            //         break;
            //     default:
            //         $response;
            //         break;
            // }
        }
        
        return $response;
    }
}
