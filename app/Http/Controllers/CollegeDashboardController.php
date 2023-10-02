<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\College;
use App\Models\CourseDetail;
use App\Models\Inquiry;
use App\Models\Students;
use App\Models\Contact;

class CollegeDashboardController extends Controller
{
    //

    public function count()
    {
        $coursecount = Course::count();
        $coursedetailcount = CourseDetail::count();
        $inquirycount = Inquiry::count();
        
        // Pass multiple values to the view using compact
        return view('college.dashboard', compact('coursecount', 'coursedetailcount', 'inquirycount'));
    }
}
