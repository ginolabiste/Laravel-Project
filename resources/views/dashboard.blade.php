@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Enrollment Pre-registration Module', 'navName' => 'Dashboard Controls', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            Enrollment Pre-registration
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <label for="schoolYear">School Year</label>
                                        <select class="form-select form-control" aria-label="semester" id="semester">
                                            <option selected>Choose---</option>
                                            @for($i = -1; $i < 3; $i++)
                                            <option value="{{ date('Y') + $i }}-{{ date('Y') + $i + 1 }}">{{ date('Y') + $i }}-{{ date('Y') + $i + 1 }}</option>
                                            @endfor
                                        </select> 
                                    </div>
                                    <div class="col">
                                        <label for="semester">School Semester</label>
                                        <select class="form-select form-control" aria-label="semester" id="semester">
                                            <option selected>Choose---</option>
                                            <option value="1">First Semester</option>
                                            <option value="2">Second Semester</option>
                                            <option value="3">Summer Semester</option>
                                            <option value="4">Late Semester</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary ">Open Pre-registration</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            6,451 enrollees
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            1,605 incoming first year
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            509 transferees
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            48 returning
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            867 accepted by program
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            119 transferred to
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            800 given ID No.
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            4,000 advised
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-end" href="#">View Details</a>
                            <div class="small"><i class="nc-icon nc-stre-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            //demo.showNotification();

        });
    </script>
@endpush