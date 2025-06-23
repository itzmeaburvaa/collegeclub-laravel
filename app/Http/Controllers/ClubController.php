<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
    {
        // Read all clubs for display
        $clubs = Club::all();

        return view('index', compact('clubs'));
    }

    // Disable store functionality from student side
    public function store(Request $request)
    {
        abort(403, 'Unauthorized action. Club creation is restricted to admin.');
    }
}
