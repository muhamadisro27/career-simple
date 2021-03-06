<?php


namespace App\Http\Repositories;

use App\Models\Skill;
use App\Models\Profile;
use App\Models\Candidate;
use App\Models\JobRecord;
use App\Models\AcademicRecord;
use App\Models\TrainingRecord;
use Illuminate\Support\Facades\DB;
use App\Http\Interfaces\ProfileInterface;


class ProfileRepository implements ProfileInterface {

   public function edit()
   {
      $data = [
         'user' => Profile::where(['id' => auth()->user()->profile_id])->first(),
         'academic' => AcademicRecord::where(['profile_id' => auth()->user()->profile_id])->first(),
         'job' => JobRecord::where(['profile_id' => auth()->user()->profile_id])->first(),
         'training' => TrainingRecord::where(['profile_id' => auth()->user()->profile_id])->first(),
         'skill' => Skill::where(['profile_id' => auth()->user()->profile_id])->first(),
         'candidate' => Candidate::where(['profile_id' => auth()->user()->profile_id])->first(),
     ];

     return $data;
   }

   public function update($data)
   {

      try {
         DB::beginTransaction();

         Profile::where(['id' => auth()->user()->profile_id])->update([
            'name' => $data['name'],
            'id_card_number' => $data['id_card_number'],
            'birthplace' => $data['birthplace'],
            'birthdate' => $data['birthdate'],
            'sex' => $data['sex'],
            'religion' => $data['religion'],
            'blood_type' => $data['blood_type'],
            'status' => $data['status'],
            'address' => $data['address'],
            'address_domicile' => $data['address_domicile'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'closest_person' => $data['closest_person'],
         ]);

         AcademicRecord::updateOrCreate(
         [
            'id' => $data['academic_id'] ?? null
         ],[
            'profile_id' => auth()->user()->profile_id,
            'educational_stage' => $data['educational_stage'],
            'institution_name' => $data['institution_name'],
            'major' => $data['major'],
            'graduation_year' => $data['academic_year'],
            'gpa' => $data['gpa'],
         ]);

         JobRecord::updateOrCreate(
         [
            'id' => $data['job_id'] ?? null
         ],[
            'profile_id' => auth()->user()->profile_id,
            'company_name' => $data['company_name'],
            'last_position' => $data['last_position'],
            'last_income' => $data['last_income'],
            'year' => $data['job_year'],
         ]);

         if($data['is_sertifikat'] == 'true')
         {
            $data['is_sertifikat'] = true;
         } else {
            $data['is_sertifikat'] = false;
         }

         TrainingRecord::updateOrCreate(
         [
            'id' => $data['training_id'] ?? null
         ],[
            'profile_id' => auth()->user()->profile_id,
            'course_name' => $data['course_name'],
            'is_certificate' => $data['is_sertifikat'],
            'year' => $data['training_year'],
         ]);

         Skill::updateOrCreate(
         [
            'id' => $data['skill_id'] ?? null
         ],[
            'profile_id' => auth()->user()->profile_id,
            'title' => $data['skill_title'],
         ]);

         if($data['is_willing_placed'] == 'true')
         {
            $data['is_willing_placed'] = true;
         } else {
            $data['is_willing_placed'] = false;
         }

         Candidate::updateOrCreate(
         [
            'id' => $data['candidate_id'] ?? null
         ],[
            'profile_id' => auth()->user()->profile_id,
            'salary_expected' => $data['salary_expected'],
            'is_willing_placed' => $data['is_willing_placed'],
         ]);        

         DB::commit();

         $response = [
            'status' => 'success',
            'message' => 'Profile Updated Successfully !'
         ];
      } catch (\Throwable $th) {
         DB::rollBack();

         $response = [
            'status' => 'failed',
            'message' => $th->getMessage()
         ];
      }
      return $response;
   }
}