<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Role extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'role_id');
    }
}