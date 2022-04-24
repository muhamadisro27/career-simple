<?php 

namespace App\Http\Interfaces;

interface CandidateInterface {
   public function paginate();
   public function apply($data);
}


?>