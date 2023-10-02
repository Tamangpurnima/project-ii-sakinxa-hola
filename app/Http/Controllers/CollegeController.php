<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;


class CollegeController extends Controller
{
    public function create()
    {
        return view('college.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:colleges,email',
            'password' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
            'description' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        
        // Hash the password and store it in the $data array
        $data['password'] = bcrypt($request->input('password'));
        

        // Handle Logo Upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        // Create College
        $college = College::create($data);

        // Handle Gallery Image Uploads
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imagePath = $image->store('gallery', 'public');
                $college->images()->create(['path' => $imagePath]);
            }
        }

        return redirect()->route('home')->with('success', 'College registered successfully!');
    }


     function show(College $college)
    {
        $college=College::all();
        return view('admin.collegeshow',['college'=>$college]);
    }

     function showForStudent(College $college)
    {
        $college=College::all();
        return view('home.college',['college'=>$college]);
    }

    public function getById($id)
    {
        $college= College::find($id);
        return view('college.viewcollegedes', compact('college'));
    }

    public function getByIdForAdmin($id)
    {
        $college = College::with('courseDetails.course')->find($id);
        return view('admin.collegeDetailView', compact('college'));
    }
    public function getByIdForStudent($id)
    {
        $college = College::with('courseDetails.course')->find($id);
        return view('home.collegeDetailView', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:colleges,email,' . $college->id,
            'phone' => 'required|string',
            'contact' => 'required|string',
            'description' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle Logo Upload
        if ($request->hasFile('logo')) {
            // Delete the old logo file if it exists
            if ($college->logo) {
                Storage::disk('public')->delete($college->logo);
            }

            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        // Update College
        $college->update($data);

        // Handle Gallery Image Uploads
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imagePath = $image->store('gallery', 'public');
                $college->images()->create(['path' => $imagePath]);
            }
        }

        return redirect()->route('home')->with('success', 'College updated successfully!');
    }

    public function activateCollege(College $college)
    {
        // Update the status to "active"
        $college->update(['status' => 'active']);

        return redirect()->route('home')->with('success', 'College status updated to active!');
    }

    public function getCollegeByCourseId($id)
    {
        // return view('home.courseCollegeView', compact('college'));
        return view('home.courseCollegeView');
    }
}
