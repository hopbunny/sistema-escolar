<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function callList()
    {
        return $this->hasMany(CallList::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'student_rooms', 'student_id', 'room_id');
    }
}
