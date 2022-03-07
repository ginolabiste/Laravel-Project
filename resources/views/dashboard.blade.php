@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Enrollment Pre-registration Module', 'navName' => 'Dashboard Controls', 'activeButton' => 'dashboard'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" id="admissionCountEnrollee">
                            {{ $counted }} enrollees
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
                            {{ $incoming }} incoming first year
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
                            {{ $transferees }} transferees
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
                            {{ $returning }} returning
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
                        {{ $hasSchoolID }} given ID No.
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