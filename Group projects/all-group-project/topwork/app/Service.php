<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['company_name','job_title','last_education','experience','job_category','salary_range','job_description','publication_status'];
}
