<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['candidate_name','selected_skill', 'candidate_email','resume_description','candidate_image'];
}
