<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table='user_profiles';
    protected $fillable = [
        'bio',
        'birthdate',
        'location',
        'website',
        'gender',
        'phone',
        'interests',
        'occupation',
        'timezone'
    ];
}
