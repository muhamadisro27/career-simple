<?php 

namespace App\Http\Repositories;

use App\Models\Candidate;
use App\Models\CandidateApply;
use Illuminate\Support\Facades\DB;
use App\Http\Interfaces\CandidateInterface;


class CandidateRepository implements CandidateInterface {
   
   public function paginate()
   {
      try {
         $applies = CandidateApply::with(['candidate.profile','job'])->whereHas('candidate', function($q) {
            $q->where(['profile_id' => auth()->user()->profile_id]);
         })->latest()->paginate(10);

         $response = [
            'status' => 'success',
            'applies' => $applies
         ];
      } catch (\Throwable $th) {
         $response = [
            'status' => 'failed',
            'message' => $th->getMessage()
         ];
      }
      return $response;
   }

   public function jobCandidate()
   {
      try {
         $applies = CandidateApply::with(['candidate.profile','job'])->latest()->paginate(10);

         $response = [
            'status' => 'success',
            'applies' => $applies
         ];
      } catch (\Throwable $th) {
         $response = [
            'status' => 'failed',
            'message' => $th->getMessage()
         ];
      }
      return $response;
   }

   public function apply($data)
   {
      
      try {
         DB::beginTransaction();

         $candidate = Candidate::where(['profile_id' => auth()->user()->profile_id])->first();

         CandidateApply::create([
            'candidate_id' => $candidate->id,
            'job_id' => $data->id
         ]);

         DB::commit();

         $response = [
            'status' => 'success',
            'message' => 'Apply job successfully !',
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



?>