<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsVotes extends Model
{
    protected $table = 'vote_students';
    protected $guarded = [];
    use HasFactory;
}
