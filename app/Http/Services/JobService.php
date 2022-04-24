<?php 

namespace App\Http\Services;

use App\Http\Interfaces\JobInterface;


class JobService implements JobInterface{
   public function __construct(JobInterface $jobInterface)
   {
      $this->jobInterface = $jobInterface;
   }

   public function paginate()
   {
      return $this->jobInterface->paginate();
   }
}


?>