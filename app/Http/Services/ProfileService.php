<?php


namespace App\Http\Services;

use App\Http\Interfaces\ProfileInterface;


class ProfileService implements ProfileInterface {
   public function __construct(ProfileInterface $profileInterface)
   {
      $this->profileInterface = $profileInterface;
   }

   public function edit()
   {
      return $this->profileInterface->edit();
   }

   public function update($request)
   {
      return $this->profileInterface->update($request);
   }
}



?>