<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addcontent extends Model
{
    protected $fillable = ['vission_title','vission_content','mission_title','mission_content','goal_title','goal_content','published_status'];
}
