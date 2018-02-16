@extends('admin.master')

@section('title')
    Update Resume
@endsection

@section('body')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Resume
                        </header>
                        <div class="panel-body">
                            {{ Session::get('message') }}
                            <div class="form">

                                @foreach($candidates as $candidate)

                                {{Form::open(['route'=>'update-profile', 'method'=>'POST','id'=>'feedback_form', 'class'=>'form-validate form-horizontal', 'enctype'=>'multipart/form-data'])}}

                                <div class="form-group ">

                                    <label for="cname" class="control-label col-lg-2">Your Name <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" value="{{ $candidate->candidate_name }}" placeholder="Your Name" name="candidate_name" type="text" required />
                                        <input class="form-control" value="{{ $candidate->id }}" name="candidate_id" type="hidden" required />
                                    </div>

                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Select Your Skill<span class="required">*</span></label>
                                    <div class="col-lg-10">

                                        <select name="selected_skill" class="form-control from-control-login">
                                            <option value="-1" >-----Select-----</option>
                                            <option selected="" value="1">IT/Telecommunication</option>
                                            <option value="2">Web App Programmer</option>
                                            <option value="3">Data Entry/Operator</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Your Email <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " value="{{ $candidate->candidate_email }}" type="hide" name="candidate_email" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ccomment" class="control-label col-lg-2">Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="editor" name="resume_description" required>{{ $candidate->resume_description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="ccomment" class="control-label col-lg-2">Profile Picture</label>
                                    <div class="col-lg-10">
                                        <input class="btn btn-file" name="candidate_image" type="file" />
                                        <img src="{{asset($candidate->candidate_image)}}" alt="" height="80" width="100" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label col-md-2">Publication Status</label>
                                    <div class="col-lg-10 radio">
                                        <label><input type="radio" {{ $candidate->publication_status == 1 ? 'checked' : '' }} name="publication_status" value="1" />Published </label><br/>
                                        <input type="radio" {{ $candidate->publication_status == 0 ? 'checked' : '' }} name="publication_status" value="0" />Unublished</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                        <a href="{{ route('cancel') }}"class="btn btn-default"> Cancel </a>
                                    </div>
                                </div>
                                {{ Form::close() }}

                                @endforeach

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--main content end-->
        </section>
    </section>
@endsection