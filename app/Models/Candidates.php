<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $table = 'candidates';
    protected $guarded = [];
    public function votes()
    {
        return $this->hasMany(Votes::class);
    }
    use HasFactory;
}
