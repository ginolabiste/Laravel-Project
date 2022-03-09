<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $enrollees = Student::all();
        $semesters = Semester::all()->max('created_at')->toArray();
        $current_semester = Semester::where('created_at', $semesters['formatted'])->get();

        
        $countEnrollees = $enrollees->count();
        $countIncoming = $enrollees->where('student_status', 'incoming')->count();
        $countTransferees = $enrollees->where('student_status', 'transferee')->count();
        $countReturning = $enrollees->where('student_status', 'returnee')->count();
        $countOld = $enrollees->where('student_status', 'old')->count();
        $countAdvised = $enrollees->where('application_status', 'advised')->count();
        $countAccepted = $enrollees->where('application_status', 'accepted')->count();
        $transferredTo = $enrollees->where('application_status', 'transferred_to')->count();
        $hasSchoolID = $enrollees->where('school_id', '!=', NULL)->count();

        return view('dashboard', [
            'counted' => $countEnrollees,
            'incoming' => $countIncoming,
            'transferees' => $countTransferees,
            'returning' => $countReturning,
            'old' => $countOld,
            'countAdvised' => $countAdvised,
            'countAccepted' => $countAccepted,
            'transferredTo' => $transferredTo,
            'hasSchoolID' => $hasSchoolID,
            'semesters' => $current_semester
        ]);
    }
}
