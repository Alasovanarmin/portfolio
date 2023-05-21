<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title', 'body', 'date', 'url'
    ];

    public function tags()
    {
       return $this->hasMany(ProjectTag::class, 'project_id','id');
    }// Arxa fonda join işledir.

    public function photos()
    {
        return $this->hasMany(ProjectPhoto::class,'project_id','id');
    }
    public function photo()
    {
        return $this->hasOne(ProjectPhoto::class,'project_id','id');
    }
}
