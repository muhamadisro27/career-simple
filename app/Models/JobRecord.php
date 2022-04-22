<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'company_name',
        'last_position',
        'last_income',
        'year',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class ,'profile_id');
    }
}
