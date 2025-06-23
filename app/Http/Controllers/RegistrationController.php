<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Club;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function create()
    {
        $clubs = Club::all();
        $departments = [
            'CSE', 'IT', 'ECE', 'EEE', 'MECH', 'CIVIL', 'DS', 'AI-ML',
            'MECT', 'CSBS', 'ARCH'
        ];

        return view('enroll', compact('clubs', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'roll_no' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'department' => 'required|string',
            'clubs' => 'required|array|min:1|max:3',
        ]);

        // Check duplicate
        $alreadyRegistered = Registration::where('roll_no', $request->roll_no)
            ->orWhere('email', $request->email)
            ->exists();

        if ($alreadyRegistered) {
            return redirect()->route('register.form')
                ->with('popup_message', '⚠️ You have already registered using this Roll No or Email.')
                ->with('popup_type', 'warning')
                ->with('redirect_to', 'form');
        }

        // Check club limits
        foreach ($request->clubs as $clubId) {
            $count = DB::table('club_registration')->where('club_id', $clubId)->count();
            if ($count >= 100) {
                $club = Club::find($clubId);
                return redirect()->route('register.form')
                    ->with('popup_message', '❌ ' . $club->club_name . ' has reached its 100 student limit.')
                    ->with('popup_type', 'danger')
                    ->with('redirect_to', 'form');
            }
        }

        // Upload photo
        $photoPath = $request->file('photo')->store('photos', 'public');

        // Store registration
        $registration = Registration::create([
            'name' => $request->name,
            'roll_no' => $request->roll_no,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $photoPath,
            'department' => $request->department,
        ]);

        // Register clubs
        foreach ($request->clubs as $clubId) {
            DB::table('club_registration')->insert([
                'registration_id' => $registration->id,
                'club_id' => $clubId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('register.form')
            ->with('popup_message', '🎉 Registration successful!')
            ->with('popup_type', 'success')
            ->with('redirect_to', 'home');
    }
}
