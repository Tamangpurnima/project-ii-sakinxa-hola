<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data (adjust the validation rules as needed)
        $validatedData = $request->validate([
            'student_id' => 'required|integer',
            'collegedetail_id' => 'required|integer',
            'inquirydate' => 'required|date',
        ]);
    
        // Create a new inquiry record using the validated data
        Inquiry::create($validatedData);
    
        // Optionally, you can redirect the user to a success page or return a response
        return redirect()->route('inquiry.home')->with('success', 'Inquiry created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inqyiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
        {
       
            $inquiry=Inquiry::all();
            return view('home.inquiryshow',['inquiry'=>$inquiry]);
        }
    
    public function showForAdmin(Inquiry $inquiry)
        {
       
            $inquiry=Inquiry::all();
            return view('admin.inquiryshow',['inquiry'=>$inquiry]);
        }
       
    public function showForCollege(Inquiry $inquiry)
        {
            // $inquiry=Inquiry::all();
            $inquiry = Inquiry::with('student')->get();
            return view('college.inquiry',['inquiry'=>$inquiry]);
        }
       
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inqyiry  $inqyiry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquiry=Inquiry::find($id);
        return view('home.inquiryedit', ['inquiry'=>$inquiry]);
    }
    public function editForCollege($id)
    {
        $inquiry=Inquiry::find($id);
        return view('college.inquiryedit', ['inquiry'=>$inquiry]);
    }
    public function editForAdmin($id)
    {
        $inquiry=Inquiry::find($id);
        return view('admin.inquiryedit', ['inquiry'=>$inquiry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inqyiry  $inqyiry
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
        
    //     $inquiry = Inquiry::find($id);
    //     $inquiry->inquirydate = $request->input('inquirydate');
    //     $inquiry->save();
    
    //    return redirect()->route('inquiry.show');
    // }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        // Find the inquiry by ID
        $inquiry = Inquiry::find($id);

        // Check if the inquiry exists
        if (!$inquiry) {
            return redirect()->back()->with('error', 'Inquiry not found.');
        }

        // Update the inquiry with the validated data
        $inquiry->update([
            'message' => $validatedData['message'],
        ]);

        return redirect()->route('college.inquiryshow')->with('success', 'Inquiry updated successfully.');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inqyiry  $inqyiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry, $id)
    {
        $inquiry=Inquiry::find($id);
        $inquiry->delete();
        return redirect()->route('student.getInquiries');

    }
    public function makeInquiry($id){
        $currentStudent = Auth::guard('student')->user();
        $inquiry = new Inquiry([
            'student_id' => $currentStudent->id,
            'coursedetail_id' => $id,
            'message' => "",
            'inquirydate' => Carbon::now(),
        ]);
        $inquiry->save();
        return redirect()->back()->with('success', 'Inquiry created successfully');
    }
}
