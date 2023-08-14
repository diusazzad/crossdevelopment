<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{

    const ADMIN = 'admin';
    const MANAGER = 'manager';
    const COUNSELOR = 'counselor';
    const PARENT = 'parent';
    const VISITOR = 'visitor';
    const MENTOR = 'mentor';
    const STUDENT = 'student';
    const ADVERTISER = 'advertiser';



    use HasFactory;

    // Role model
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
