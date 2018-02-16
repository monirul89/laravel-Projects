<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $fillable = ['welcome_title','welcome_description','publication_status'];
}
