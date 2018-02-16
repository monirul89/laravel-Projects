@extends('admin.master')
@section('title')
    New Job
@endsection
@section('body')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Job
                        </header>
                        <div class="panel-body">
                            <h2 class="text-center">{{ Session::get('message') }}</h2>
                            <div class="form">

                                {{Form::open(['route'=>'new-job', 'method'=>'POST','id'=>'feedback_form', 'class'=>'form-validate form-horizontal', 'enctype'=>'multipart/form-data'])}}

                                <div class="form-group ">

                                    <label for="cname" class="control-label col-lg-2"> Company Name <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Company Name" name="company_name" type="text" required />
                                    </div>

                                </div>
                                <div class="form-group ">

                                    <label for="cname" class="control-label col-lg-2">Job Title <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Job Title" name="job_title" type="text" required />
                                    </div>

                                </div>

                                <div class="form-group ">

                                    <label for="cname" class="control-label col-lg-2"> Education Requirements <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Last Education" name="last_education" type="text" required />
                                    </div>

                                </div>

                                <div class="form-group ">

                                    <label for="cname" class="control-label col-lg-2"> Experience <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Experience" name="experience" type="text" required />
                                    </div>

                                </div>



                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Job Category<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select name="job_category" id="" class="form-control from-control-login">
                                            <option value="-1" selected="">---Select Category---</option>
                                            <option value="1">IT/Telecommunication</option>
                                            <option value="2">Web App Programmer</option>
                                            <option value="3">Data Entry/Operator</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2"> Salary Range <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="salary_range" placeholder="Salary Range" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ccomment" class="control-label col-lg-2">Job Requirements</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="editor" name="job_description" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label col-md-2">Publication Status</label>
                                    <div class="col-lg-10 radio">
                                        <label><input type="radio" name="publication_status" value="1" />Published </label><br/>
                                        <input type="radio" checked name="publication_status" value="0" />Unublished</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <a href="{{ route('cancel') }}"class="btn btn-default"> Cancel </a>
                                    </div>
                                </div>

                                {{ Form::close() }}

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>

@endsection