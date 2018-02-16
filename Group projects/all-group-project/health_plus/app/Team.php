<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['team_title','short_description','doctor_name','doctor_speciality','doctor_consultant','doctor_image','publication_status'];
}
