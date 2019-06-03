<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class Subject extends Model
{
    protected $fillable=[
        'teacher_id',
        'has_occured',
        'room_name',
        'date',
        'time_from',
        'time_to'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

   
}
