<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model implements MustVerifyEmail
{
    use Notifiable;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
