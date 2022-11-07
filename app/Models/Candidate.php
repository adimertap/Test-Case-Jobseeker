<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 't_candidate';

    protected $primaryKey = 'candidate_id';

    protected $fillable = [
        'full_name',
        'dob',
        'pob',
        'gender',
        'year_exp',
        'last_salary',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    public $timestamps = true;
    
}
