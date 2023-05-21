<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = "work_experiences";

    protected $fillable = [
        'title', 'body', 'start_time', 'end_time', 'on_going'
    ];
}
