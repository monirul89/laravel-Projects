@extends('admin.master')
@section('title')
    New Slider
    @endsection
@section('body')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- Form validations -->
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Slider Form
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Slider Name <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" placeholder="Slider Name" id="cname" name="slider_name" minlength="5" type="text" required />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Slider Description</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="editor" name="slider_description" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Slider Image</label>
                                        <div class="col-lg-10">
                                            <input class="btn btn-file" name="slider_image" type="file" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{ route('cancel') }}"class="btn btn-default"> Cancel </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>


@endsection