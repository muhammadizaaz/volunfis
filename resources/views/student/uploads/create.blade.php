@extends('layouts.master')
@section('title', 'Apply Form')
@section('content')

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="title">Apply Form</h2>
                                <p class="sub-header">Your Information</p>
                                <form class="needs-validation" action="{{ route('student.upload-file.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label"></label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="{{ auth()->user()->id }}" name="user_id" required hidden />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">CV</label>
                                        <input type="file" class="form-control" id="validationCustom04"
                                        data-plugins="dropify" name="cv" placeholder="add here"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Motivation Letter</label>
                                        <input type="file" class="form-control" id="validationCustom04"
                                        data-plugins="dropify" name="motivation_letter" placeholder="add here"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">KHS</label>
                                        <input type="file" class="form-control" id="validationCustom04"
                                        data-plugins="dropify" name="khs" placeholder="add here"/>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Apply Now</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

@endsection
