<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Services\JobService;

class JobController extends Controller
{
    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function index()
    {
        $response = $this->jobService->paginate();

        return view('pages.job.index', $response);
    }

}
