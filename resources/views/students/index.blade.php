@extends('layouts.app', ['activePage' => 'students', 'title' => 'Students List - DOrSU', 'navName' => 'Students', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Students List</h4>
                            <p class="card-category">{{ __('Editable through if else') }}</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>School ID</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            @if ($student->school_id == NULL)
                                                <td>{{ __('Not yet advised') }}</td>
                                            @else
                                                <td>{{ $student->school_id }}</td>
                                            @endif
                                            <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
                                            @if ($student->acronyms == NULL)
                                                <td>{{ $student->acronyms }}</td>
                                            @else
                                                <td>{{ $student->acronyms }}</td>
                                            @endif
                                            <td>{{ $student->application_status }}</td>
                                            @if ($student->student_status == NULL)
                                                <td>{{ __('Ongoing') }}</td>
                                            @else
                                                <td>{{ $student->student_status }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex float-right pr-4">
                                {!! $students->appends(['sort' => 'students'])->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection