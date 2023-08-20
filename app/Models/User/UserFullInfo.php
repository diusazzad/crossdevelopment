<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFullInfo extends Model
{
    use HasFactory;
    protected $table = 'user_full_infos';
    protected $fillable = [
        'user_id',
        'location',
        'website',
        'gender',
        'phone',
        'interests',
        'occupation',
        'about',
        'education',
        'language',
        'skills',
        'social_links',
        'hobbies',
        'family_status',
        'relationship_status'
    ];


}
