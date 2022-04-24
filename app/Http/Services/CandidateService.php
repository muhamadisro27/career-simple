<?php 

namespace App\Http\Services;

use App\Http\Interfaces\CandidateInterface;

class CandidateService implements CandidateInterface {
   
   public function __construct(CandidateInterface $candidateInterface)
   {
      $this->candidateInterface = $candidateInterface; 
   }

   public function paginate()
   {
      return $this->candidateInterface->paginate();
   }

   public function apply($data)
   {
      return $this->candidateInterface->apply($data);
   }
}



?>