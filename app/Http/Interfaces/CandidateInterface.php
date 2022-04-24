<?php 

namespace App\Http\Interfaces;

interface CandidateInterface {
   public function paginate();
   public function jobCandidate();
   public function apply($data);
}


?>