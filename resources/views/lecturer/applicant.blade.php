@extends('layouts.master')
@section('title', 'Applicant')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- file preview template -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                {{-- <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div> --}}
                            </div>
                            <h4 class="mt-0 header-title">Applicant</h4>
                            <p class="text-muted font-14 mb-3">
                                List of all the Applicant to your activities.
                            </p>
                    
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>NIM</th>
                                            <th>Major</th>
                                            <th>CV</th>
                                            <th>Motivation Letter</th>
                                            <th>KHS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shafaa</td>
                                            <td>1381253123</td>
                                            <td>S1 Teknik Industri</td>
                                            <td> <a href="">/public/files/cv.pdf</a></td>
                                            <td> <a href="">/public/files/motivation_letter.pdf</a></td>
                                            <td> <a href="">/public/files/khs.pdf</a></td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>....</option>
                                                    <option value="accept">Accept</option>
                                                    <option value="reject">Reject</option>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->  
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

@endsection