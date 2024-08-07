<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "photo", "status"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
