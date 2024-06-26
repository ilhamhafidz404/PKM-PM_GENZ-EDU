<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parents extends Authenticatable
{
    use HasFactory;

    protected $table = "parents";

    protected $fillable = ["name", "username", "email", "password", "user_id"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
