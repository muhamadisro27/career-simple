<?php


namespace App\Http\Repositories;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use App\Http\Interfaces\AuthInterface;

class AuthRepository implements AuthInterface {
   public function register($data)
   {
      try {
         DB::beginTransaction();
         
         $profile = Profile::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'sex' => $data['sex'],
            'id_card_number' => $data['id_card_number'],
            'birthplace' => null,
            'birthdate' => null,
            'religion' => null,
            'blood_type' => null,
            'status' => null,
            'address' => null,
            'address_domicile' => null,
            'phone_number' => null,
            'closest_person' => null,
         ]);
      
         $user = User::create([
               'profile_id' => $profile->id,
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => bcrypt($data['password']),
         ]);

         auth()->login($user);

         DB::commit();

         $response = [
            'status' => 'success',
            'message' => 'Register successfully!',
         ];
      } catch (\Throwable $th) {
         DB::rollBack();

         $response = [
            'status' => 'failed',
            'message' => $th->getMessage(),
         ];
      }
      return $response;
   }
}


?>