@extends('layouts.app', ['activePage' => 'manage-advisers', 'title' => 'Enrollment Pre-registration Module', 'navName' => 'Program Head Management', 'activeButton' => 'advisers'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-body table-full-width table-responsive">
                        <div class="col-sm-12">
                            <form action="/program-head" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <div class="form-group col-sm-4">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search Full Name" name="fullname">
                                        <input type="hidden" name="employee_id">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select class="form-control" name="academic_year">
                                            <option>Academic Year</option>
                                            <option>2021-2022</option>
                                            <option>2022-2023</option>
                                            <option>2023-2024</option>
                                            <option>2024-2025</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select class="form-control" name="semester">
                                            <option>Semester</option>
                                            <option>First Semester</option>
                                            <option>Second Semester</option>
                                            <option>Summer</option>
                                            <option>Late</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">Assign</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"></h4>
                        <p class="card-category">{{ __('Lists of Advisers') }}</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Employee ID</th>
                                <th>Full Name</th>
                                <th>Designated By</th>
                                <th>Academic Year</th>
                                <th>Semester</th>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->employed_by }}</td>
                                        <td>{{ $employee->date_started }}</td>
                                        <td>{{ $employee->date_ended }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection