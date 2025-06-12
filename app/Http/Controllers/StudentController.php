<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Teammem;

class StudentController extends Controller
{
   public function show(Request $request)
{
    $query = Registration::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('department')) {
        $query->where('department', $request->department);
    }

    if ($request->filled('year')) {
        $query->where('year_of_study', $request->year);
    }

    $students = $query->get();
    $filteredClub = $request->club;

    $finalList = collect();

    foreach ($students as $student) {
        $clubs = collect([
            'club1' => $student->club1,
            'club2' => $student->club2,
            'club3' => $student->club3
        ])->filter();

        foreach ($clubs as $key => $club) {
            if (!$filteredClub || strcasecmp($filteredClub, $club) === 0) {
                $finalList->push((object)[
                    'id' => $student->id,
                    'name' => $student->name,
                    'department' => $student->department,
                    'year_of_study' => $student->year_of_study,
                    'club' => $club,
                    'created_at' => $student->created_at
                ]);
            }
        }
    }

    return view('registeredstu', ['students' => $finalList]);
}




    public function acceptClub($id, $club)
    {
        $student = Registration::findOrFail($id);

        Teammem::create([
            'name' => $student->name,
            'photo' => $student->photo,
            'year_of_study' => $student->year_of_study,
            'department' => $student->department,
            'club1' => $club, // only one club added
            'club2' => null,
            'club3' => null,
        ]);

        // Remove that club from registration
        foreach (['club1', 'club2', 'club3'] as $clubKey) {
            if ($student->$clubKey === $club) {
                $student->$clubKey = null;
            }
        }

        // If all clubs are null, delete registration
        if (is_null($student->club1) && is_null($student->club2) && is_null($student->club3)) {
            $student->delete();
        } else {
            $student->save();
        }

        return redirect()->route('students.list')->with('success', "Accepted for club $club");
    }

    public function rejectClub($id, $club)
    {
        $student = Registration::findOrFail($id);

        foreach (['club1', 'club2', 'club3'] as $clubKey) {
            if ($student->$clubKey === $club) {
                $student->$clubKey = null;
            }
        }

        // If all clubs are null, delete registration
        if (is_null($student->club1) && is_null($student->club2) && is_null($student->club3)) {
            $student->delete();
        } else {
            $student->save();
        }

        return redirect()->route('students.list')->with('success', "Rejected for club $club");
    }
}