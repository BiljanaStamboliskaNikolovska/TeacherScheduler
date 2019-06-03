<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;

class Teacher extends Model
{
    protected $fillable=[
        'name',
        'speciality',
        'is_active',
        'institution',
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
