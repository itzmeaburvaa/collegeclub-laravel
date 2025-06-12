<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('enroll');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image',
            'year_of_study' => 'required',
            'department' => 'required',
            'clubs' => 'array|max:3'
        ]);

        // Upload image to storage/app/public/photos
        $photoPath = $request->file('photo')->store('photos', 'public');

        // Get selected clubs
        $clubs = $request->input('clubs', []);
        $club1 = $clubs[0] ?? null;
        $club2 = $clubs[1] ?? null;
        $club3 = $clubs[2] ?? null;

        Registration::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'year_of_study' => $request->year_of_study,
            'department' => $request->department,
            'club1' => $club1,
            'club2' => $club2,
            'club3' => $club3,
            'created_at' => now(),
        ]);

        return back()->with('success', 'Submission Successful!');
    }
}