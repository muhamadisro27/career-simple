<?php

namespace App\Http\Interfaces;

interface AuthInterface {
   public function register($data);
   public function login($data);
}


?>