<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable = ["title", "slug", "description", "file", "user_id"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
