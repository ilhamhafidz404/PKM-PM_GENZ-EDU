<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['title', "teacher_id", "file", "slug"];

    public function Teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
