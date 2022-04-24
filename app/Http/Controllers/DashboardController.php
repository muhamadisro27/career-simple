<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CandidateService;
use App\Models\CandidateApply;

class DashboardController extends Controller
{
    public function __construct(CandidateService $candidateService)
    {
        $this->candidateService = $candidateService;
    }

    public function index()
    {
        $response = $this->candidateService->jobCandidate();

        return view('pages.dashboard.index', $response);
    }

    public function detail(CandidateApply $candidate)
    {
        $response = CandidateApply::with(['candidate.profile','candidate.profile.academicRecord','candidate.profile.jobRecord','candidate.profile.trainingRecord','candidate.profile.skill', 'job'])->where(['id' => $candidate->id])->first();
        
        return view('pages.dashboard.detail', ['candidate' => $response]);
    }
}
