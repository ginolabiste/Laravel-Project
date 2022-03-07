<?php

namespace App\Http\Controllers;

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

        $countEnrollees = $enrollees->count();
        $countIncoming = $enrollees->where('student_status', 'incoming')->count();
        $countTransferees = $enrollees->where('student_status', 'transferee')->count();
        $countReturning = $enrollees->where('student_status', 'returnee')->count();
        $countOld = $enrollees->where('student_status', 'old')->count();
        $hasSchoolID = $enrollees->where('school_id', '!==', 'NULL')->count();

        return view('dashboard', [
            'counted' => $countEnrollees,
            'incoming' => $countIncoming,
            'transferees' => $countTransferees,
            'returning' => $countReturning,
            'old' => $countOld,
            'hasSchoolID' => $hasSchoolID
        ]);
    }
}
