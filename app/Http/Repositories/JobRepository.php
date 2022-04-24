<?php 

namespace App\Http\Repositories;

use App\Models\Job;
use App\Http\Interfaces\JobInterface;


class JobRepository implements JobInterface {

   public function paginate()
   {
      try {
         $jobs = Job::paginate(10);

         $response = [
            'status' => 'success',
            'jobs' => $jobs
         ];
      } catch (\Throwable $th) {
         $response = [
            'status' => 'failed',
            'message' => $th->getMessage()
         ];
      }
      return $response;
   }
}

?>