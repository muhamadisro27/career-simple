<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title'
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
