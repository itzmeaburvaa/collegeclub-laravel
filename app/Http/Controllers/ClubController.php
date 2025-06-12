<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
    {
        // Fetch all clubs from the database
        $clubs = club::all();

        // Pass the data to the Blade view (e.g., resources/views/clubs.blade.php)
        return view('index', compact('clubs'));
    }
    public function store(Request $request)
{
    $request->validate([
        'cname' => 'required',
        'logo' => 'required|image',
        'intro' => 'nullable',
        'mission' => 'nullable',
        'faculty' => 'nullable',
        'facultyno' => 'nullable',
        'eventno' => 'nullable|integer',
        'teamno' => 'nullable|integer',
        'participants' => 'nullable|integer',
        'year' => 'nullable'
    ]);

    $path = $request->file('logo')->store('img', 'public');

    Club::create([
        'cname' => $request->cname,
        'logo' => 'storage/' . $path,
        'intro' => $request->intro,
        'mission' => $request->mission,
        'faculty' => $request->faculty,
        'facultyno' => $request->facultyno,
        'eventno' => $request->eventno,
        'teamno' => $request->teamno,
        'participants' => $request->participants,
        'year' => $request->year,
    ]);

    return redirect()->back()->with('success', 'Club added!');
}
}