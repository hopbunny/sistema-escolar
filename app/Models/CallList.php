<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallList extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'room_id',
        'present'
    ];
}
