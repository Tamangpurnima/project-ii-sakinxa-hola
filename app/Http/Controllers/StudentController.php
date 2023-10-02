<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Students;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'contact' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'passedYear' => 'required',
        //     'previouscollege' => 'required',
        //     'gpa' => 'required',
        //     'interests' => 'required',
        //     'goals' => 'required',
        // ]);

        $Student = new Students([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'passedyear' => $request->input('passedYear'),
            'previousschool' => $request->input('previouscollege'),
            'gpa' => $request->input('gpa'),
            'interest' => $request->input('interests'),
            'goal' => $request->input('goals'),
            'password' => bcrypt($request->input('password')),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $Student->image = $imageName;
        }

        $Student->save();

        return redirect()->route('home')->with('success', 'Student created successfully');
    }

    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    public function edit($id)
    {
        $student = Students::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = Students::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $student->image = $imageName;
        }

        $student->save();

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    public function getById($id)
    {
        $student = Students::find($id);
        return view('students.view', compact('student'));
    }

    public function show(Students $student)
    {
        $student=Students::all();
        return view('admin.studentshow',['student'=>$student]);
    }
    public function getByIdForAdmin($id)
    {
        $student = Students::find($id);
        return view('admin.studentDetailView', compact('student'));
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'contact' => 'required',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'passedYear' => 'required',
    //         'previouscollege' => 'required',
    //         'gpa' => 'required',
    //         'interests' => 'required',
    //         'goals' => 'required',
    //     ]);

    //     $student = Students::find($id);
        
    //     if (!$student) {
    //         return redirect()->route('students.index')->with('error', 'Student not found');
    //     }

    //     $student->name = $request->input('name');
    //     $student->email = $request->input('email');
    //     $student->contact = $request->input('contact');
    //     $student->passedyear = $request->input('passedYear');
    //     $student->previousschool = $request->input('previouscollege');
    //     $student->gpa = $request->input('gpa');
    //     $student->interest = $request->input('interests');
    //     $student->goal = $request->input('goals');

    //     if ($request->hasFile('image')) {
    //         // Delete the old image if it exists
    //         if ($student->image) {
    //             // Delete the old image file from storage
    //             $oldImagePath = public_path('uploads/' . $student->image);
    //             if (file_exists($oldImagePath)) {
    //                 unlink($oldImagePath);
    //             }
    //         }

    //         // Upload and save the new image
    //         $image = $request->file('image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('uploads'), $imageName);
    //         $student->image = $imageName;
    //     }

    //     $student->save();

    //     return redirect()->route('students.index')->with('success', 'Student updated successfully');
    // }

    public function activateStudent($id)
    {
        $student = Students::find($id);
        
        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }

        // Set the status to "active"
        $student->status = 'active';
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student status set to active');
    }

}




