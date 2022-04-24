<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Profile;
use App\Models\JobRecord;
use Illuminate\Http\Request;
use App\Models\AcademicRecord;
use App\Models\TrainingRecord;
use App\Http\Services\ProfileService;

class ProfileController extends Controller
{
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        return view('pages.profile.index');
    }

    public function edit()
    {
        $data = $this->profileService->edit();

        return view('pages.profile.edit', $data);
    }

    public function update(Request $request)
    {
        $response = $this->profileService->update($request->all());

        return redirect('/profile')->with($response['status'],$response['message']);
    }
}
