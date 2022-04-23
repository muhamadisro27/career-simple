<?php

namespace App\Http\Services;

use App\Http\Interfaces\AuthInterface;



class AuthService implements AuthInterface{
   public function __construct(AuthInterface $authInterface)
   {
      $this->authInterface = $authInterface;
   }

   public function register($request)
   {
      return $this->authInterface->register($request);
   }

   public function login($request)
   {
      return $this->authInterface->login($request);
   }
}



?>